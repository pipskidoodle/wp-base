<?php

// Add scripts and stylesheets
function wpbase_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/styles/bootstrap.min.css', array(), '4.3.1' );
	wp_enqueue_style( 'primary', get_template_directory_uri() . '/style.css', true );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/styles/font-awesome.css', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
}

add_action( 'wp_enqueue_scripts', 'wpbase_scripts' );

// WordPress Titles
add_theme_support( 'title-tag' );

// Featured Images
add_theme_support( 'post-thumbnails' );

// Menu Support
function register_primary_menu() {
  register_nav_menu('primary-menu',__( 'Primary Menu' ));
}
add_action( 'init', 'register_primary_menu' );

// Menu Support
register_nav_menus( array(
  'social_menu' => 'Social Menu',
) );

// Custom Login Screen
function wpbase_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-style.css" />';
}
add_action('login_head', 'wpbase_custom_login');


//Add SVG Support
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


//Register widgets in footer
function wpbase_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer 1',
		'id'            => 'footer_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Footer 2',
		'id'            => 'footer_2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Footer 3',
		'id'            => 'footer_3',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Footer 4',
		'id'            => 'footer_4',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'wpbase_widgets_init' );


// Menu Support
function register_primary_menu() {
  register_nav_menu('primary-menu',__( 'Primary Menu' ));
}
add_action( 'init', 'register_primary_menu' );


function register_secondary_menu() {
  register_nav_menu('secondary-menu',__( 'Secondary Menu' ));
}
add_action( 'init', 'register_secondary_menu' );
