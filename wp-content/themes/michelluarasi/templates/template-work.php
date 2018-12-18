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
global $body_class_extra, $current_page;
$current_page = "work";
$body_class_extra = "work";
$args = "category_name=work&orderby=date&order=DESC";
query_posts( $args );
get_header();?>

<div class="work-wrapper">
  <ul class="work-list">
  <?php
    while ( have_posts() ) : the_post();
    setup_postdata( $post );
  ?>

    <li class="work-list__item js-vp_reveal js-slide_up">
      <a class="work-list__item__link" href="<?php echo get_permalink()?>">
        <img class="work-list__item__img" alt="<?php the_field('detail_title');?> Teaser Image" src="<?php the_field('detail_teaser_image'); ?>" />
        <h2 class="work-list__item__info__header"><?php the_field('detail_title');?></h2>
        <p class="work-list__item__info__subtitle"><?php the_field('detail_subtitle');?></p>
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