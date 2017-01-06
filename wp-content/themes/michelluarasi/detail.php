<?php
/**
 * The Template for displaying all single posts.
 *
 * @package michelluarasi
 */

$header_video = simple_fields_get_post_value(get_the_id(), "Header Video", true);
$hasVideo = empty($header_video) ? false : true;

// Home Values
$header_big_pic = simple_fields_get_post_value(get_the_id(), "Header Big Image", true);
$header_big_pic_url = wp_get_attachment_url($header_big_pic);

$header_medium_pic = simple_fields_get_post_value(get_the_id(), "Header Medium Image", true);
$header_medium_pic_url = wp_get_attachment_url($header_medium_pic);

$header_small_pic = simple_fields_get_post_value(get_the_id(), "Header Small Image", true);
$header_small_pic_url = wp_get_attachment_url($header_small_pic);

$header_title = simple_fields_get_post_value(get_the_id(), "Header Title", true);
$header_subtitle = simple_fields_get_post_value(get_the_id(), "Header Subtitle", true);
$description = simple_fields_get_post_value(get_the_id(), "Description", true);
$sections = get_the_content();
$footer = simple_fields_get_post_value(get_the_id(), "Footer", true);

list($prev_page,$next_page) = get_prev_next_posts($category_id);

// next post parameters
$nextpost_id = url_to_postid( $next_page );
$nextpost_title = simple_fields_get_post_value($nextpost_id, "Header Title", true);
$nextpost_big_pic = simple_fields_get_post_value($nextpost_id, "Header Big Image", true);
$nextpost_big_pic_url = wp_get_attachment_url($nextpost_big_pic);

global $body_class_extra, $next_page, $prev_page, $category_id, $detail_stylesheet, $post_description, $open_graph_image_url, $post_title;
$post_title = get_the_title(get_the_id());
$detail_stylesheet = simple_fields_get_post_value(get_the_id(), "Class Name", true);
$body_class_extra .= " ".$detail_stylesheet;
$post_description = get_the_content();
$open_graph_image = simple_fields_get_post_value(get_the_id(), "Open Graph Image", true);
$open_graph_image_url = wp_get_attachment_url($open_graph_image);



get_header();
?>

<div class="detail-wrapper detail-wrapper main-content">

	<div class="detail-header detail-header--img">
		<?php if( $hasVideo ): ?>
			<div class="video-container">
				<video id="vid" preload="auto" autoplay="true" loop="true">
				  <source id="mp4" src="<?php echo $header_video; ?>" type="video/mp4">
				</video>
			</div>			
		<?php endif; ?>
		<div class="img-container <?php echo ($hasVideo ? 'img-fallback' : 'picturefill'); ?> ">
			<div class="cover picturefill-img detail-img" data-images='{"large":"<?php echo $header_big_pic_url; ?>", "medium":"<?php echo $header_medium_pic_url; ?>", "small":"<?php echo $header_small_pic_url; ?>"}'></div>
		</div>
		<div class="detail-header__content detail-header__content">
			<h1 class="detail-header__content__project-name"><?php echo $header_title; ?></h1>			
			<p class="detail-header__content__subtitle"><?php echo $header_subtitle;?></p>
		</div>
		<div class="detail-header__arrow ml-icon-nav-down"></div>
	</div>
	
	<div class="detail-content">
		<div class="detail-content__body">
			<?php echo $sections; ?>
		</div>
	</div>
  <a href="<?php echo $next_page;?>" class="detail-next-content-link js-scroll_reveal scroll_reveal-fade_in">
    <div class="detail-next-content-parent" style="background-image: url('<?php echo $nextpost_big_pic_url; ?>')">
        <div class="detail-next-content-child">
            <h4 class="detail-next-content__subtitle">Next</h4>    
            <h2 class="detail-next-content__title"><?php echo $nextpost_title; ?></h2>    
        </div>
    </div>
  </a>


	<?php
	  get_footer(); 
	?>
  
</div>


