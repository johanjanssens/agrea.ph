<?php

class ExtPagesTemplateHelperLazysizes extends ComPagesTemplateHelperBehavior
{
    public function import($plugin = '', $config = array())
    {
        $config = new KObjectConfigJson($config);
        $config->append(array(
            'debug' =>  JFactory::getApplication()->getCfg('debug'),
        ));

        $html   = '';
        $script = $plugin ? 'lazysizes-'.$plugin : 'lazysizes';
        if (!static::isLoaded($script))
        {
            if($script == 'lazysizes') {
                $html .= '<ktml:script src="https://unpkg.com/lazysizes@5.2.2/lazysizes.'.(!$config->debug ? 'min.js' : 'js').'" defer="defer" />';
            }

            if($script == 'lazysizes-bgset')
            {
                $html .= $this->import();
                $html .= '<ktml:script src="https://unpkg.com/lazysizes@5.2.2/plugins/bgset/ls.bgset.' . (!$config->debug ? 'min.js' : 'js') . '" defer="defer" />';
            }

            if($script == 'lazysizes-unveilhooks')
            {
                $html .= $this->import();
                $html .= '<ktml:script src="https://unpkg.com/lazysizes@5.2.2/plugins/unveilhooks/ls.unveilhooks.' . (!$config->debug ? 'min.js' : 'js') . '" defer="defer" />';
            }

            static::setLoaded($script);
        }

        return $html;
    }
}
