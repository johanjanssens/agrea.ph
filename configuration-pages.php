<?php
return array(

    'http_cache'              => getenv('SITE') ? true : false,
    'http_cache_time'         => '1week',
    'http_cache_time_browser' => '1day',

    'sites' => [
        '[*]' => JPATH_ROOT.'/sites/agrea.ph',
    ],

    //See: https://www.owasp.org/index.php/OWASP_Secure_Headers_Project#xpcdp
    'headers' => [
        'Strict-Transport-Security' => 'max-age=63072000',
        'X-Xss-Protection'          => '1; mode=block',
        'X-Frame-Options'           => 'DENY',
        'Feature-Policy'            => "camera 'none'; microphone 'none'",
        'Referrer-Policy'           => 'strict-origin-when-cross-origin',
        'X-Permitted-Cross-Domain-Policies' => 'none',
        'Content-Security-Policy'   => getenv('SITE') ? 'upgrade-insecure-requests' : '',
        'X-Content-Type-Options'    => 'nosniff',
    ],

);
