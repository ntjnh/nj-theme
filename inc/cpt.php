<?php


//
// Projects custom post type
//

function project_cpt()
{
    register_post_type(
        'projects',
        array(
            'labels' => array(
                'name' => __('Projects'),
                'singular_name' => __('Project'),
                'name'                => _x('Projects', 'Post Type General Name', 'nate'),
                'singular_name'       => _x('Project', 'Post Type Singular Name', 'nate'),
                'menu_name'           => __('Projects', 'nate'),
                'parent_item_colon'   => __('Parent Project', 'nate'),
                'all_items'           => __('All Projects', 'nate'),
                'view_item'           => __('View Project', 'nate'),
                'add_new_item'        => __('Add New Project', 'nate'),
                'edit_item'           => __('Edit Project', 'nate'),
                'update_item'         => __('Update Project', 'nate'),
                'search_items'        => __('Search Project', 'nate'),
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
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
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

add_action('init', 'project_cpt');

//
// Custom taxonomy for Projects CPT
//
function project_taxonomy()
{
    register_taxonomy(
        'project-categories',
        array('projects'),
        array(
            'labels' => array(
                'name' => _x('Project Categories', 'Taxonomy General name'),
                'singular_name' => _x('Project Category', 'Taxonomy Singular name'),
                'search_items' =>  __('Search Project Categories'),
                'all_items' => __('All Project Categories'),
                'parent_item' => __('Parent Project Category'),
                'parent_item_colon' => __('Parent Project Category:'),
                'edit_item' => __('Edit Project Category'),
                'update_item' => __('Update Project Category'),
                'add_new_item' => __('Add New Project Category'),
                'new_item_name' => __('New Project Category Name'),
                'menu_name' => __('Project Categories'),
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

add_action('init', 'project_taxonomy', 0);
