<?php

function itineris_cpt_setup_post_type() {

    $labels = array(
        'name'                  => esc_html_x( 'Course', 'Post type general name', 'cpt-course' ),
        'singular_name'         => esc_html_x( 'Course Item', 'Post type singular name', 'cpt-course' ),
        'menu_name'             => esc_html_x( 'Course', 'Admin Menu text', 'cpt-course' ),
        'name_admin_bar'        => esc_html_x( 'Course Item', 'Add New on Toolbar', 'cpt-course' ),
        'add_new'               => esc_html__( 'Add New', 'cpt-course' ),
        'add_new_item'          => esc_html__( 'Add New course Item', 'cpt-course' ),
        'new_item'              => esc_html__( 'New course Item', 'cpt-course' ),
        'edit_item'             => esc_html__( 'Edit course Item', 'cpt-course' ),
        'view_item'             => esc_html__( 'View course Item', 'cpt-course' ),
        'view_items'            => esc_html__( 'View course Items', 'cpt-course' ),
        'all_items'             => esc_html__( 'All course Items', 'cpt-course' ),
        'search_items'          => esc_html__( 'Search course Items', 'cpt-course' ),
        'parent_item_colon'     => esc_html__( 'Parent course Items:', 'cpt-course' ),
        'not_found'             => esc_html__( 'No course Items found.', 'cpt-course' ),
        'not_found_in_trash'    => esc_html__( 'No course Items found in Trash.', 'cpt-course' ),
        'featured_image'        => esc_html_x( 'Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'cpt-course' ),
        'set_featured_image'    => esc_html_x( 'Set featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'cpt-course' ),
        'remove_featured_image' => esc_html_x( 'Remove course item image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'cpt-course' ),
        'use_featured_image'    => esc_html_x( 'Use as course item image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'cpt-course' ),
        'archives'              => esc_html_x( 'Course archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'cpt-course' ),
        'insert_into_item'      => esc_html_x( 'Insert into course item', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'cpt-course' ),
        'uploaded_to_this_item' => esc_html_x( 'Uploaded to this course item', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'cpt-course' ),
        'filter_items_list'     => esc_html_x( 'Filter course items list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'cpt-course' ),
        'items_list_navigation' => esc_html_x( 'Course items list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'cpt-course' ),
        'items_list'            => esc_html_x( 'Course items list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'cpt-course' ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-video',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'custom-fields'),
        'rewrite' => array('slug' => 'course'),
        'show_in_rest' => true
    );
    register_post_type('itineris_course', $args);
}

add_action('init', 'itineris_cpt_setup_post_type');
