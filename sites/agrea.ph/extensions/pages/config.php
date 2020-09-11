<?php
return [
    'ext:pages.template.helper.image' => [
        'enable'    => getenv('SITE') ? true : false,
        'suffix'    => getenv('SITE') ? 'php': '',
        'exclude'   => ['gif'],
        'max_width' => 1280,
        'base_path' => JPATH_ROOT,
    ],
];
