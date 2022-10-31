<?php

function itineris_cpt_register_type_tax() {
    $labels = [
        'name'              => esc_html_x('Type', 'taxonomy general name', 'cpt-course'),
		'singular_name'     => esc_html_x('Type', 'taxonomy singular name', 'cpt-course'),
		'search_items'      => esc_html__('Search Types', 'cpt-course'),
		'all_items'         => esc_html__('All Types', 'cpt-course'),
		'parent_item'       => esc_html__('Parent Type', 'cpt-course'),
		'parent_item_colon' => esc_html__('Parent Type:', 'cpt-course'),
		'edit_item'         => esc_html__('Edit Type', 'cpt-course'),
		'update_item'       => esc_html__('Update Type', 'cpt-course'),
		'add_new_item'      => esc_html__('Add New Type', 'cpt-course'),
		'new_item_name'     => esc_html__('New Type Name', 'cpt-course'),
		'menu_name'         => esc_html__('Types', 'cpt-course'),
    ];
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'type')
    );
    register_taxonomy('itineris_type', ['itineris_course'], $args);
}

add_action('init', 'itineris_cpt_register_type_tax');