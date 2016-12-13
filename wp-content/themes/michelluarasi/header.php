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


        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css"> 
        <?php wp_head(); ?>
        <?php if(!empty($detail_stylesheet)) :?>
        	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/work_detail/<?php echo $detail_stylesheet; ?>.css">
        <?php endif;?>
        <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.1.min.js"></script>
        <script type="text/javascript" src="//use.typekit.net/ebk3utm.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>		
		<!-- Mailchimp Starts -->
		<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
		<style type="text/css">
		    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
		    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
		       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
		</style> 		
		<!-- Mailchimp End -->


    </head>
    <!-- put project class names for specific template-->
    <body <?php body_class($body_class_extra); ?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        <header class="header">
        	<div class="wrapper">
				<div class="logo-container">
					<a href="/" title="Return to homepage" class="site-logo"><span aria-hidden="true" class="ml-otherml-icon-signet site-logo__icon"></span>
					<span class="site-logo__text">Michel Luarasi</span></a>
				</div>

				<div class="menu-toggler-container">
					<a href="#" class="selected-menu-item"><?php echo $menu_item; ?></a>
					<div class="detail-content-nav">
						<a href="<?php echo $prev_page; ?>" class="detail-content-nav__link detail-content-nav__link--prev ml-icon-nav-back"></a>
						<a href="<?php echo $next_page; ?>" class="detail-content-nav__link detail-content-nav__link--next ml-icon-nav-next"></a>
					</div>
					
					<a href="#" class="menu-link ml-icon-nav-menu" ></a>    
				</div>    		
        	</div>
		</header>
		<div class="main-nav-container">
			<div class="nav-wrapper">
				<div class="main-nav-container__header">
				</div>
				<nav class="main-nav" role="navigation">
					<ul class="main-nav__list">
						<li class="main-nav__list-item"><a class="main-nav__list-item__link <?php echo $current_page == "portrait" ? "main-nav__list-item__link--active" : "" ; ?>" href="/portrait">Portrait</a></li>
						<li class="main-nav__list-item"><a class="main-nav__list-item__link <?php echo $current_page == "design" ? "main-nav__list-item__link--active" : "" ; ?>" href="/design">Design</a></li>
						<li class="main-nav__list-item"><a class="main-nav__list-item__link <?php echo $current_page == "photography" ? "main-nav__list-item__link--active" : "" ; ?>" href="/photography">Photography</a></li>
						<li class="main-nav__list-item"><a class="main-nav__list-item__link <?php echo $current_page == "journal" ? "main-nav__list-item__link--active" : "" ; ?>" href="/journal">Journal</a></li>
					</ul>
				</nav>
				<div class="main-nav-container__footer">
					<ul class="social-links">
						<li class="social-links__item"><a target="_blank" class="social-links__item__link ml-icon-social-facebook" href="http://facebook.com/michelluarasi"></a></li>
						<li class="social-links__item"><a target="_blank" class="social-links__item__link ml-icon-social-twitter" href="http://twitter.com/michelluarasi"></a></li>
						<li class="social-links__item"><a target="_blank" class="social-links__item__link ml-icon-social-instagram" href="http://instagram.com/michelluarasi"></a></li>
						<li class="social-links__item"><a target="_blank" class="social-links__item__link ml-icon-social-dribbble" href="http://dribbble.com/michelluarasi"></a></li>
						<li class="social-links__item"><a target="_blank" class="social-links__item__link ml-icon-social-tumblr" href="http://michelluarasi.tumblr.com"></a></li>
					</ul>
				</div>
			</div>

			
		</div>