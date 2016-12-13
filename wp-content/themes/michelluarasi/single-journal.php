<?php
/**
 * The Template for displaying all single posts.
 *
 * @package michelluarasi
 */


global $body_class_extra, $parent_page,$current_page;
$current_page = "journal";
$body_class_extra = "journal-detail";
$parent_page = "/journal";
$category_id = 3;

include ("detail.php");
?>