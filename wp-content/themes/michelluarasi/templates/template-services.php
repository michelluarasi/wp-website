<?php
/*
Template Name: Template Services
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
$current_page = "services";
$body_class_extra = "services";


get_header();?>



<?php
	include (get_template_directory()."/get_in_touch.php"); 
	get_footer(); 
?>