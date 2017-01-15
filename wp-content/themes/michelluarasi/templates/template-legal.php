<?php
/*
Template Name: Template Legal
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
$current_page = "menu";
$body_class_extra = "legal";


get_header();?>

  <div class="detail-content">
    <div class="detail-content__body">

        <div class="one-column">

        <h1>Legal Disclosure</h1>
        <p class="lead">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Lorem dolorsit amet, consectetur adipiscing elit.</p>

        <h2>1. Responsibility</h2>
        <h3>1.1 Contact information</h3>

        <p>
            <strong>Michel Luarasi</strong></br>
            Engelstrasse 7</br>
            CH-8004 Zurich</br>
            <a href="mailto:michel@luarasi.com" title="E-Mail">michel@luarasi.com</a></br>
            <a href="tel:+41787225079" title="Mobile" >+41 78 722 50 79</a>
        </p>

        <p class="footnote">Last update: January 2017</p>

        <h3>1.2 VAT registered company</h3>
        <p>My VAT is based on the Swiss BID number: <strong>CHE-483.486.033</strong></p>

        <hr>

        <h2>2. Disclaimer</h2>
        <h3>2.1. Accountability for content</h3>

        <p>The contents of my pages have been created with the utmost care. However, I cannot guarantee the contents’ accuracy, completeness or topicality. According to statutory provisions, I am furthermore responsible for my own content on these web pages. In this context, please note that I am accordingly not obliged to monitor merely the transmitted or saved information of third parties, or investigate circumstances pointing to illegal activity. My obligations to remove or block the use of information under generally applicable laws remain unaffected by this as per §§ 8 to 10 of the Telemedia Act (TMG).</p>

        </div>



    </div>
  </div>

<?php
  // include (get_template_directory()."/get_in_touch.php"); 
  get_footer(); 
?>
