<?php
//Check if we have been redirected by Apache
if(getenv('REDIRECT_IMAGE') !== false)
{
    /**
     * Config options
     */
    $gc_time    = '1week';  //time before images that are not accessed are garbage collected

    $cache_time   = '1year';  //time to cache the image on the network
    $cache_dir    = getenv('KPATH_PAGES_CACHE') ? $_SERVER['DOCUMENT_ROOT'].getenv('KPATH_PAGES_CACHE') : false;
    $cache_bypass = isset($_SERVER['HTTP_CACHE_CONTROL']) && strstr($_SERVER['HTTP_CACHE_CONTROL'], 'no-cache') !== false;

    $gc_time    = is_string($gc_time) ? strtotime($gc_time) - strtotime('now') : $gc_time;
    $cache_time = is_string($cache_time) ? strtotime($cache_time) - strtotime('now') : $cache_time;

    //Get the url
    $host    = filter_var($_SERVER['HTTP_HOST'], FILTER_SANITIZE_URL);
    $request = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
    $parts   = parse_url('https://'.strtolower($host.$request));

    //Time
    $time = microtime(true);

    if($parts['query'] && $parts['path'])
    {
        $basepath  = '';
        $filepath  = str_replace($basepath, '', str_replace('.php', '', trim($parts['path'], '/')));

        $original  = __DIR__.'/'.$filepath;
        $generated = false;

        //Get the parameters
        $parameters = array();
        parse_str($parts['query'], $parameters);

        $enhance  = false;
        $compress = true;
        $type     = null;

        if(isset($parameters['auto']))
        {
            $directives = array_map('trim', explode(',', $parameters['auto']));

            if(!isset($parameters['fm']) && (in_array('format', $directives) || in_array('true', $directives)))
            {
                $parameters['fm'] = 'pjpg';

                //Return JPEG200 if supported (Safari 6+ only)
                if(isset($_SERVER['HTTP_USER_AGENT']) && strstr($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false)
                {
                    preg_match('/Version\/(?P<version>[0-9]{2})/', $_SERVER['HTTP_USER_AGENT'], $params);

                    //Because Safari 5 only represents 0.22% of browser usage on the world, ignore Windows/Mac
                    // detection and start from version 6. Safari Accept Header does not specify JP2 support,
                    // so as a fallback we are going to check if the browser is Safari, and check it’s version.
                    if ((preg_match('/Version\/(?P<version>[0-9])/', $_SERVER['HTTP_USER_AGENT'], $params)) && (round($params['version']) >= 6))
                    {
                        if(Image::isSupported('jp2')) {
                            $parameters['fm'] = 'jp2';
                        }
                    }
                }

                //Return WebP if supported (be forward compat when Safari offers Webp support)
                if(isset($_SERVER['HTTP_ACCEPT']) && strstr($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false)
                {
                    if(Image::isSupported('webp')) {
                        $parameters['fm'] = 'webp';
                    }
                }
            }

            //Set compression
            if(!isset($parameters['q']) && (in_array('compress', $directives) || in_array('true', $directives)))
            {
                $compress = true;
                $parameters['q']  = 75;
            }

            //Set enchancement
            if(in_array('enhance', $directives) || in_array('true', $directives)) {
                $enhance = true;
            }
        }

        //Set the format
        if(!isset($parameters['fm'])) {
            $parameters['fm'] = strtolower(pathinfo($filepath, PATHINFO_EXTENSION));
        }

        //Set the type
        switch($parameters['fm'])
        {
            case 'jpg'  :
            case 'pjpg' :
            case 'jpeg' : $type = IMAGETYPE_JPEG; break;
            case 'jp2'  : $type = IMAGETYPE_JP2; break;
            case 'gif'  : $type = IMAGETYPE_GIF; break;
            case 'webp' : $type = IMAGETYPE_WEBP; break;
            case 'png'  : $type = IMAGETYPE_PNG; break;
        }

        //Create the filename
        if($cache_dir)
        {
            $path  = $filepath;
            $query = $parameters;

            if($type)
            {
                $search  = pathinfo($filepath, PATHINFO_EXTENSION);
                $replace = image_type_to_extension($type, false);
                $path    = str_replace($search, $replace, $filepath);
            }

            unset($query['fm']);
            $generated = $cache_dir.'/'.$path.'_'.http_build_query($query, '', '&');
        }a

        //Generate image
        $image = null;
        if(!$generated || !file_exists($generated) || $cache_bypass)
        {
            try
            {
                //Load the original
                $image = (new Image())->read($original, $type);

                //Resize
                if(isset($parameters['w']) || isset($parameters['w']))
                {
                    $density = $parameters['dpr'] ?? 1;
                    $image->resize((int) $parameters['w'] ?? null, (int) $parameters['w'] ?? null, (int) $density);
                }

                //Pixellate
                if(isset($parameters['px'])) {
                    $image->pixellate((int) $parameters['px'], true);
                }

                //Blur
                if(isset($parameters['bl'])) {
                    $image->blur((int) $parameters['bl']);
                }

                //Set progressive jpg
                if($parameters['fm'] == 'pjpg' || $parameters['fm'] == 'jp2') {
                    $image->interlace();
                }

                //Enhance the image
                if($enhance) {
                    $image->enhance();
                }

                //Compress the image
                if($compress) {
                    $image->compress();
                }

                //Create the directory
                $dir = dirname($generated);

                if(is_dir($dir) || (true === @mkdir($dir, 0777, true)))
                {
                    //Set quality
                    if(isset($parameters['q'])) {
                        $quality = (int) $parameters['q'];
                    } else {
                        $quality = 100;
                    }

                    //Save the image
                    $image->write($quality, $generated);

                    //Override default permissions for generated files
                    @chmod($generated, 0666 & ~umask());
                }

            }
            catch(Exception $e)
            {
                $log = $cache_dir.'/.error_log';
                error_log(sprintf('Could not generate image: %s, error: %s'."\n", $generated, $e->getMessage()), 3, $log);
            }
        }

        //Garbage collect (single folder only for performance reasons)
        foreach (glob(dirname($generated).'/*') as $file)
        {
            if (is_file($file))
            {
                if (time() - fileatime($file) >= $gc_time) {
                    unlink($file);
                }
            }
        }

        //If the image couldn't be generated use the original instead
        if(file_exists($generated)) {
            $file = $generated;
        } else {
            $file = $original;
        }

        header('Content-Type: '. image_type_to_mime_type($type));
        header('Content-Length: '.filesize($file));
        header('Cache-Control: public, max-age='.$cache_time);
        header('Date: '.date('D, d M Y H:i:s', strtotime('now')).' GMT');
        header('Last-Modified: '.date('D, d M Y H:i:s', filemtime($file)).' GMT');
        header('Vary: Accept');

        //Set X-Created-With
        if($image)
        {
            if($image->isImagick()) {
                $version = Imagick::getVersion()['versionString'];
            } else {
                $version = 'GD '.GD_Info()['GD Version'];
            }

            header('X-Created-With:'.$version);
        }

        //Set Server-Timing
        if (isset($_SERVER['REQUEST_TIME_FLOAT']))
        {
            $time  = (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']) * 1000;
            header('Server-Timing: tot;desc="Total";dur='.(int) $time);
        }

        readfile($file);
    }
}
else http_response_code(404);

Class Image
{
    protected $_image;
    protected $_path;
    protected $_type;

    public function __destruct()
    {
        if(is_resource($this->_image)) {
            imagedestroy($this->_image);
        }
    }

    public function read($file, $type = null)
    {
        if (!is_file($file)){
            throw new Exception('Image not found');
        }

        if($size = getimagesize($file))
        {
            $this->_file = $file;
            $this->_type = $type ?? $size['2'];

            //Use Imagick if supported
            if(class_exists('Imagick'))
            {
                $input =  strtoupper(pathinfo($file, PATHINFO_EXTENSION));
                $output = strtoupper(image_type_to_extension($this->_type, false));

                if(Imagick::queryFormats($input) && Imagick::queryFormats($output)) {
                    $this->_image = new Imagick($file);
                }
            }

            //Fallback to GD
            if(!$this->_image)
            {
                switch($size['2'])
                {
                    case IMAGETYPE_JPEG : $this->_image = @imagecreatefromjpeg($file); break;
                    case IMAGETYPE_GIF  : $this->_image = @imagecreatefromgif($file); break;
                    case IMAGETYPE_PNG  : $this->_image = @imagecreatefrompng($file); break;
                    case IMAGETYPE_WEBP : $this->_image = @imagecreatefromwebp($file); break;
                }
            }
        }

        if(!$this->_image) {
            throw new Exception('File is not a supported image type');
        }

        return $this;
    }

    public function write($quality = 100, $file = null)
    {
        $type    = $this->_type;
        $quality = (int) round($quality);

        //Default: GD
        if(!$this->_image instanceof Imagick)
        {
            switch($type)
            {
                case IMAGETYPE_JP2 :
                case IMAGETYPE_JPEG: imagejpeg($this->_image, $file, $quality); break;
                case IMAGETYPE_GIF : imagegif($this->_image, $file); break;
                case IMAGETYPE_PNG : imagepng($this->_image, $file,  (int)(9 - round(($quality/100) * 9))); break;
                case IMAGETYPE_WEBP: imagewebp($this->_image, $file,  $quality); break;
            }
        }
        //Imagick
        else
        {
            $format = image_type_to_extension($type, false);

            if($type == IMAGETYPE_PNG) {
                $this->_image->setOption('png:compression-level', (int)(9 - round(($quality/100) * 9)));
            } else {
                $this->_image->setImageCompressionQuality($quality);
            }

            $this->_image->setImageFormat($format);

            if($file) {
                $this->_image->writeImage($file);
            } else {
                $this->_image->getImageBlob();
            }
        }

        return $this;
    }

    public function blur($factor = 3)
    {
        $factor = (int) ceil(($factor / 100) * 10);

        //Default: GD
        if(!$this->_image instanceof Imagick)
        {
            $factor = round($factor);

            $original_width  = $this->getWidth();
            $original_height = $this->getHeight();

            $smallest_width  = ceil($original_width * pow(0.775,  $factor));
            $smallest_height = ceil($original_height * pow(0.775, $factor));

            //For the first run, the previous image is the original input
            $prev_image  = $this->_image;
            $prev_width  = $original_width;
            $prev_height = $original_height;

            //Scale way down and gradually scale back up, blurring all the way
            for($i = 0; $i < $factor; $i += 1)
            {
                //Determine dimensions of next image
                $next_width  = $smallest_width * pow(1.5, $i);
                $next_height = $smallest_height * pow(1.5, $i);

                //Resize previous image to next size
                $next_image = imagecreatetruecolor($next_width, $next_height);
                imagecopyresized($next_image, $prev_image, 0, 0, 0, 0, $next_width, $next_height, $prev_width, $prev_height);

                //Apply blur filter
                imagefilter($next_image, IMG_FILTER_GAUSSIAN_BLUR);

                // now the new image becomes the previous image for the next step
                $prev_image = $next_image;
                $prev_width = $next_width;
                $prev_height = $next_height;
            }

            // scale back to original size and blur one more time
            imagecopyresized($this->_image, $next_image, 0, 0, 0, 0, $original_width, $original_height, $next_width, $next_height);
            imagefilter($this->_image, IMG_FILTER_GAUSSIAN_BLUR);
        }
        //Imagick
        else $this->_image->blurImage(0, $factor);

        return $this;
    }

    public function pixellate($size = 1, $advanced = true)
    {
        $size = round($size);

        //Default: GD
        if(!$this->_image instanceof Imagick) {
            imagefilter($this->_image, IMG_FILTER_PIXELATE, $size, $advanced);
        }
        //Imagick
        else
        {
            $width  = $this->getWidth();
            $height = $this->getHeight();

            $this->_image->scaleImage(max(1, ($width / $size)), max(1, ($height / $size)));
            $this->_image->scaleImage($width, $height);
        }

        return $this;
    }

    public function resize($width, $height = null, $density = 1)
    {
        //Calculate the height
        if(!$height) {
            $height = ($this->getHeight()/ $this->getWidth()) * $width * $density;
        }

        //Calculate the height
        if(!$width) {
            $width = ($this->getHeight()/ $this->getWidth()) * $height * $density;
        }

        //Default: GD
        if(!$this->_image instanceof Imagick)
        {
            //Resample the original
            if($resampled = imagecreatetruecolor($width, $height))
            {
                imagecopyresampled($resampled, $this->_image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());

                //Replace the original
                $this->_image  = $resampled;
            }
        }
        //Imagick
        else
        {
            if(method_exists('Imagick', 'adaptiveResizeImage')) {
                $this->_image->adaptiveResizeImage($width, $height);
            } else {
                $this->_image->resizeImage($width, $height, Imagick::FILTER_LANCZOS);
            }
        }

        return $this;
    }

    public function interlace($interlace = true)
    {
        //Default: GD
        if(!$this->_image instanceof Imagick) {
            imageinterlace($this->_image, $interlace);
        //Imagick
        } else {
            $this->_image->setInterlaceScheme(Imagick::INTERLACE_PLANE);
        }

        return $this;
    }

    public function enhance()
    {
        if($this->_image instanceof Imagick)
        {
            $this->_image->enhanceImage();
            $this->_image->sharpenimage(0, 1.25);
        }

        return $this;
    }

    public function compress()
    {
        if($this->_image instanceof Imagick) {
            $this->_image->stripImage();
        }
    }

    public function getWidth()
    {
        //Default: GD
        if(!$this->_image instanceof Imagick) {
            $result = imagesx($this->_image);
        //Imagick
        } else {
            $result = $this->_image->getImageWidth();
        }

        return $result;
    }

    public function getHeight()
    {
        //Default: GD
        if(!$this->_image instanceof Imagick) {
            $result = imagesy($this->_image);
        //Imagick
        } else {
            $result = $this->_image->getImageHeight();
        }

        return $result;
    }

    public function getPath()
    {
        return $this->_path;
    }

    public function isImagick()
    {
        $result = false;

        if(class_exists('Imagick') && $this->_image) {
            $result = $this->_image instanceof Imagick;
        }

        return $result;
    }

    public static function isSupported($format)
    {
        if(class_exists('Imagick')) {
            $supported = (bool) Imagick::queryFormats(strtoupper($format));
        }

        if(!$supported) {
            $supported = in_array(strtolower($format), ['jpeg', 'jpg', 'png', 'gif', 'webp']);
        }

        return $supported;
    }
}
