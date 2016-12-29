<?php
/*
Template Name: Template Home
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
global $current_page;
$current_page ="home";

get_header();

// Home Values
$field_group_values = simple_fields_fieldgroup("home_attributes");
$counter = 0;
?>
<div id="home-slider">
<?php foreach ($field_group_values as &$slide) { 
	$slide_text = $slide["slide_text"];
	$additional_class_name = $slide["slide_class_name"];
	$slide_video = $slide["slide_video"];
	$slide_image_url = wp_get_attachment_url($slide["slide_picture"]);
	$slide_mobile_image_url = wp_get_attachment_url($slide["slide_mobile_picture"]);
	$slide_svg = $slide["slide_svg"];
	$slide_tooltip_title = $slide["slide_tooltip_title"];
	$counter++;
	$hasVideo = empty($slide_video) ? false : true;
	$hasSVG = empty($slide_svg) ? false : true;
	if($hasVideo){
		$additional_class_name .= " homeslide--video";
	}elseif($hasSVG){
		$additional_class_name .= " homeslide--canvas";
	}else{
		$additional_class_name .= " homeslide--image";
	}
?>
	<article class="homeslide <?php echo $additional_class_name; ?>" id="homeslide-<?php echo $counter; ?>" data-tooltip-title="<?php echo $slide_tooltip_title; ?>">
		<div class="homeslide__text">
			<div class="homeslide__text__inner">
				<?php echo $slide_text; ?>
			</div>
		</div>
		<?php if($hasVideo){ ?>
			<video class="homeslide__video" autoplay loop muted>
			  <source id="mp4" src="<?php echo $slide_video; ?>.mp4" type="video/mp4">
			</video>
		<?php }elseif($hasSVG){ ?>
			<div class="homeslide__canvas">
			</div>
		<?php }?>
		<div class="cover homeslide__bg picturefill-img" data-images='{"large":"<?php echo $slide_image_url; ?>", "medium":"<?php echo $slide_image_url; ?>", "small":"<?php echo $slide_mobile_image_url; ?>"}'></div>
	</article>
<?php } ?>
</div>


<?php get_footer(); ?>