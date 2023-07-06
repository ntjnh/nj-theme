<?php
/**
 * nate functions and definitions
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

    // Additional image sizes
    add_image_size( 'photo-small', 492, 277, true );
    add_image_size( 'photo-medium', 696, 392, true );
    add_image_size( 'photo-large', 389, 219, true );
    add_image_size( 'photo-xlarge', 558, 314, true );
    add_image_size( 'photo-xxlarge', 604, 340, true );

    // Menus
    register_nav_menus(
        array(
            'main-menu' => esc_html__( 'Primary', 'nate' ),
            'footer-menu' => esc_html__( 'Footer', 'nate' )
        )
    );
}

add_action( 'after_setup_theme', 'nate_setup' );

// Enqueue scripts and styles.
function nate_scripts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), false, 'all' );	
    wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/build/css/tw.css', array(), '3.2.4', 'all' );

    wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/6e2ccb04f1.js?ver=5.15.3', array(), '5.15.3', false );
    
    wp_enqueue_script( 'jquery-masonry', array( 'jquery' ), NATE_VERSION, true );
    wp_enqueue_script( 'nate-script', get_template_directory_uri() . '/build/js/app.js', array( 'jquery' ), NATE_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'nate_scripts' );

// Disable scaling down of large images
add_filter( 'big_image_size_threshold', '__return_false' );

// Custom post types
require('inc/cpt.php');