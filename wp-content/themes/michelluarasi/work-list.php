<?php
/*
Template Name: Template Work
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
global $body_class_extra, $category_name;
$body_class_extra = "work";
$args = "category_name=".$category_name."&orderby=date&order=DESC";
query_posts( $args );

get_header();?>

<div class="work-wrapper">
	<ul class="work-filter-menu">
	</ul>
	<ul class="work-list">
	<?php
		while ( have_posts() ) : the_post();
		setup_postdata( $post );
		$thumbnail_image = simple_fields_get_post_value(get_the_id(), "Thumbnail Image", true);
		$thumbnail_image_url = wp_get_attachment_url($thumbnail_image);
		$thumbnail_title = simple_fields_get_post_value(get_the_id(), "Thumbnail Title", true);
		$thumbnail_subtitle = simple_fields_get_post_value(get_the_id(), "Thumbnail Subtitle", true);
	?>

		<li class="work-list__item">
			<a class="work-list__item__link" href="<?php echo get_permalink()?>">
				<img class="work-list__item__img" src="<?php echo $thumbnail_image_url; ?>" />
				<h3 class="work-list__item__info__header"><?php echo $thumbnail_title; ?></h3>
				<p class="work-list__item__info__subtitle"><?php echo $thumbnail_subtitle; ?></p>
			</a>
		</li>

	<?php 					
		endwhile;
	?>
	</ul>

<!--   	<div class="one-column" style="text-align: center;">
		<h4>More To Come</h3>
		<p>I currently work for an airline, a media company and a swiss bank. So go ahead and <a href="http://eepurl.com/V2Bhf" title="Get My Newsletter" target="_blank">Get Updates</a>!</p>
	</div>
 -->
 
	<p class="signature ml-otherml-icon-signature"></p>

</div>
<?php
	include (get_template_directory()."/get_in_touch.php"); 
	get_footer(); 
?>
	