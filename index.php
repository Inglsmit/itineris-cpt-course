<?php
/*
Plugin Name:  Itineris CPT (course)
Plugin URI:   
Description:  Adding Custom Post Type for Itineris
Version:      1.0.0
Author:       Paul Inglsmit
Author URI:   http://paul.ingslmit/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  cpt-course
*/

if( !defined('WPINC')) {
    die;
}

include_once('includes/course-post-type.php');
include_once('includes/course-type.php');
include_once('includes/course-campus.php');

function itineris_cpt_activate() {
    itineris_cpt_setup_post_type();
	itineris_cpt_register_type_tax();
	itineris_cpt_register_campus_tax();
    flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'itineris_cpt_activate');

function itineris_cpt_deactivate() {
    unregister_post_type('itineris_course');
	unregister_taxonomy('itineris_type');
	unregister_taxonomy('itineris_campus');
    flush_rewrite_rules();
}

register_deactivation_hook(__FILE__, 'itineris_cpt_deactivate');