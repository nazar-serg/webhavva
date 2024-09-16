<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function webhavva_setup() {

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'header_menu' => esc_html__( 'Header Menu', 'webhavva' ),
			'footer_menu_left' => esc_html__( 'Footer Menu Left', 'webhavva' ),
			'footer_menu_right' => esc_html__( 'Footer Menu Right', 'webhavva' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support('custom-logo');
}
add_action( 'after_setup_theme', 'webhavva_setup' );

/**
 * Enqueue scripts and styles.
 */
function webhavva_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'dynamic-adapt', get_template_directory_uri() . '/app/js/dynamic_adapt.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/app/js/app.min.js', array( 'jquery' ), '1.4.0', true );
	
    wp_enqueue_style( 'neue-haas-grotesk-display-pro', 'https://fonts.cdnfonts.com/css/neue-haas-grotesk-display-pro',array(), '1.0.0', 'all');
	wp_enqueue_style( 'canela-text-trial', 'https://fonts.cdnfonts.com/css/canela-text-trial',array(), '1.0.0', 'all');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/app/css/app.min.css', array(), '1.6', 'all' );
	wp_enqueue_style( 'style-theme', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'webhavva_scripts' );

/**
 * Adding a class to "a"
 */
function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

/**
 * Adding a class to "li"
 */
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/**
 * ACF Options
 */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

}