<?php
/**
 * natejonah functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package natejonah
 */

if ( ! defined( 'NATE_VERSION' ) ) {
	define( 'NATE_VERSION', '1.0.0' );
}

function nate_setup() {

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    // Menus
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Primary', 'natejonah' ),
		)
	);
}

add_action( 'after_setup_theme', 'nate_setup' );

// Enqueue scripts and styles.
function nate_scripts() {
    wp_enqueue_style('nate-style', get_template_directory_uri() . '/build/css/app.css', array(), NATE_VERSION);	
}

add_action( 'wp_enqueue_scripts', 'nate_scripts' );
