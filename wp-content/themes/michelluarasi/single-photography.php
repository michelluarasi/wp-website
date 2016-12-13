<?php
/**
 * The Template for displaying all single posts.
 *
 * @package michelluarasi
 */


global $body_class_extra, $parent_page, $current_page;
$current_page = "photography";
$body_class_extra = "work-detail";
$parent_page = "/photography";
$category_id = 4;

include ("detail.php");
?>