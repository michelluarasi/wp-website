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

//Content
$post = get_post();
$content = $post->post_content;

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
        <?php echo $content; ?>
  		</div>
  </div>

</div>

</div>

<!--	<p class="signature ml-otherml-icon-signature"></p> -->

<?php
	get_footer(); 
?>
	