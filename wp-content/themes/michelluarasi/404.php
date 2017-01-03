<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package michelluarasi
 */

global $current_page;
$current_page = "404";

get_header(); ?>

<div class="one-column page-not-found">
	<img src="<?php bloginfo('template_url'); ?>/img/fox-404.gif" alt="Not Found"/>
	<h2>Page Not Found</h2>
	<p>You're on the wrong path.</p>
	<a href="/" class="btn btn-m btn-violet"> Go Home</a>	
</div>




<?php
  get_footer(); 
?>