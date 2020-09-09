<?php
return [
    'ext:pages.template.helper.image' => [
        'enable'    => getenv('SITE') ? true : false,
        'suffix'    => 'php',
        'exclude'   => ['gif'],
        'max_width' => 1600,
        'base_path' => JPATH_ROOT,
    ],
];
