<?php
/*
Template Name: Template Blank
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

//Content
$post = get_post();
$content = $post->post_content;

global $body_class_extra, $page_content, $current_page;
$current_page = "menu";
$body_class_extra = "blank";

get_header();?>

  <div class="detail-content">
    <div class="detail-content__body">
        <?php echo $content; ?>
    </div>
  </div>

<?php
  // include (get_template_directory()."/get_in_touch.php"); 
  get_footer(); 
?>