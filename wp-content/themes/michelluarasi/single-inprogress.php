<?php
/**
 * The Template for displaying all single posts.
 *
 * @package michelluarasi
 */


global $body_class_extra, $parent_page, $current_page;
$current_page = "inprogress";
$body_class_extra = "inprogress-detail";
$parent_page = "/inprogress";
$category_id = 5;

include ("detail.php");
?>