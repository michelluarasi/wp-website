<?php
/*
Template Name: Template Reverie
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
$current_page = "reverie";
$body_class_extra = "reverie";

get_header();?>

<iframe style="width: 100%; height: 100%; border: none; overflow: hidden;" src="https://michelluarasi.tumblr.com/"></iframe>

<?php
  // include (get_template_directory()."/get_in_touch.php"); 
  get_footer(); 
?>