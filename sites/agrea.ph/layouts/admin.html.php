<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()"  xmlns:og="http://opengraphprotocol.org/schema/" class="no-js h-full" lang="<?= language() ?>" dir="<?= direction() ?>" vocab="http://schema.org/">
<head>
    <meta charset="utf-8"/>
    <base href="<?= url(); ?>" />

    <ktml:title>
    <ktml:meta>
    <ktml:link>
    <ktml:style>
    <ktml:script>

    <title><?= title() ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="mobile-web-app-capable  " content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="apple-mobile-web-app-title" content="<?= config()->site->name ?>"/>
    <meta name="application-name" content="<?= config()->site->name ?>"/>
    <meta name="theme-color" content="<?= config()->site->main_color ?>"/>
    <meta name="msapplication-config" content="theme://images/icons/browserconfig.xml"/>
    <meta name="msapplication-TileColor" content="<?= config()->site->main_color ?>" />
    <meta name="msapplication-TileImage" content="theme://images/icons/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="theme://images/icons/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="theme://images/icons/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="theme://images/icons/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="theme://images/icons/mstile-310x310.png" />

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="theme://images/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="theme://images/icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="theme://images/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="theme://images/icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="theme://images/icons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="theme://images/icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="theme://images/icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="theme://images/icons/apple-touch-icon-152x152.png" />

    <link rel="icon" type="image/png" href="theme://images/icons/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="theme://images/icons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="theme://images/icons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="theme://images/icons/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="theme://images/icons/favicon-128.png" sizes="128x128" />
    <link rel="icon" type="image/png" href="theme://images/android-chrome-192x192.png" sizes="192x192">

    <link rel="stylesheet" href="theme://css/fonts.css" media="print" onload="this.media='all'; this.onload=null;" />
    <link rel="preconnect" href="https://unpkg.com/"  />

    <ktml:style src="theme://css/output.min.css" rel="preload" as="style"/>
    
    <ktml:script src="theme://js/alpinejs-v2.7.0.min.js" defer="defer" />
    <script src="theme://js/init-alpine.js"></script>

    <ktml:style src="theme://css/chart.min.css" rel="preload" as="style"/>
    <script src="theme://js/chart.min.js" defer></script>
    <script src="theme://js/charts-lines.js" defer></script>
    <script src="theme://js/charts-pie.js" defer></script>
</head>
    <body>
        <ktml:content>
    </body>
</html>