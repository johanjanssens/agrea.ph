<!DOCTYPE html>
<html xmlns:og="http://opengraphprotocol.org/schema/" class="no-js h-full" lang="<?= language() ?>" dir="<?= direction() ?>" vocab="http://schema.org/">
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

    <link href="https://unpkg.com/" rel="preconnect" />

    <link href="<?= route('news.rss') ?>" rel="alternate" type="application/rss+xml" title="Agrea News Sprouts"  />

    <ktml:style src="theme://css/output.min.css" rel="preload" as="style"/>
    <ktml:style src="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="preload" as="style" />
    <ktml:script src="https://unpkg.com/alpinejs@2.6.0/dist/alpine.js" defer="defer" />

    <script>
    document.addEventListener("DOMContentLoaded", () => {
      if ("connection" in navigator) {
          if (navigator.connection.saveData === true) {
              document.documentElement.classList.add('save-data');
          }
      }
    })
    </script>

    <script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "Organization",
      "name" : "Agrea",
      "url" : "https://www.agrea.ph",
      "sameAs" : [
        "https://www.facebook.com/agreaph",
        "https://www.instagram.com/agreaphl/",
        "https://www.twitter.com/agreaphl"
      ]
    }
    </script>

    <? if (config()->ga_code): ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= config()->ga_code ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?= config()->ga_code ?>');
    </script>
    <? endif; ?>
</head>

<body class="<?= config()->site->body_class ?>">

<ktml:content>

</body>
</html>
