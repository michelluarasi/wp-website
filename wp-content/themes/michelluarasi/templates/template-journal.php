<?php
/*
Template Name: Template Journal
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
global $body_class_extra,$current_page;
$current_page = "journal";
$body_class_extra = "journal";
$args = "category_name=journal&orderby=date&order=DESC";
query_posts( $args );
get_header();?>

<div class="journal-wrapper">
	<ul class="journal-list">
	<?php
		while ( have_posts() ) : the_post();
		setup_postdata( $post );

		$title = simple_fields_get_post_value(get_the_id(), "Title", true);
		$subtitle = simple_fields_get_post_value(get_the_id(), "Subtitle", true);

		$thumbnail_image = simple_fields_get_post_value(get_the_id(), "Teaser Image", true);
		$thumbnail_image_url = wp_get_attachment_url($thumbnail_image);
	?>

		<li class="journal-list__item js-vp_reveal js-slide_up">
			<a class="journal-list__item__link" href="<?php echo get_permalink()?>">
				<img class="journal-list__item__img" src="<?php echo $thumbnail_image_url; ?>" />
				<h2 class="journal-list__item__body__header"><?php echo $title ?></h2>
				<p class="journal-list__item__body__subtitle"><?php echo $subtitle;?></p>
			</a>
		</li>
	<?php 					
		endwhile;
	?>
	</ul>

</div>

<?php
	get_footer(); 
?>