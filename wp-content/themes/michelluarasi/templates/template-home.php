<?php
/*
Template Name: Template Home
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
global $current_page;
$current_page ="home";

$home_title = get_field('home_title');
$home_headline = get_field('home_headline');
$home_link_cta = get_field('home_link_cta');
$home_link_url = get_field('home_link_url');
$home_content_width = get_field('home_content_width');

get_header();?>

<div class="home-wrapper">
  <div class="home-content" style="max-width: <?php echo $home_content_width; ?>;">
      <h4 class="js-vp_reveal js-fade_in" style="color: rgba(255, 255, 255, 0.4);;"><?php echo $home_title; ?></h4>
      <h1 class="js-vp_reveal js-slide_down" style="color: white; padding: 0;"><?php echo $home_headline; ?></h1>
      <p class="profile__copy js-vp_reveal js-slide_up"><a id="gtm-home-cta" class="btn btn-m btn-violet" href="<?php echo $home_link_url; ?>" title="Home Call To Action"><?php echo $home_link_cta; ?></a></p>
  
	    <div class="contact-footer">
			    <div class="contact-social js-vp_reveal js-fade_in">

							<a id="gtm-home-mail" class="contact-social-link" target="_blank" href="mailto:&#109;&#105;&#99;&#104;&#101;&#108;&#64;&#108;&#117;&#97;&#114;&#97;&#115;&#105;&#46;&#99;&#111;&#109;"/>
								<svg class="mail" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
									<g fill="none" fill-rule="evenodd" stroke="#FFF" stroke-width="2">
									    <rect x="10" y="15" width="28" height="18" rx="5"/>
									    <path d="M14 18.682l10 8 10-8M27.182 23.59l6.136 4.91M13.682 28.5l6.136-4.91"/>
									</g>
							</a>

							<a id="gtm-home-call"  class="contact-social-link" target="_blank" href="tel:+41787225079">
								<svg class="phone" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
									<g fill="none" fill-rule="evenodd">
									    <rect stroke="#FFF" stroke-width="2" x="11" y="11" width="26" height="26" rx="13"/>
									    <path d="M30.646 27.368c-.085-.139-.31-.223-.646-.39-.337-.167-1.994-.976-2.302-1.087-.31-.112-.534-.168-.759.167-.224.335-.87 1.087-1.067 1.31-.196.224-.393.252-.73.084-.336-.167-1.422-.52-2.71-1.659-1-.886-1.677-1.98-1.874-2.315-.196-.334-.02-.515.148-.682.152-.15.337-.39.506-.585.168-.195.224-.335.336-.558.113-.223.057-.418-.028-.586-.084-.167-.758-1.812-1.039-2.481-.28-.67-.56-.558-.758-.558-.196 0-.42-.028-.645-.028-.225 0-.59.084-.9.418-.308.335-1.178 1.144-1.178 2.789 0 1.645 1.207 3.234 1.376 3.457.168.223 2.33 3.708 5.755 5.047 3.426 1.339 3.426.892 4.044.836.617-.055 1.993-.808 2.274-1.589.28-.78.28-1.45.197-1.59z" fill="#FFF"/>
									</g>
							  </svg>
							</a>

						<a id="gtm-home-instagram"  class="contact-social-link" target="_blank" href="http://instagram.com/michelluarasi">
							<svg class="instagram" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
								<g fill="none" fill-rule="evenodd">
								    <path d="M21.256 12c-3.1 0-4.375.246-5.692.95a6.27 6.27 0 0 0-2.614 2.614c-.704 1.317-.95 2.591-.95 5.692v5.488c0 3.1.246 4.375.95 5.692a6.27 6.27 0 0 0 2.614 2.614c1.317.704 2.591.95 5.692.95h5.488c3.1 0 4.375-.246 5.692-.95a6.27 6.27 0 0 0 2.614-2.614c.704-1.317.95-2.591.95-5.692v-5.488c0-3.1-.246-4.375-.95-5.692a6.27 6.27 0 0 0-2.614-2.614c-1.317-.704-2.591-.95-5.692-.95h-5.488z" stroke="#FFF" stroke-width="2"/>
								    <path d="M24 18a6 6 0 1 1 0 12 6 6 0 1 1 0-12z" stroke="#FFF" stroke-width="2"/>
								    <path d="M31 15.5a1.5 1.5 0 0 1 0 3 1.5 1.5 0 0 1 0-3z" fill="#FFF"/>
								</g>
						</a>

						<a id="gtm-home-linkedin"  class="contact-social-link" target="_blank" href="https://ch.linkedin.com/in/michelluarasi">
							<svg class="linkedin" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
								<g fill="none" fill-rule="evenodd">
								    <path d="M27.605 22.024c1.939 0 3.394 1.256 3.395 3.958v5.042h-2.948v-4.706c0-1.182-.426-1.989-1.494-1.989-.814 0-1.299.547-1.513 1.07-.078.19-.097.45-.097.714v4.911H22s.04-7.969 0-8.793h2.948v1.245a.157.157 0 0 1-.02.03h.02v-.03c.392-.6 1.093-1.452 2.657-1.452zM18.512 17.5c1.217 0 1.965.865 1.988 2 0 1.11-.772 2-2.012 2h-.023c-1.194 0-1.965-.89-1.965-2 0-1.135.797-2 2.012-2zM17 22h3.001v9H17v-9z" fill="#FFF" fill-rule="nonzero"/>
								    <rect stroke="#FFF" stroke-width="2" x="12" y="12" width="24" height="24" rx="5"/>
								</g>
						  </svg>
						</a>

					</div>
			</div>
	</div>



  </div>



  <div id="webglcontainer"></div>

</div>

<?php include 'webgl.php';?>

<?php get_footer(); ?>