<?php
/**
 * The Template for displaying all single posts.
 *
 * @package michelluarasi
 */

//Titles
$title = simple_fields_get_post_value(get_the_id(), "Title", true);
$subtitle = simple_fields_get_post_value(get_the_id(), "Subtitle", true);
$description = simple_fields_get_post_value(get_the_id(), "Description", true);


// Images
$header_img_large = simple_fields_get_post_value(get_the_id(), "Header Image Large", true);
$header_img_large_url = wp_get_attachment_url($header_img_large);
$header_img_small = simple_fields_get_post_value(get_the_id(), "Header Image Small", true);
$header_img_small_url = wp_get_attachment_url($header_img_small);


// Videos
$header_video = simple_fields_get_post_value(get_the_id(), "Header Video", true);
$hasVideo = empty($header_video) ? false : true;


//Content
$post_content = get_the_content();


list($prev_page,$next_page) = get_prev_next_posts($category_id);

// next post parameters
$nextpost_id = url_to_postid( $next_page );
$nextpost_title = simple_fields_get_post_value($nextpost_id, "Title", true);
$nextpost_image_large = simple_fields_get_post_value($nextpost_id, "Header Image Large", true);
$nextpost_image_large_url = wp_get_attachment_url($nextpost_image_large);

global $body_class_extra, $next_page, $prev_page, $category_id, $detail_stylesheet, $post_content, $open_graph_image_url, $post_title;
$post_title = get_the_title(get_the_id());

$detail_stylesheet = simple_fields_get_post_value(get_the_id(), "Custom CSS", true);
$body_class_extra .= " ".$detail_stylesheet;


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
			<div class="cover picturefill-img detail-img" data-images='{"large":"<?php echo $header_img_large_url; ?>", "small":"<?php echo $header_img_small_url; ?>"}'></div>
		</div>
		<div class="detail-header__content detail-header__content">
			<h1 class="detail-header__content__project-name js-vp_reveal js-slide_down"><?php echo $title; ?></h1>	
			<p class="detail-header__content__subtitle js-vp_reveal js-fade_in"><?php echo $subtitle;?></p>
		</div>
		<div class="detail-header__arrow js-vp_reveal js-fade_in">
        <svg width="32px" height="32px"  viewBox="0 0 32 32">
            <path d="M4.4 9L3 10.4 15.7 23l12.7-12.5L27 9 15.7 20.4" fill="#FFF"/>
        </svg>
    </div>
	</div>
	
	<div class="detail-content">
		<div class="detail-content__body">
			<?php echo $post_content; ?>
		</div>
	</div>
  <a href="<?php echo $next_page;?>" class="detail-next-content-link js-vp_reveal js-fade_in">
    <div class="detail-next-content-parent" style="background-image: url('<?php echo $nextpost_image_large_url; ?>')">
        <div class="detail-next-content-child">
            <h4 class="detail-next-content__subtitle">View Next</h4>
            <h2 class="detail-next-content__title"><?php echo $nextpost_title; ?></h2>    
        </div>
    </div>
  </a>

	<?php
	  get_footer(); 
	?>
  
</div>



