<?php
/**
 * The Template for displaying all single posts.
 *
 * @package michelluarasi
 */


global $body_class_extra, $parent_page, $current_page;
$current_page = "work";
$body_class_extra = "work-detail";
$parent_page = "/work";
$category_id = 2;

include ("detail.php");
?>