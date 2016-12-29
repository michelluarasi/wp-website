<?php
/*
Template Name: Template Portrait
*/
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package michelluarasi
 */
global $body_class_extra, $current_page;
$current_page = "portrait";
$body_class_extra = "portrait";

$portrait_big_img = simple_fields_get_post_value(get_the_id(), "Portrait Big Image", true);
$portrait_big_img_url = wp_get_attachment_url($portrait_big_img);

$portrait_medium_img = simple_fields_get_post_value(get_the_id(), "Portrait Medium Image", true);
$portrait_medium_img_url = wp_get_attachment_url($portrait_medium_img);

$portrait_small_img = simple_fields_get_post_value(get_the_id(), "Portrait Small Image", true);
$portrait_small_img_url = wp_get_attachment_url($portrait_small_img);

$portrait_headline = simple_fields_get_post_value(get_the_id(), "Portrait Headline", true); 
$portrait_intro_text = simple_fields_get_post_value(get_the_id(), "Portrait Intro Text", true);

$portrait_body = simple_fields_get_post_value(get_the_id(), "Portrait Body", true);

get_header();?>

<div class="portrait-wrapper">
	<div class="portrait-img-container">
		<div class="portrait-img" style='background-image:url("<?php echo $portrait_big_img_url; ?>")'></div>			
	</div>
	<h1 class="portrait__header"><?php echo $portrait_headline; ?></h1>

	<div class="portrait__intro-text">
		<?php echo $portrait_intro_text; ?>
	</div>



	<div class="portrait__body">
		<?php echo $portrait_body; ?>
<!--
		<div class="portrait__body__btn-container">
			<a class="portrait__body__btn btn">Download Résumé</a>	
		</div>
-->
	</div>



	<div class="clients-wrapper">
		<div class="one-column" style="text-align: center;">
		<h3>Selected Clients</h3>
		<p>Brands I've workded for in the past few years.</p>
		</div>

		<ul class="clients-list">
			<li class="clients-list__item"><img class="bmw clients-list__item__img" src="<?php bloginfo('template_url'); ?>/img/clients/ml-icon-client-bmw.svg" alt="BMW Logo"></li>
			<li class="clients-list__item"><img class="bucherer clients-list__item__img" src="<?php bloginfo('template_url'); ?>/img/clients/ml-icon-client-bucherer.svg" alt="Bucherer 1888 Logo"></li>
			<li class="clients-list__item"><img class="frey clients-list__item__img" src="<?php bloginfo('template_url'); ?>/img/clients/ml-icon-client-frey.svg" alt="Chocolat Frey Logo"></li>
			<li class="clients-list__item"><img class="desperados clients-list__item__img" src="<?php bloginfo('template_url'); ?>/img/clients/ml-icon-client-desperados.svg" alt="Desperados Logo"></li>
			<li class="clients-list__item"><img class="emmi clients-list__item__img" src="<?php bloginfo('template_url'); ?>/img/clients/ml-icon-client-emmi.svg" alt="Emmi Logo"></li>
			<li class="clients-list__item"><img class="heineken clients-list__item__img" src="<?php bloginfo('template_url'); ?>/img/clients/ml-icon-client-heineken.svg" alt="Heineken Logo"></li>
			<li class="clients-list__item"><img class="ikea clients-list__item__img" src="<?php bloginfo('template_url'); ?>/img/clients/ml-icon-client-ikea.svg" alt="IKEA Logo"></li>
			<li class="clients-list__item"><img class="migros clients-list__item__img" src="<?php bloginfo('template_url'); ?>/img/clients/ml-icon-client-migros.svg" alt="Migros Logo"></li>
			<li class="clients-list__item"><img class="navyboot clients-list__item__img" src="<?php bloginfo('template_url'); ?>/img/clients/ml-icon-client-navyboot.svg" alt="Navyboot Logo"></li>
			<li class="clients-list__item"><img class="redbull clients-list__item__img" src="<?php bloginfo('template_url'); ?>/img/clients/ml-icon-client-redbull.svg" alt="Redbull Logo"></li>
			<li class="clients-list__item"><img class="sbb clients-list__item__img" src="<?php bloginfo('template_url'); ?>/img/clients/ml-icon-client-sbb.svg" alt="SBB"></li>
			<li class="clients-list__item"><img class="swisscanto clients-list__item__img" src="<?php bloginfo('template_url'); ?>/img/clients/ml-icon-client-swisscanto.svg" alt="Swiss Canto"></li>
		</ul>
	</div>
	<p class="signature ml-otherml-icon-signature"></p>
</div>

<?php
	include (get_template_directory()."/get_in_touch.php"); 
	get_footer(); 
?>
	