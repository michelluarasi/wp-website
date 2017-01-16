<?php
/*
Template Name: Template Credits
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
$current_page = "credits";
$body_class_extra = "credits";

get_header();?>

<div class="credits-wrapper js-vp_reveal js-fade_in">
		<div class="heart-container">
				<div class="heart-animation js-vp_reveal js-slide_up">
				  <div class="credits-heart heart-left heart-side heart-top"></div>
				  <div class="credits-heart heart-center"></div>
				  <div class="credits-heart heart-right heart-side"></div>
				</div>
		</div>

		<div class="content-640 js-vp_reveal js-slide_up" style="text-align: center;">
        <h1 style="color: white;">Thank You!</h1>
        <p style="color: #FFD5D5;"><strong style="color: white;">Gunisigi Balaban</strong></br>Thanks for building the initial website back in 2013 and helping me with several PHP/Wordpress related issues for Release 2.</p>

        <p style="color: #FFD5D5;"><strong style="color: white;">Dario Merz</strong></br>Thanks for supporting me on various CSS / HTML / JS related issues for Relase 2.</p>

        <p style="color: #FFD5D5;"><strong style="color: white;">Tunay Bora</strong></br>Thanks for experimenting around with the WebGL-Animation.</p>

        <p style="color: #FFD5D5;"><strong style="color: white;">Agencies</strong></br>Thanks to Hinderling Volkart and Station for allowing me to showcase their projects.</p>
		</div>
</div>



</div>

</div>

<!--	<p class="signature ml-otherml-icon-signature"></p> -->

<?php
	// include (get_template_directory()."/get_in_touch.php"); 
	get_footer(); 
?>
	