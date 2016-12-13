<?php
/**
 * michelluarasi functions and definitions
 *
 * @package michelluarasi
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'michelluarasi_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function michelluarasi_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on michelluarasi, use a find and replace
	 * to change 'michelluarasi' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'michelluarasi', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'michelluarasi' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'michelluarasi_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // michelluarasi_setup
add_action( 'after_setup_theme', 'michelluarasi_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function michelluarasi_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'michelluarasi' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'michelluarasi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function michelluarasi_scripts() {
	wp_enqueue_style( 'michelluarasi-style', get_stylesheet_uri() );

	wp_enqueue_script( 'michelluarasi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'michelluarasi-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'michelluarasi_scripts' );


function page_bodyclass() {  // add class to <body> tag
	
}

// Add specific CSS class by filter
add_filter('body_class','my_class_names');
function my_class_names($classes) {
	// add 'class-name' to the $classes array
	global $wp_query;
	if (is_front_page() ) {
       $classes[] = 'home';
	} elseif (is_page()) {
   	   $classes[] = $wp_query->query_vars["pagename"];
	}
	return $classes;
}

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Custom Functions
 */
require get_template_directory() . '/inc/custom-functions.php';

add_filter('simple_fields_save_postdata_do_wpautop', 'michelluarasi_save_postdata_do_wpautop',10,2);

function michelluarasi_save_postdata_do_wpautop($do_wpautop, $post_id){
	return false;
}
