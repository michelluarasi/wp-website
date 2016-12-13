<?php
/*
Template Name: Template Design
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
global $category_name, $current_page;
$current_page = "design";
$category_name = "design";
include (get_template_directory()."/work-list.php");
?>