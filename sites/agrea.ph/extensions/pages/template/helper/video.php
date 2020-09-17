<?php

class ExtPagesTemplateHelperVideo extends ComPagesTemplateHelperBehavior
{
    public function __invoke($config = array())
    {
        $config = new KObjectConfigJson($config);
        $config->append(array(

        ));

        $html = '';
        if (!static::isLoaded('plyr'))
        {
            $html .= '<ktml:script src="https://unpkg.com/plyr@3.6.2/dist/plyr.'.(!$config->debug ? 'min.js' : 'js').'" defer="defer" />';
            $html .= '<ktml:style src="https://unpkg.com/plyr@3.6.2/dist/plyr.css" />';

            $html .= <<<PLYR
   <script>
   document.addEventListener("DOMContentLoaded", () => {
      const player = new Plyr(document.getElementById('player'));
   });
   </script>
   PLYR;

            static::setLoaded('plyr');
        }

        return $html;
    }
}
