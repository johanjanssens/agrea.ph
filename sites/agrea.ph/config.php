<?php
return array(

    // Site
    'site' => [
        'body_class'        => 'h-full',
        'copyright_notice'  => 'Agrea | All rights reserved',
        'main_color'        => '#788023',
        'name'              => 'AGREA',
    ],

    // Page
    'page' => [

        'metadata' => [
            'og:site_name'  => 'Agrea - Ecology of Dignity',
            'og:url'        => 'https://www.agrea.ph/',
            'og:title'      => 'Agrea',
            'og:description'=> 'AGREA aims to help eradicate poverty for farming and fishing families, to alleviate the effects of climate change and to help establish food security in the Philippines.',
            'og:image'      => 'theme://images/icons/open-graph-2400x1200.png',
            'twitter:site'  => '@AgreaPHL',
            'twitter:card'  => 'summary_large_image',
            //'fb:pages'     => '111111111111111'
        ],

        'visible'   => true,
        'published' => true,
    ],

    'aliases' => [
        'images://' => getenv('SITE') ? '/images/agrea.ph/pages/' : '/sites/agrea.ph/images/',
    ],

    // Google Analytics
    'ga_code' => 'O-gAbCcD1E2FGHIJKlmnO3PqRst4Uv5wXzz-O1xx_xx',

);
