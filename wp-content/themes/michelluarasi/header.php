<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package michelluarasi
 */
global $body_class_extra, $detail_stylesheet, $current_page;

$menu_item = ($current_page == "inprogress" || $current_page == "home") ? "menu" : $current_page;

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  		<title><?php wp_title( '|', true, 'right' ); ?></title>

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

  		<!--  	NORMALISE.CSS	-->

      <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">  -->

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


<header class="header js-vp_reveal js-slide_down">

    <!-- START NAVIGATION -->

    <div class="wrapper">

				<div class="logo-container">
						<a href="/" title="Go to Homepage" class="site-logo">
								<svg class="site-logo__signet" width="32px" height="32" viewBox="0 0 256 256">
  								<path d="M128 183.7l-64-38.4V90.6l64 38.4 64-38.4v39.5l32 19.2V34.1l-96 57.6-96-57.6v129.3l96 57.6 76.7-46-31.1-18.7"/>
								</svg>
								<span class="site-logo__text">Michel Luarasi</span> 
						</a>
				</div>

				<div class="menu-container">

						<a href="#" class="selected-menu-item"><?php echo $menu_item; ?></a>
						<div class="menu-toggle">

							  <a href="#" class="menu-link">
							    <span class="menu-icon">
							      <span class="menu-line menu-line-1"></span>
							      <span class="menu-line menu-line-2"></span>
							    </span>
							  </a>

					  		<span class="menu-circle"></span>
						</div>
				</div>  
    </div>

		    <!-- END NAVIGATION -->


		    <!-- START MENU CONTENT -->

						<div class="menu-overlay">

								<nav class="main-nav" role="navigation">
										<a class="main-nav__list-item__link <?php echo $current_page == "work" ? "main-nav__list-item__link--active" : "" ; ?>" href="/work">Work</a>
										<a class="main-nav__list-item__link <?php echo $current_page == "portrait" ? "main-nav__list-item__link--active" : "" ; ?>" href="/portrait">Portrait</a>
										<a class="main-nav__list-item__link <?php echo $current_page == "journal" ? "main-nav__list-item__link--active" : "" ; ?>" href="/reverie">R&ecirc;verie</a>
                    <a class="main-nav__list-item__link <?php echo $current_page == "contact" ? "main-nav__list-item__link--active" : "" ; ?>" href="/journal">Journal</a>

								</nav>

								<div class="main-nav-container__footer">
										<p>
											<a class="hidden menu-meta-link" href="/contact">Contact
                        <svg width="8px" height="8px" viewBox="0 0 8 8">
                            <path fill="#5259D4" d="M2 0l4 3.5L2 7"/>
                        </svg>
											</a>

											<a class="hidden menu-meta-link" href="/credits">Credits
                        <svg width="8px" height="8px" viewBox="0 0 8 8">
                            <path fill="#5259D4" d="M2 0l4 3.5L2 7"/>
                        </svg>
											</a>

											<a class="hidden menu-meta-link" href="/legal">Legal
                        <svg width="8px" height="8px" viewBox="0 0 8 8">
                            <path fill="#5259D4" d="M2 0l4 3.5L2 7"/>
                        </svg>
											</a> 
										</p>
								</div>

						</div>

		    <!-- END MENU CONTENT -->

</header>








