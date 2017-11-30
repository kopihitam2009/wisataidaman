<?php
/**
 * Wisata Idaman functions and definitions
 */

if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'wisataidaman_setup' ) ) :
function wisataidaman_setup() {

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wisataidaman' ),
		'secondary'  => __( 'Additional Links Menu', 'wisataidaman' ),
	) );

	add_theme_support( 'html5', array(
		'search-form','comment-form','comment-list','gallery','caption',
	) );

	//add_theme_support( 'post-formats', array(
		//'aside','image','video','quote','link','gallery','status','audio','chat',
	//) );

}
endif;
add_action( 'after_setup_theme', 'wisataidaman_setup' );

function wisataidaman_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wisataidaman' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'wisataidaman' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wisataidaman_widgets_init' );

function wisataidaman_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'wisataidaman_javascript_detection', 0 );

function wisataidaman_scripts() {
	wp_enqueue_style( 'wisataidaman-style', get_stylesheet_uri() );
	wp_enqueue_style( 'wisataidaman-platform', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );
	wp_enqueue_style( 'wisataidaman-fontawsome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'wisataidaman-theme', get_template_directory_uri() . '/css/theme.css' );

	wp_enqueue_script( 'wisataidaman-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js',array(),'0', true );
	wp_enqueue_script( 'wisataidaman-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js',array(),'0', true );
	wp_enqueue_script( 'wisataidaman-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js',array(),'0', true );
	wp_enqueue_script( 'wisataidaman-bxslider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js',array(),'0', true );
	wp_enqueue_script( 'wisataidaman-scripts', get_template_directory_uri() . '/js/function.js',array(),'0', true );
}
add_action( 'wp_enqueue_scripts', 'wisataidaman_scripts' );

require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

// Custom Admin
function img_banner() {
	register_post_type( 'banner', array(
	  'labels' => array(
	    'name' => 'Banners',
	    'singular_name' => 'Banner',
	   ),
	  'description' => 'Banner Images in home page',
	  'public' => true,
	  'menu_position' => 20,
	  'supports' => array( 'title' )
	));
}
add_action( 'init', 'img_banner' );

function programs() {
	register_post_type( 'programs', array(
	  'labels' => array(
	    'name' => 'Programs',
	    'singular_name' => 'Program',
	   ),
	  'description' => 'Program',
	  'public' => true,
		'has_archive' => true,
		//'rewrite' => array( 'slug' => 'programs' ),
	  'menu_position' => 20,
	  'supports' => array( 'title' ),
		'taxonomies' => array( 'category' ),
	));
}
add_action( 'init', 'programs' );

function superiorities() {
	register_post_type( 'superiorities', array(
	  'labels' => array(
	    'name' => 'Superiorities',
	    'singular_name' => 'Superiority',
	   ),
	  'description' => 'Superiorities',
	  'public' => true,
	  'menu_position' => 20,
	  'supports' => array( 'title' )
	));
}
add_action( 'init', 'superiorities' );

require_once get_template_directory() . '/theme-options.php';