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

$home_title = get_field('home_title');
$home_headline = get_field('home_headline');
$home_link_cta = get_field('home_link_cta');
$home_link_url = get_field('home_link_url');
$home_content_width = get_field('home_content_width');

get_header();?>

<div class="home-wrapper">
  <div class="home-content" style="max-width: <?php echo $home_content_width; ?>;">
      <h4 class="js-vp_reveal js-fade_in" style="color: white;"><?php echo $home_title; ?></h4>
      <h1 class="js-vp_reveal js-slide_down" style="color: white; padding: 0;"><?php echo $home_headline; ?></h1>
      <p class="profile__copy js-vp_reveal js-slide_up"><a class="btn btn-m btn-violet" href="<?php echo $home_link_url; ?>" title="Home Call To Action"><?php echo $home_link_cta; ?></a></p>
  </div>
  <div id="webglcontainer"></div>
</div>


<?php include 'webgl.php';?>
<?php include 'nav.php';?>


<?php get_footer(); ?>