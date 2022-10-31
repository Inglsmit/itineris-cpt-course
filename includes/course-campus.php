<?php

function itineris_cpt_register_campus_tax() {
    $labels = [
        'name'              => esc_html_x('Campus', 'taxonomy general name', 'cpt-course'),
		'singular_name'     => esc_html_x('Campus', 'taxonomy singular name', 'cpt-course'),
		'search_items'      => esc_html__('Search Campuss', 'cpt-course'),
		'all_items'         => esc_html__('All Campuses', 'cpt-course'),
		'parent_item'       => esc_html__('Parent Campus', 'cpt-course'),
		'parent_item_colon' => esc_html__('Parent Campus:', 'cpt-course'),
		'edit_item'         => esc_html__('Edit Campus', 'cpt-course'),
		'update_item'       => esc_html__('Update Campus', 'cpt-course'),
		'add_new_item'      => esc_html__('Add New Campus', 'cpt-course'),
		'new_item_name'     => esc_html__('New Campus Name', 'cpt-course'),
		'menu_name'         => esc_html__('Campuses', 'cpt-course'),
    ];
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'campus')
    );
    register_taxonomy('itineris_campus', ['itineris_course'], $args);
}

add_action('init', 'itineris_cpt_register_campus_tax');