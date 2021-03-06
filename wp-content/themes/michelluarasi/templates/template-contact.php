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
		    <p><a id="gtm-contact-mail" class="contact-main-link js-vp_reveal js-slide_up" href="mailto:&#109;&#105;&#99;&#104;&#101;&#108;&#64;&#108;&#117;&#97;&#114;&#97;&#115;&#105;&#46;&#99;&#111;&#109;">&#109;&#105;&#99;&#104;&#101;&#108;&#64;&#108;&#117;&#97;&#114;&#97;&#115;&#105;&#46;&#99;&#111;&#109;</a></p>
		    <p><a id="gtm-contact-call" class="contact-main-link js-vp_reveal js-slide_up" href="tel:+41787225079">+41 78 722 50 79</a></p>
		</div>

    <div class="contact-footer">
		    <div class="contact-social js-vp_reveal js-fade_in">
						<a id="gtm-contact-instagram" class="contact-social-link" target="_blank" href="http://instagram.com/michelluarasi">
							<svg class="instagram" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
									<g fill="none" fill-rule="evenodd">
								    <path d="M21.256 12c-3.1 0-4.375.246-5.692.95a6.27 6.27 0 0 0-2.614 2.614c-.704 1.317-.95 2.591-.95 5.692v5.488c0 3.1.246 4.375.95 5.692a6.27 6.27 0 0 0 2.614 2.614c1.317.704 2.591.95 5.692.95h5.488c3.1 0 4.375-.246 5.692-.95a6.27 6.27 0 0 0 2.614-2.614c.704-1.317.95-2.591.95-5.692v-5.488c0-3.1-.246-4.375-.95-5.692a6.27 6.27 0 0 0-2.614-2.614c-1.317-.704-2.591-.95-5.692-.95h-5.488z" stroke="#FFF" stroke-width="2"/>
								    <path d="M24 18a6 6 0 1 1 0 12 6 6 0 1 1 0-12z" stroke="#FFF" stroke-width="2"/>
								    <path d="M31 15.5a1.5 1.5 0 0 1 0 3 1.5 1.5 0 0 1 0-3z" fill="#FFF"/>
								  </g>
						</a>

						<a id="gtm-contact-linkedin"  class="contact-social-link" target="_blank" href="https://ch.linkedin.com/in/michelluarasi">
							<svg class="linkedin" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
								  <g fill="none" fill-rule="evenodd">
								    <path d="M27.605 22.024c1.939 0 3.394 1.256 3.395 3.958v5.042h-2.948v-4.706c0-1.182-.426-1.989-1.494-1.989-.814 0-1.299.547-1.513 1.07-.078.19-.097.45-.097.714v4.911H22s.04-7.969 0-8.793h2.948v1.245a.157.157 0 0 1-.02.03h.02v-.03c.392-.6 1.093-1.452 2.657-1.452zM18.512 17.5c1.217 0 1.965.865 1.988 2 0 1.11-.772 2-2.012 2h-.023c-1.194 0-1.965-.89-1.965-2 0-1.135.797-2 2.012-2zM17 22h3.001v9H17v-9z" fill="#FFF" fill-rule="nonzero"/>
								    <rect stroke="#FFF" stroke-width="2" x="12" y="12" width="24" height="24" rx="5"/>
								  </g>
						  </svg>
						</a>


						<a id="gtm-contact-whatsapp"  class="contact-social-link" target="_blank" href="https://wa.me/41787225079">
							<svg class="whatsapp" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
								  <g fill="none" fill-rule="evenodd">
								    <path d="M17.258 34.939l-6.053 1.924 1.97-5.816A12.774 12.774 0 0 1 11 23.907C11 16.787 16.832 11 24 11c7.167 0 13 5.788 13 12.908 0 7.12-5.833 12.907-13 12.907a12.99 12.99 0 0 1-6.742-1.876z" stroke="#FFF" stroke-width="2"/>
								    <path d="M30.646 27.368c-.085-.139-.31-.223-.646-.39-.337-.167-1.994-.976-2.302-1.087-.31-.112-.534-.168-.759.167-.224.335-.87 1.087-1.067 1.31-.196.224-.393.252-.73.084-.336-.167-1.422-.52-2.71-1.659-1-.886-1.677-1.98-1.874-2.315-.196-.334-.02-.515.148-.682.152-.15.337-.39.506-.585.168-.195.224-.335.336-.558.113-.223.057-.418-.028-.586-.084-.167-.758-1.812-1.039-2.481-.28-.67-.56-.558-.758-.558-.196 0-.42-.028-.645-.028-.225 0-.59.084-.9.418-.308.335-1.178 1.144-1.178 2.789 0 1.645 1.207 3.234 1.376 3.457.168.223 2.33 3.708 5.755 5.047 3.426 1.339 3.426.892 4.044.836.617-.055 1.993-.808 2.274-1.589.28-.78.28-1.45.197-1.59z" fill="#FFF"/>
								  </g>
							</svg>
						</a>


						<a  id="gtm-contact-skype" class="contact-social-link" href="skype:michelluarasi?call">
							<svg class="skype" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
								  <g fill="none" fill-rule="evenodd">
								    <path d="M29.897 13.325a12.368 12.368 0 0 0-7.486-1.29c-.389.054-.475-.005-.816-.189-2.55-1.374-5.764-1.05-7.99.795-2.197 1.818-3.126 4.846-2.316 7.585.107.36.243.712.405 1.052.225.472.273.582.192 1.09a12.472 12.472 0 0 0 .693 6.467c1.957 5.01 7.07 8.23 12.43 7.867.543-.038 1.124-.213 1.625-.066.392.116.76.335 1.157.452a7.206 7.206 0 0 0 6.612-1.362c2.54-2.103 3.332-5.78 1.863-8.74 1.18-5.414-1.464-11.09-6.369-13.66z" stroke="#FFF" stroke-width="2"/>
								    <path d="M30.212 29.59c-1.668 2.362-5.307 2.654-7.903 2.107-1.296-.273-2.507-.877-3.356-1.917-.761-.931-1.592-2.778-.211-3.583.506-.295 1.216-.307 1.713.015.588.383.768 1.1 1.095 1.675.745 1.311 2.091 1.643 3.524 1.476 1.16-.136 2.72-.912 2.348-2.334-.336-1.29-2.27-1.512-3.346-1.748-2.55-.559-5.942-1.484-5.768-4.741.17-3.19 3.771-4.089 6.394-4.038 1.399.027 2.86.311 4.02 1.138 1 .714 2.172 2.285 1.257 3.496-.388.513-1.03.73-1.657.602-.615-.126-.932-.64-1.235-1.144-.751-1.25-1.605-1.721-3.079-1.652-1.02.047-3.355 1-2.02 2.316.529.52 1.343.695 2.04.866.843.208 1.695.38 2.533.611 1.436.398 3.03.933 3.872 2.258.869 1.368.695 3.302-.221 4.597" fill="#FFF"/>
								  </g>
							</svg>
						</a>

						<a  id="gtm-contact-messenger" class="contact-social-link" target="_blank" href="https://m.me/michelluarasi">
							<svg class="messenger" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
								  <g fill="none" fill-rule="evenodd">
								    <path fill="#FFF" d="M26 28.493l-3.727-3.975L15 28.493 23 20l3.818 3.975L34 20z"/>
								    <path d="M24.5 11C17.044 11 11 16.596 11 23.5c0 3.934 1.963 7.442 5.031 9.734V38l4.597-2.523A14.51 14.51 0 0 0 24.5 36C31.956 36 38 30.404 38 23.5S31.956 11 24.5 11z" stroke="#FFF" stroke-width="2"/>
								  </g>
							</svg>
						</a>

						<a  id="gtm-contact-spotify" class="contact-social-link" target="_blank" href="http://open.spotify.com/user/michelluarasi">
							<svg class="spotify" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
								  <g fill="none" fill-rule="evenodd">
								    <path d="M30.134 30.671c-.217 0-.363-.075-.565-.198-1.935-1.169-4.344-1.784-6.902-1.784-1.428 0-2.864.183-4.208.462-.218.048-.493.133-.657.133a.833.833 0 0 1-.844-.839c0-.56.323-.838.726-.916 1.648-.375 3.289-.59 4.992-.59 2.92 0 5.52.67 7.76 2.012.333.195.527.392.527.886a.833.833 0 0 1-.83.834zm1.452-3.531c-.288 0-.47-.117-.667-.231-2.17-1.287-5.177-2.143-8.47-2.143-1.689 0-3.147.237-4.354.558-.26.071-.406.148-.648.148a1.045 1.045 0 0 1-1.043-1.046c0-.567.275-.957.83-1.114 1.5-.411 3.03-.729 5.26-.729 3.491 0 6.87.87 9.523 2.46.447.255.61.578.61 1.054a1.04 1.04 0 0 1-1.041 1.043zm1.655-4.106c-.271 0-.432-.066-.686-.204-2.414-1.448-6.162-2.245-9.785-2.245-1.809 0-3.646.184-5.329.64-.194.05-.438.146-.684.146-.711 0-1.257-.563-1.257-1.274 0-.725.45-1.132.934-1.275 1.901-.56 4.024-.822 6.33-.822 3.917 0 8.038.806 11.049 2.574.406.23.687.576.687 1.21 0 .728-.585 1.25-1.26 1.25z" fill="#FFF" fill-rule="nonzero"/>
								    <rect stroke="#FFF" stroke-width="2" x="10" y="10" width="28" height="28" rx="14"/>
								  </g>
							</svg>
						</a>

				</div>
		</div>
</div>


<?php
	get_footer(); 
?>
	