<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=qA34nWxOzj">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=qA34nWxOzj">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=qA34nWxOzj">
    <link rel="manifest" href="/site.webmanifest?v=qA34nWxOzj">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=qA34nWxOzj" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon.ico?v=qA34nWxOzj">
    <meta name="apple-mobile-web-app-title" content="Diamanti">
    <meta name="application-name" content="Diamanti">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l !== 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PFQGH8Z');
    </script>
    <?php (wp_head()); ?>

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function () {
            window.cookieconsent.initialise({
                layout: 'custom-layout',
                layouts: {
                    'custom-layout': '<div class="cookie-container"><div class="cookie-content"><p id="cookieconsent:desc" ' +
                        'class="cc-message">We use cookies to improve your experience on our website, including personalization of content and communications. You can review our privacy policy <a href="https://diamanti.com/privacy-policy-terms-of-use/">here</a>. <a aria-label="learn more about cookies" role="button" tabindex="0" class="cc-link" href="https://diamanti.com/email-preferences/" rel="noopener noreferrer nofollow" target="_blank"></a></p></div><div class="cc-compliance"><a aria-label="dismiss cookie message" role="button" tabindex="0" class="cc-btn cc-dismiss">Got it!</a></div></div>'
                }
            })
        });
    </script>
</head>
