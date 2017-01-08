<?php
/*
Template Name: Template Moods
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
$current_page = "moods";
$body_class_extra = "moods";
$args = "category_name=moods&orderby=date&order=DESC";
query_posts( $args );
get_header();?>

<div class="journal-wrapper">
  <ul class="journal-list">
  <?php
    while ( have_posts() ) : the_post();
    setup_postdata( $post );
    $thumbnail_image = simple_fields_get_post_value(get_the_id(), "Thumbnail Image", true);
    $thumbnail_image_url = wp_get_attachment_url($thumbnail_image);
    $thumbnail_title = simple_fields_get_post_value(get_the_id(), "Thumbnail Title", true);
    $thumbnail_subtitle = simple_fields_get_post_value(get_the_id(), "Thumbnail Subtitle", true);
  ?>

    <li class="journal-list__item js-scroll_reveal scroll_reveal-slide_in">
      <a class="journal-list__item__link" href="<?php echo get_permalink()?>">
        <img class="journal-list__item__img" src="<?php echo $thumbnail_image_url; ?>" />
        <h3 class="journal-list__item__body__header"><?php echo $thumbnail_title ?></h3>
        <p class="journal-list__item__body__subtitle"><?php echo $thumbnail_subtitle;?></p>
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