<?php
/**
 * NATE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nate
 */

if ( ! defined( 'NATE_VERSION' ) ) {
    define( 'NATE_VERSION', '3.0.0' );
}

function nate_setup() {
    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    // Menus
    register_nav_menus(
        array(
            'primary-menu' => esc_html__( 'Primary', 'nate' ),
            'footer-menu' => esc_html__( 'Footer', 'nate' )
        )
    );
}

add_action( 'after_setup_theme', 'nate_setup' );

/**
 * 
 * Enqueue scripts and styles.
 * 
*/

function nate_scripts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), false, 'all' );	
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/style.css', array(), '3.0.0', 'all' );

    wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/565d8eb534.js', array(), '6.4.2', false );
    
    wp_enqueue_script( 'jquery-masonry', array( 'jquery' ), NATE_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'nate_scripts' );

/** 
 * 
 * Additional filters/actions
 */

// Disable scaling down of large images
add_filter( 'big_image_size_threshold', '__return_false' );
