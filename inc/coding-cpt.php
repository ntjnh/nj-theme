<?php
/**
 * Custom post type for Coding projects
 *
 * @package nate
 *
 */


function coding_cpt() {

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Coding', 'Post Type General Name', 'nate'),
        'singular_name'       => _x('Coding Project', 'Post Type Singular Name', 'nate'),
        'menu_name'           => __('Coding', 'nate'),
        'parent_item_colon'   => __('Parent Coding Project', 'nate'),
        'all_items'           => __('All Coding', 'nate'),
        'view_item'           => __('View Coding Project', 'nate'),
        'add_new_item'        => __('Add New Coding Project', 'nate'),
        'add_new'             => __('Add New', 'nate'),
        'edit_item'           => __('Edit Coding Project', 'nate'),
        'update_item'         => __('Update Coding Project', 'nate'),
        'search_items'        => __('Search Coding Project', 'nate'),
        'not_found'           => __('Not Found', 'nate'),
        'not_found_in_trash'  => __('Not found in Trash', 'nate'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('coding', 'nate'),
        'description'         => __('Coding Projects', 'nate'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('coding-types'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    register_post_type('coding', $args);
}

add_action('init', 'coding_cpt', 0);


// taxonomy here 