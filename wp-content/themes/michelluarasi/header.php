<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package michelluarasi
 */
global $body_class_extra, $detail_stylesheet, $parent_page, $next_page, $prev_page, $current_page , $post_description, $open_graph_image_url, $post_title;

if(empty($post_description)){
	$post_description = "Designer &#38; Art Director from Zurich, Switzerland";
}

if(empty($open_graph_image_url)){
	$open_graph_image_url = get_bloginfo('template_url')."/img/open-graph-default.jpg";
}

$page_title = "";

if($current_page == "home"){
	$page_title = ucfirst($current_page);
}else if($current_page == "portrait" || $current_page == "journal" || $current_page == "design" || $current_page == "photography" || $current_page == "inprogress"){
	if(empty($next_page)){
		$page_title =  ucfirst($current_page);
	}else{
		$page_title = $post_title;
	}
}

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

		<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/icons/favicon.ico">
		<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('template_url'); ?>/img/icons/favicon.ico">

		<!--  	GOOGLE		-->
		<link href="https://plus.google.com/+MichelLuarasi/" rel="author"/>

		<!--  	APPLE		-->
	    <meta name="apple-mobile-web-app-capable" content="yes" />
	    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
	    <meta name="apple-mobile-web-app-title" content="Michel Luarasi" />

	    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon-57-precomposed.png" />
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon-72-precomposed.png" />
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon-114-precomposed.png" />
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon-144-precomposed.png" />

	    <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/img/splashes/splash-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	    <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/img/splashes/splash-ipad-landscape-retina.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape) and (-webkit-min-device-pixel-ratio: 2)" />
	    <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/img/splashes/splash-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	    <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/img/splashes/splash-ipad-portrait-retina.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait) and (-webkit-min-device-pixel-ratio: 2)" />
	    <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/img/splashes/splash-iphone-retina.png" media="screen and (max-device-width: 320px) and (max-device-height: 1136px) and (-webkit-min-device-pixel-ratio: 2)" />
	    <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/img/splashes/splash-iphone-old.png" media="screen and (max-device-width: 320px) and (max-device-height: 460px)" />
	    <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/img/splashes/splash-iphone-old-retina.png" media="screen and (max-device-width: 320px) and (max-device-height: 460px) and (-webkit-min-device-pixel-ratio: 2)" />

		<!--  	NORMALISE.CSS	-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> 

		<!--  	OTHER		-->

        <?php wp_head(); ?>
        <?php if(!empty($detail_stylesheet)) :?>
        	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/work_detail/<?php echo $detail_stylesheet; ?>.css">
        <?php endif;?>
        <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.1.min.js"></script>

    </head>

    <!-- put project class names for specific template-->
    <body <?php body_class($body_class_extra); ?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->






<header class="header">

    <!-- START NAVIGATION -->

    <div class="wrapper">

				<div class="logo-container">
						<a href="/" title="Go to Homepage" class="site-logo">
								<svg class="site-logo__signet" width="32px" height="32" viewBox="0 0 256 256" version="1.1">
								      <g>
								          <polygon id="Shape" points="128 183.7 64 145.3 64 90.6 128 129 192 90.6 192 130.1 224 149.3 224 34.1 128 91.7 32 34.1 32 163.4 128 221 204.7 175 173.6 156.3">
								          </polygon>
								      </g>
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
										<a class="main-nav__list-item__link <?php echo $current_page == "portrait" ? "main-nav__list-item__link--active" : "" ; ?>" href="/portrait">About</a>
										<a class="main-nav__list-item__link <?php echo $current_page == "work" ? "main-nav__list-item__link--active" : "" ; ?>" href="/work">Work</a>
										<a class="main-nav__list-item__link <?php echo $current_page == "expertise" ? "main-nav__list-item__link--active" : "" ; ?>" href="/expertise">Expertise</a>
										<a class="main-nav__list-item__link <?php echo $current_page == "journal" ? "main-nav__list-item__link--active" : "" ; ?>" href="/journal">Journal</a>
								</nav>

								<div class="main-nav-container__footer">
										<p>
											<a class="hidden main-nav-container__footer__item" target="_blank" href="http://instagram.com/michelluarasi">Instagram
												<svg width="8px" height="8px" viewBox="0 0 8 8" version="1.1">
												    <g id="ml-external-link" fill="#5259D4">
												      <polygon id="Triangle" points="2 0 8 0 8 6"></polygon>
												      <rect id="Rectangle" transform="translate(2.831981, 5.181981) rotate(-45.000000) translate(-2.831981, -5.181981) " x="-1.16801948" y="4.68198052" width="8" height="1"></rect>
												    </g>
												</svg>
											</a>

											<a class="hidden main-nav-container__footer__item" target="_blank" href="https://www.snapchat.com/add/michelluarasi">Snapchat
												<svg width="8px" height="8px" viewBox="0 0 8 8" version="1.1">
												    <g id="ml-external-link" fill="#5259D4">
												      <polygon id="Triangle" points="2 0 8 0 8 6"></polygon>
												      <rect id="Rectangle" transform="translate(2.831981, 5.181981) rotate(-45.000000) translate(-2.831981, -5.181981) " x="-1.16801948" y="4.68198052" width="8" height="1"></rect>
												    </g>
												</svg>
											</a>

											<a class="hidden main-nav-container__footer__item" target="_blank" href="https://ch.linkedin.com/in/michelluarasi">LinkedIn
												<svg width="8px" height="8px" viewBox="0 0 8 8" version="1.1">
												    <g id="ml-external-link" fill="#5259D4">
												      <polygon id="Triangle" points="2 0 8 0 8 6"></polygon>
												      <rect id="Rectangle" transform="translate(2.831981, 5.181981) rotate(-45.000000) translate(-2.831981, -5.181981) " x="-1.16801948" y="4.68198052" width="8" height="1"></rect>
												    </g>
												</svg>
											</a>

										</p>
								</div>

						</div>

		    <!-- END MENU CONTENT -->

</header>








