<?php
return array(

    'sites' => [
        '[*]' => JPATH_ROOT.'/sites/agrea.ph',
    ],

    //See: https://www.owasp.org/index.php/OWASP_Secure_Headers_Project#xpcdp
    'headers' => [
        'Strict-Transport-Security' => 'max-age=63072000',
        'X-Xss-Protection'          => '1; mode=block',
        'X-Frame-Options'           => 'DENY',
        'Feature-Policy'            => "camera 'none'; microphone 'none'",
        'Referrer-Policy'           => 'strict-origin',
        'X-Permitted-Cross-Domain-Policies' => 'none',
        'Content-Security-Policy'   => 'upgrade-insecure-requests',
        'X-Content-Type-Options'    => 'nosniff',
        'Accept-CH'                 => 'DPR, Viewport-Width, Width',
        'Accept-CH-Lifetime'        => '86400',
    ],
);
