<?php
/**
 * nate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nate
 */

if ( ! defined( 'NATE_VERSION' ) ) {
	define( 'NATE_VERSION', '2.0.0' );
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
		)
	);
}

add_action( 'after_setup_theme', 'nate_setup' );

// Enqueue scripts and styles.
function nate_scripts() {
    wp_enqueue_style( 'adobe-fonts', 'https://use.typekit.net/xop5aup.css', array(), false, 'all' );	
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap', array(), false, 'all' );	
    wp_enqueue_style( 'nate-style', get_template_directory_uri() . '/build/css/app.css', array(), NATE_VERSION, 'all' );	
    wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/build/css/tw.css', array(), '3.2.4', 'all' );

	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/6e2ccb04f1.js?ver=5.15.3', array(), '5.15.3', false );
	
	wp_enqueue_script( 'jquery-masonry', array( 'jquery' ), NATE_VERSION, true );
	wp_enqueue_script( 'nate-script', get_template_directory_uri() . '/build/js/app.js', array( 'jquery' ), NATE_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'nate_scripts' );

// Disable scaling down of large images
add_filter( 'big_image_size_threshold', '__return_false' );

//
// Projects custom post type
//

function project_cpt() {
    register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' ),
				'name'                => _x( 'Projects', 'Post Type General Name', 'nate' ),
				'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'nate' ),
				'menu_name'           => __( 'Projects', 'nate' ),
				'parent_item_colon'   => __( 'Parent Project', 'nate' ),
				'all_items'           => __( 'All Projects', 'nate' ),
				'view_item'           => __( 'View Project', 'nate' ),
				'add_new_item'        => __( 'Add New Project', 'nate' ),
				'edit_item'           => __( 'Edit Project', 'nate' ),
				'update_item'         => __( 'Update Project', 'nate' ),
				'search_items'        => __( 'Search Project', 'nate' ),
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array(
                'slug' => 'projects',
                'with_front' => false
            ),
            'show_in_rest' => false,
			'menu_icon' => 'dashicons-portfolio',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => false,
			'show_in_admin_bar'   => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post'  
        )
    );
}

add_action( 'init', 'project_cpt' );

//
// Custom taxonomy for Projects CPT
//
function project_taxonomy() {    
    register_taxonomy( 'project-categories',
        array( 'projects' ),
        array(
            'labels' => array(
                'name' => _x( 'Project Categories', 'Taxonomy General name' ),
                'singular_name' => _x( 'Project Category', 'Taxonomy Singular name' ),
                'search_items' =>  __( 'Search Project Categories' ),
                'all_items' => __( 'All Project Categories' ),
                'parent_item' => __( 'Parent Project Category' ),
                'parent_item_colon' => __( 'Parent Project Category:' ),
                'edit_item' => __( 'Edit Project Category' ), 
                'update_item' => __( 'Update Project Category' ),
                'add_new_item' => __( 'Add New Project Category' ),
                'new_item_name' => __( 'New Project Category Name' ),
                'menu_name' => __( 'Project Categories' ),
            ),
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'project-category',
                'with_front' => false
            ),
        )
    );
}
  
add_action( 'init', 'project_taxonomy', 0 );
