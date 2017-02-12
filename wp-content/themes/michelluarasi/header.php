<?php
/**
* The Header for our theme.
*
* Displays all of the <head> section and everything up till <div id="content">
*
* @package michelluarasi
*/
global $body_class_extra, $detail_stylesheet;

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content='Michel Luarasi' />
    <meta name="copyright" content="Michel Luarasi" />

    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />

    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/open-graph.jpg" />

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

</head>

<!-- put project class names for specific template-->

<body <?php body_class($body_class_extra); ?>>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <?php include 'nav.php'; ?>




