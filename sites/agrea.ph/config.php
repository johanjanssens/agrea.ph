<?php

//Load server environment
if(isset($_SERVER['HOME']) && file_exists($_SERVER['HOME'].'/private_html/.env.'.getenv('SITE')))
{
  $dotenv = new Symfony\Component\Dotenv\Dotenv();
  $dotenv->usePutenv()->load($_SERVER['HOME'].'/private_html/.env.'.getenv('SITE'));
}

return array(

    // Site
    'site' => [
        'body_class'        => 'h-full',
        'main_color'        => '#788023',
        'name'              => 'AGREA',
    ],

    // Page
    'page' => [

        'metadata' => [
            'summary'       => 'AGREA aims to help eradicate poverty for farming and fishing families, to alleviate the effects of climate change and to help establish food security in the Philippines.',
            'og:site_name'  => 'Agrea - Ecology of Dignity',
            'og:url'        => 'https://www.agrea.ph/',
            'og:title'      => 'Agrea',
            'og:description'=> 'AGREA aims to help eradicate poverty for farming and fishing families, to alleviate the effects of climate change and to help establish food security in the Philippines.',
            'og:image'      => '/theme/images/icons/open-graph-2400x1200.png',
            'twitter:site'  => '@AgreaPHL',
            'twitter:card'  => 'summary_large_image',
            'fb:admins'     => '1385624584'
        ],

        'visible'   => true,
        'published' => true,
    ],

    'aliases' => [
        'theme://'                  => getenv('SITE')  ? '/theme/' : '/sites/agrea.ph/theme/',
        'images://'                 => getenv('SITE') ? '/images/pages/'    : '/sites/agrea.ph/images/',
        'src="images/agrea.ph/articles/' => getenv('SITE') ? 'src="/images/articles/' : 'src="/images/agrea.ph/articles/',
        '/images/agrea.ph/articles/'     => getenv('SITE') ? '/images/articles/' : '/images/agrea.ph/articles/',
    ],

    // Google Analytics
    'ga_code' => getenv('SITE') ? 'G-8ENG0F1RY8' : '',

    // Redirects
    'redirects' =>  include __DIR__.'/redirects.php'

);
