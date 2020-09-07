<?php

class ExtPagesTemplateHelperImage extends ComPagesTemplateHelperAbstract
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'max_width' => 1920,
            'min_width' => 320,
            'base_path' => JPATH_ROOT,
        ));

        parent::_initialize($config);
    }

    public function __invoke($config = array())
    {
        $config = new KObjectConfigJson($config);
        $config->append(array(
            'image'   => '',
            'alt'     => '',
            'bg'      => '',
            'class'   => array('lazyload'),
            'width'   => null,
            'height'  => null,
            'max_width' => $this->getConfig()->max_width,
            'min_width' => $this->getConfig()->min_width,
            'preload'   => false,
        ))->append(array(
            'attributes' => array('class' => $config->class),
        ));

        //Calculate the max width
        if(stripos($config->max_width, '%') !== false) {
            $config->max_width = ceil($this->getConfig()->max_width / 100 * (int) $config->max_width);
        }

        if(stripos($config->min_width, '%') !== false) {
            $config->min_width = ceil($this->getConfig()->min_width / 100 * (int) $config->min_width);
        }

        //Build path for the high quality image
        $hqi_url = $this->url($config->image.'.php');

        //Build the path for the low quality image
        $lqi_url = $this->url($config->image.'.php', ['px' => 2, 'bl' => 80, 'q' => 25, 'bg' => $config->bg]);

        //Responsive image with auto sizing through lazysizes
        $html = '';
        if(!isset($config['width']) && !isset($config['height']))
        {
            $breakpoints = $this->_calculateBreakpoints($config->image, $config->max_width, $config->min_width);

            $srcset = sprintf($lqi_url.'&fm=jpg&w=%1$s', $breakpoints[0]);

            //Generate data url for low quality image and preload it inline
            if($config['preload']) {

                if($data = @file_get_contents($srcset)) {
                    $srcset = 'data:image/jpg;base64,'.base64_encode($data);
                }
            }

            $data_srcset = array();
            foreach($breakpoints as $breakpoint) {
                $data_srcset[] = sprintf($hqi_url.'&w=%1$s %1$sw', $breakpoint);
            }

            //Combine a normal src attribute with a low quality image as srcset value and a data-srcset attribute.
            //Modern browsers will lazy load without loading the src attribute and all others will simply fallback
            //to the initial src attribute (without lazyload).
            //
            //Set data-expaned to -10 to only load the image when it becomes visible in the viewport
            $html .='<img width="'.$breakpoints[0].'" src="'.$hqi_url.'&w='.$breakpoints[0].'"
                srcset="'.$srcset.'"
                data-sizes="auto"
                data-srcset="'. implode(', ', $data_srcset).'"
                alt="'.$config->alt.'" '.$this->buildAttributes($config->attributes).'  data-expand="-10"  />';
        }
        //Fixed image with display density description
        else
        {
            list($width, $height) = @getimagesize($this->getConfig()->base_path.$config->image);

            $width  = $config->width ?? $width;
            $height = $config->height ?? $height;

            $srcset = array(
                sprintf($hqi_url.'&w=%1$s&h=%2$s&&dpr=1 1x', $width, $height),
                sprintf($hqi_url.'&w=%1$s&h=%2$s&dpr=2 2x', $width, $height),
                sprintf($hqi_url.'&w=%1$s&h=%2$s&dpr=3 3x', $width, $height),
            );

            if($config->height) {
                $size = 'height="'.$height.'"';
            } else {
                $size = 'width="'.$width.'"';
            }

            //Combine transparent image as srcset value and a data-srcset attribute. In case disabled JavaScript is
            //disabled, fallback on the noscript element.
            //
            //Set data-expand to 300 to delay loading the image
            $html = '<noscript>';
            $html .=    '<img '.$size.' src="'.$hqi_url.'&w='.$width.'" alt="'.$config->alt.'" '.$this->buildAttributes($config->attributes).' />';
            $html .= '</noscript>';
            $html .='<img '.$size.'
                srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                data-srcset="'. implode(',', $srcset).'"
                alt="'.$config->alt.'" '.$this->buildAttributes($config->attributes).' data-expand="300" />';
        }

        return $html;
    }

    public function url($image, $parameters = array())
    {
        $config = new KObjectConfigJson($parameters);
        $config->append(array(
            'auto' => 'true',
        ));

        $url = $image.'?'.urldecode(http_build_query(array_filter(KObjectConfig::unbox($config, '&'))));

        return $url;
    }

    public function html($html, $options = array())
    {
        $matches = array();
        if(preg_match_all('#<img(.*)>#siU', $html, $matches))
        {
            foreach($matches[1] as $key => $match)
            {
                $attribs = $this->parseAttributes($match);
                $src     = $attribs['src'] ?? null;

                //Only handle local none gif-images
                if($src && substr($src, 0, 4) != 'http' && pathinfo($src, PATHINFO_EXTENSION) != 'gif')
                {
                    //Convert class to array
                    if(isset($attribs['class'])) {
                        $attribs['class'] = explode(' ', $attribs['class']);
                    }

                    $attribs['image'] = $src;
                    unset($attribs['src']);

                    //Merge config and attribs
                    $config = array_merge_recursive($options, $attribs);

                    $html  = str_replace($matches[0][$key], $this->__invoke($config), $html);
                }
            }
        }

        return $html;
    }

    public function parseAttributes($string)
    {
        $result = array();

        if (!empty($string))
        {
            $pattern = '#(?(DEFINE)
                (?<name>[a-zA-Z][a-zA-Z0-9-_:]*)
                (?<value_double>"[^"]+")
                (?<value_none>[^\s>]+)
                (?<value>((?&value_double)|(?&value_none)))
            )
            (?<n>(?&name))[\s]*(=[\s]*(?<v>(?&value)))?#xs';

            if (preg_match_all($pattern, $string, $matches, PREG_SET_ORDER))
            {
                foreach ($matches as $match) {
                    if (!empty($match['n'])) {
                        $result[$match['n']] = isset($match['v']) ? trim($match['v'], '\'"') : '';
                    }
                }
            }
        }

        return $result;
    }

    /*
     * Dynamically calculate the response image breakpoints based on fixed filesize reduction
     *
     * Inspired by https://stitcher.io/blog/tackling_responsive_images-part_2
     */
    protected function _calculateBreakpoints($image, $max_width, $min_width)
    {
        $min_filesize = 1024 * 10; //10kb
        $modifier     = 0.7;       //70% (each image should be +/- 30% smaller in expected size)

        //Get dimensions
        list($width, $height) = @getimagesize($this->getConfig()->base_path.$image);

        //Get filesize
        $filesize = @filesize($this->getConfig()->base_path.$image);

        $breakpoints = array();
        if ($width < $max_width) {
            $breakpoints[] = $width;
        }

        $ratio   = $height / $width;
        $area    = $height * $width;

        $density = $filesize / $area;

        while(true)
        {
            $filesize *= $modifier;

            if ((int) $filesize < $min_filesize) {
                break;
            }

            $width = (int) floor(sqrt(( $filesize / $density) / $ratio));

            if ($width < $min_width) {
                break;
            }

            //Add the width
            if ($width < $max_width) {
                $breakpoints[] = $width;
            }
        }

        return $breakpoints;
    }

}
