<?php
/**
* The Header for our theme.
*
* Displays all of the <head> section and everything up till <div id="content">
*
* @package michelluarasi
*/
global $body_class_extra, $detail_stylesheet, $open_graph_image_url;

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WR7WFGN');</script>
    <!-- End Google Tag Manager -->

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-9229453767791230",
        enable_page_level_ads: true
      });
    </script>

    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content='Michel Luarasi' />
    <meta name="copyright" content="Michel Luarasi" />

    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />

    <?php if( $open_graph_image_url === FALSE ): ?>
        <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/open-graph.jpg" />    <!-- Show Standard OG Image -->
        <?php else: ?>
        <meta property="og:image" content="<?php the_field('detail_open_graph_image'); ?>"/>          <!-- Show Detail OG Image -->
    <?php endif; ?>


    <!--  	APPLE		-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Michel Luarasi" />

    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-precomposed.png" />

    <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/img/splashes/splash-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
    <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/img/splashes/splash-ipad-landscape-retina.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape) and (-webkit-min-device-pixel-ratio: 2)" />
    <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/img/splashes/splash-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
    <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/img/splashes/splash-ipad-portrait-retina.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait) and (-webkit-min-device-pixel-ratio: 2)" />
    <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/img/splashes/splash-iphone-retina.png" media="screen and (max-device-width: 320px) and (max-device-height: 1136px) and (-webkit-min-device-pixel-ratio: 2)" />
    <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/img/splashes/splash-iphone-old.png" media="screen and (max-device-width: 320px) and (max-device-height: 460px)" />
    <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/img/splashes/splash-iphone-old-retina.png" media="screen and (max-device-width: 320px) and (max-device-height: 460px) and (-webkit-min-device-pixel-ratio: 2)" />

    <!--  	OTHER		-->
    <?php wp_head(); ?>

    <?php if(!empty($detail_stylesheet)) :?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom/<?php echo $detail_stylesheet; ?>.css">
    <?php endif;?>

    <script async src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.1.min.js"></script>

    <!-- Hotjar Tracking Code for https://michelluarasi.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1122544,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

</head>

<!-- put project class names for specific template-->

<body <?php body_class($body_class_extra); ?>>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WR7WFGN"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include 'nav.php'; ?>

