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

// Projects custom post type
function project_cpt() {
    register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' ),
				'name'                => _x( 'Projects', 'Post Type General Name', 'natejonah' ),
				'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'natejonah' ),
				'menu_name'           => __( 'Projects', 'natejonah' ),
				'parent_item_colon'   => __( 'Parent Project', 'natejonah' ),
				'all_items'           => __( 'All Projects', 'natejonah' ),
				'view_item'           => __( 'View Project', 'natejonah' ),
				'add_new_item'        => __( 'Add New Project', 'natejonah' ),
				'edit_item'           => __( 'Edit Project', 'natejonah' ),
				'update_item'         => __( 'Update Project', 'natejonah' ),
				'search_items'        => __( 'Search Project', 'natejonah' ),
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'projects'),
            'show_in_rest' => false,
			'menu_icon' => 'dashicons-portfolio',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			'taxonomies' => array( 'project_type' ),
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

// Project Type custom taxonomy
add_action( 'init', 'project_type_taxonomy', 0 );
 
function project_type_taxonomy() { 
	$labels = array(
		'name' => _x( 'Project Types', 'taxonomy general name' ),
		'singular_name' => _x( 'Project Type', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Project Types' ),
		'popular_items' => __( 'Popular Project Types' ),
		'all_items' => __( 'All Project Types' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Project Type' ), 
		'update_item' => __( 'Update Project Type' ),
		'add_new_item' => __( 'Add New Project Type' ),
		'new_item_name' => __( 'New Project Type Name' ),
		'separate_items_with_commas' => __( 'Separate project types with commas' ),
		'add_or_remove_items' => __( 'Add or remove project types' ),
		'choose_from_most_used' => __( 'Choose from the most used project types' ),
		'menu_name' => __( 'Project Types' ),
	);

	register_taxonomy('project_type', 'projects', array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => false,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'project-type' ),
	));
}
