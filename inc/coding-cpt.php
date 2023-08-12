<?php
/**
 * Custom post type for Coding projects
 *
 * @package nate
 *
 */


function coding_cpt() {
    $labels = array(
        'name' => _x('Coding', 'Post Type General Name', 'nate'),
        'singular_name' => _x('Coding Project', 'Post Type Singular Name', 'nate'),
        'menu_name' => __('Coding', 'nate'),
        'parent_item_colon' => __('Parent Coding Project', 'nate'),
        'all_items' => __('All Coding', 'nate'),
        'view_item' => __('View Coding Project', 'nate'),
        'add_new_item' => __('Add New Coding Project', 'nate'),
        'add_new' => __('Add New', 'nate'),
        'edit_item' => __('Edit Coding Project', 'nate'),
        'update_item' => __('Update Coding Project', 'nate'),
        'search_items' => __('Search Coding Project', 'nate'),
        'not_found' => __('Not Found', 'nate'),
        'not_found_in_trash' => __('Not found in Trash', 'nate'),
    );

    $args = array(
        'label' => __('coding', 'nate'),
        'description' => __('Coding Projects', 'nate'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
        'taxonomies' => array('coding-types'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );

    register_post_type('coding', $args);
}

add_action('init', 'coding_cpt', 0);

add_action( 'init', 'purpose_taxonomy', 0 );
    
function purpose_taxonomy() {
    $labels = array(
        'name' => _x( 'Purposes', 'taxonomy general name' ),
        'singular_name' => _x( 'Purpose', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Purposes' ),
        'all_items' => __( 'All Purposes' ),
        'parent_item' => __( 'Parent Purpose' ),
        'parent_item_colon' => __( 'Parent Purpose:' ),
        'edit_item' => __( 'Edit Purpose' ), 
        'update_item' => __( 'Update Purpose' ),
        'add_new_item' => __( 'Add New Purpose' ),
        'new_item_name' => __( 'New Purpose Name' ),
        'menu_name' => __( 'Purposes' ),
    );    
    
    register_taxonomy( 'purpose', array( 'coding' ), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'coding'
        )
    ));
}
