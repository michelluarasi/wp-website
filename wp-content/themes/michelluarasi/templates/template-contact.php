<?php
/*
Template Name: Template Contact
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
$current_page = "contact";
$body_class_extra = "contact";

get_header();?>

<div class="contact-wrapper">
    <div class="contact-content">
		    <p><a class="contact-main-link js-vp_reveal js-slide_up" href="mailto:&#109;&#105;&#99;&#104;&#101;&#108;&#64;&#108;&#117;&#97;&#114;&#97;&#115;&#105;&#46;&#99;&#111;&#109;">&#109;&#105;&#99;&#104;&#101;&#108;&#64;&#108;&#117;&#97;&#114;&#97;&#115;&#105;&#46;&#99;&#111;&#109;</a></p>
		    <p><a class="contact-main-link js-vp_reveal js-slide_up" href="tel:+41787225079">+41 78 722 50 79</a></p>
		</div>

    <div class="contact-footer">
		    <div class="contact-social js-vp_reveal js-fade_in">
						<a class="contact-social-link" target="_blank" href="http://instagram.com/michelluarasi">
							<svg class="instagram" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
									<path fill="#FFF" fill-rule="evenodd" d="M34.7 13.13c-1.34-1.4-3.26-2.13-5.45-2.13h-10.7C14 11 11 14.02 11 18.54V29.2c0 2.24.73 4.16 2.18 5.56 1.4 1.36 3.28 2.03 5.4 2.03H29.2c2.24 0 4.1-.74 5.46-2.04 1.4-1.35 2.13-3.27 2.13-5.5V18.53c0-2.18-.74-4.06-2.1-5.4zm-.3 16.12c0 1.6-.47 2.9-1.4 3.8-.94.88-2.24 1.35-3.8 1.35H18.6c-1.57 0-2.87-.47-3.8-1.35-.94-.94-1.4-2.24-1.4-3.85V18.54c0-1.56.46-2.86 1.4-3.8.88-.88 2.23-1.35 3.8-1.35h10.7c1.56 0 2.86.46 3.8 1.4.88.93 1.4 2.23 1.4 3.74v10.7h-.1zm-10.5-12c-3.64 0-6.66 2.95-6.66 6.65s2.96 6.65 6.66 6.65 6.65-3 6.65-6.65c0-3.64-3-6.66-6.65-6.66zm0 10.9c-2.34 0-4.27-1.9-4.27-4.25 0-2.34 1.93-4.27 4.27-4.27s4.26 1.93 4.26 4.27-1.92 4.26-4.26 4.26zm6.8-13c.84 0 1.52.68 1.52 1.52 0 .83-.68 1.5-1.5 1.5-.85 0-1.52-.67-1.52-1.5 0-.84.67-1.5 1.5-1.5z"/>
						  </svg>
						</a>

						<a class="contact-social-link" target="_blank" href="https://ch.linkedin.com/in/michelluarasi">
							<svg class="linkedin" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
									 <path fill="#FFF" fill-rule="evenodd" d="M35.02 35v-8.5c0-4.57-2.44-6.7-5.68-6.7-2.62 0-3.8 1.45-4.45 2.46v-2.1h-4.96c.06 1.4 0 14.84 0 14.84h4.93v-8.3c0-.43.02-.88.15-1.2.36-.88 1.17-1.8 2.53-1.8 1.8 0 2.5 1.36 2.5 3.36V35H35zM14.76 18.13c1.72 0 2.8-1.14 2.8-2.57-.06-1.46-1.1-2.56-2.78-2.56-1.7 0-2.8 1.1-2.8 2.56 0 1.43 1.07 2.57 2.73 2.57h.05zM17.23 35V20.16H12.3V35h4.93z"/>

						  </svg>
						</a>

						<a class="contact-social-link" target="_blank" href="https://m.me/michelluarasi">
							<svg class="messenger" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
									<path fill="#FFF" fill-rule="evenodd" d="M23.93 12C17.33 12 12 16.97 12 23.1c0 3.5 1.73 6.63 4.44 8.66V36l4.07-2.24c1.1.3 2.25.46 3.44.46 6.58 0 11.92-4.97 11.92-11.1C35.86 16.96 30.5 12 23.93 12zm1.18 14.96L22.1 23.7l-5.92 3.26 6.5-6.96 3.1 3.26L31.65 20l-6.52 6.96z"/>
							</svg>
						</a>

						<a class="contact-social-link" href="skype:michelluarasi?call">
							<svg class="skype" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
  								<path fill="#FFF" fill-rule="evenodd" d="M30.5 30.25c-1.86 2.65-5.94 2.97-8.84 2.36-1.46-.3-2.8-.97-3.76-2.13-.86-1.05-1.8-3.12-.24-4.02.57-.33 1.36-.34 1.92.02.66.43.86 1.23 1.23 1.87.84 1.47 2.35 1.85 3.95 1.66 1.3-.15 3.05-1.02 2.63-2.62-.37-1.44-2.54-1.7-3.75-1.95-2.85-.63-6.65-1.67-6.46-5.3.2-3.6 4.23-4.6 7.17-4.54 1.56.02 3.2.34 4.5 1.27 1.12.8 2.43 2.56 1.4 3.9-.43.6-1.15.83-1.85.7-.7-.15-1.05-.73-1.4-1.3-.83-1.4-1.8-1.92-3.44-1.84-1.14.05-3.76 1.12-2.26 2.6.6.57 1.5.77 2.28.96.95.22 1.9.42 2.84.68 1.6.44 3.4 1.04 4.33 2.52.98 1.54.78 3.7-.24 5.15M36.28 27c1.18-5.43-1.47-11.1-6.37-13.67-1.17-.6-2.43-1.04-3.72-1.25-.64-.1-1.3-.16-1.93-.17-.4 0-.8.03-1.18.06l-.66.07c-.38.06-.46 0-.8-.18-2.56-1.38-5.77-1.05-8 .8-2.2 1.8-3.12 4.84-2.3 7.58.1.36.23.7.4 1.05.22.47.27.58.2 1.1-.16.87-.2 1.77-.15 2.66.08 1.3.36 2.58.83 3.8 1.96 5 7.07 8.23 12.43 7.86.55-.04 1.13-.2 1.63-.06.4.1.76.33 1.16.45.85.24 1.75.33 2.64.25 1.45-.12 2.84-.7 3.96-1.62 2.54-2.1 3.33-5.78 1.87-8.74"/>
							</svg>
						</a>
				</div>
		</div>
</div>


<?php
	get_footer(); 
?>
	