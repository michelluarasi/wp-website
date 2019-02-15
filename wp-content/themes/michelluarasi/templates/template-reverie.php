<?php
/*
Template Name: Template Reverie
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
global $body_class_extra, $current_page;
$current_page = "reverie";
$body_class_extra = "reverie";

get_header();?> 

<div class="reverie-wrapper">
     <div class="js-tumblr--list"></div>
     <p class="profile__copy js-vp_reveal js-slide_up">
          <a class="js-tumblr--loadMore" href="https://michelluarasi.tumblr.com/api/read/json" data-start="20" data-num="20">
               <svg class="loading-spinner" viewBox="0 0 48 48">
                    <circle class="path" cx="24" cy="24" r="20" fill="none" stroke-width="4"></circle>
               </svg>
          </a>
     </p>
</div>

<?php get_footer(); ?>