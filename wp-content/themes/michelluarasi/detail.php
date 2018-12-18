<?php

/**
 * The Template for displaying all single posts.
 *
 * @package michelluarasi
 */

// Videos
$header_video = get_field('detail_header_video');
$hasVideo = empty($header_video) ? false : true;

// Content
$post_content = get_the_content();

list($prev_page,$next_page) = get_prev_next_posts($category_id);

// next post parameters
$nextpost_id = url_to_postid( $next_page);
$nextpost_title = get_field('detail_title', $nextpost_id);
$nextpost_image_large = get_field('detail_header_image_large', $nextpost_id);

global $body_class_extra, $next_page, $prev_page, $category_id, $detail_stylesheet, $post_content, $post_title;
$post_title = get_the_title(get_the_id());

$detail_stylesheet = get_field('detail_class_name');
$body_class_extra .= " ".$detail_stylesheet;

$open_graph_image = get_field('open_graph_image');

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
			<div class="cover picturefill-img detail-img" data-images='{"large":"<?php the_field('detail_header_image_large'); ?>", "small":"<?php the_field('detail_header_image_small'); ?>"}'></div>
		</div>
		<div class="detail-header__content detail-header__content">
			<h1 class="detail-header__content__project-name js-vp_reveal js-slide_down"><?php the_field('detail_title');?></h1>	
			<p class="detail-header__content__subtitle js-vp_reveal js-fade_in"><?php the_field('detail_subtitle');?></p>
		</div>
		<div class="detail-header__arrow js-vp_reveal js-slide_up">
        <svg width="32px" height="32px"  viewBox="0 0 32 32">
            <path d="M4.4 9L3 10.4 15.7 23l12.7-12.5L27 9 15.7 20.4" fill="#FFF"/>
        </svg>
    </div>
	</div>
	
	<div class="detail-content">
		<div class="detail-content__body">
			<?php echo $next_value; ?> <?php echo $post_content; ?>
		</div>
	</div>


  <a href="<?php echo $next_page;?>" class="detail-next-content-link js-vp_reveal js-fade_in">
    <div class="detail-next-content-parent">
        <div class="detail-next-content-child">
            <h4 class="detail-next-content__subtitle">View Next</h4>
            <h2 class="detail-next-content__title"><?php echo $nextpost_title; ?></h2>
            <div class="detail-next-content-overlay"></div>
        </div>
    </div>
    <div class="detail-next-content__background" style="background-image: url('<?php echo $nextpost_image_large; ?>')">
    </div>
  </a>

	<?php
	  get_footer(); 
	?>
  
</div>

