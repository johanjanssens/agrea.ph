<?php
return [
    'ext:pages.template.helper.image' => [
        'enable'    => getenv('SITE') ? false : false,
        'suffix'    => 'php',
        'exclude'   => ['gif'],
        'max_width' => 1600,
        'base_path' => JPATH_ROOT,
    ],
];
