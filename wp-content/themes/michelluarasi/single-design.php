<?php
/**
 * The Template for displaying all single posts.
 *
 * @package michelluarasi
 */


global $body_class_extra, $parent_page, $current_page;
$current_page = "design";
$body_class_extra = "work-detail";
$parent_page = "/design";
$category_id = 2;

include ("detail.php");
?>