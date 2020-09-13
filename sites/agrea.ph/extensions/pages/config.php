<?php
return [
    'ext:pages.template.helper.image' => [
        'suffix'    => getenv('SITE') ? 'php': '',
        'exclude'   => ['gif'],
        'max_width' => 1280,
        'base_path' => JPATH_ROOT,
    ],
    'ext:pages.template.filter.image'   => [
         'enable'    => getenv('SITE') ? true : false,
   ],
];
