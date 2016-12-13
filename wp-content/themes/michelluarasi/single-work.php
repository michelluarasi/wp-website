<?php
/**
 * The Template for displaying all single posts.
 *
 * @package michelluarasi
 */

// Home Values
$header_video = simple_fields_get_post_value(get_the_id(), "Header Video", true);
$header_big_pic = simple_fields_get_post_value(get_the_id(), "Header Big Image", true);
$header_big_pic_url = wp_get_attachment_url($header_big_pic);

$hasVideo = empty($header_video) ? false : true;

$header_medium_pic = simple_fields_get_post_value(get_the_id(), "Header Medium Image", true);
$header_medium_pic_url = wp_get_attachment_url($header_medium_pic);

$header_small_pic = simple_fields_get_post_value(get_the_id(), "Header Small Image", true);
$header_small_pic_url = wp_get_attachment_url($header_small_pic);


$customer = simple_fields_get_post_value(get_the_id(), "Customer", true);

$header_title = simple_fields_get_post_value(get_the_id(), "Header Title", true);
$year = simple_fields_get_post_value(get_the_id(), "Year", true);
$description = simple_fields_get_post_value(get_the_id(), "Description", true);
$sections = simple_fields_get_post_value(get_the_id(), "Sections", true);


$class_name = simple_fields_get_post_value(get_the_id(), "Class Name", true);

global $body_class_extra, $detail_stylesheet;
$body_class_extra = "work-detail ".$class_name;
$detail_stylesheet = $class_name;
$parent_page = "/work";
list($prev_page,$next_page) = get_prev_next_posts(2);
get_header();
?>

<div class="detail-wrapper main-content">
	<div class="detail-header detail-header--video detail-header--work">
		<?php if( $hasVideo ): ?>
			<div class="video-container">
				<video id="vid" preload="auto" autoplay="true" loop="true">
			  		<source id="mp4" src="<?php bloginfo('template_url'); ?>/videos/<?php echo $header_video; ?>.mp4" type="video/mp4">
		  			<source id="webm" src="<?php bloginfo('template_url'); ?>/videos/<?php echo $header_video; ?>.webm">
		  			<source id="ogv" src="<?php bloginfo('template_url'); ?>/videos/<?php echo $header_video; ?>.ogv" type="video/ogg">
				</video>
			</div>
		<?php endif; ?>
		
		<div class="img-container  <?php echo ($hasVideo ? 'img-fallback' : 'picturefill'); ?> ">
			<!--<img class="detail-img" src="/img/work-detail-main-img.jpg" /> -->
			<span class="detail-img" data-picture data-alt="Products">
		        <span class="" data-src="<?php echo $header_big_pic_url; ?>"></span>
		        <span class="" data-src="<?php echo $header_medium_pic_url; ?>"      data-media="(max-width: 960px)"></span>
		        <span class="" data-src="<?php echo $header_small_pic_url; ?>"      data-media="(max-width: 640px)"></span>
		        <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
		        <noscript>
		            <img src="<?php echo $header_big_pic_url; ?>" alt="">
		        </noscript>
		    </span>				
		</div>
	</div>
	<div class="detail-content detail-content--work" >
		<div class="detail-content__header">
			<h3 class="detail-content__header__client"><?php echo $customer; ?></h3>
			<h1 class="detail-content__header__project-name"><?php echo $header_title; ?></h1>
			<p class="detail-content__header__year"><?php echo $year; ?></p>
			<div class="detail-content__header__desc"><?php echo $description; ?></div>
		</div>
		<div class="detail-content__body">
			<?php echo $sections; ?>
		</div>
	</div>
	<div class="detail-footer" >
		<p class="end-mark ml-icon-endmark"></p>
		<div class="detail-footer__connect">
			<div class="detail-footer__connect__link">
				<div class="detail-footer__connect__link__short-tiny-url">http://luara.si/Cua8L<span class="detail-footer__connect__link__mail-icon ml-icon-mail" aria-hidden="true"></span></div>
			</div>
			<ul class="footer__social">
				<li class="footer__social__list-item"><a class="footer__social__list-item__link ml-icon-social-facebook" href="#"></a></li>
				<li class="footer__social__list-item"><a class="footer__social__list-item__link ml-icon-social-twitter" href="#"></a></li>
				<li class="footer__social__list-item"><a class="footer__social__list-item__link ml-icon-social-google" href="#"></a></li>
				<li class="footer__social__list-item"><a class="footer__social__list-item__link ml-icon-social-pinterest" href="#"></a></li>
				<li class="footer__social__list-item"><a class="footer__social__list-item__link ml-icon-social-tumblr" href="#"></a></li>
			</ul> 
		</div>
	</div>
	<div class="comments-wrapper">
		<div class="comments">
		   <div id="disqus_thread"></div>
		    <script type="text/javascript">
		        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		        var disqus_shortname = 'michelluarasi'; // required: replace example with your forum shortname

		        /* * * DON'T EDIT BELOW THIS LINE * * */
		        (function() {
		            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
		            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		        })();
		    </script>
		    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
		</div>
	</div>
</div>

<?php
	include ("get_in_touch.php");
	get_footer();
?>