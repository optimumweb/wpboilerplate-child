<?php

// ENQUEUE
function enqueue() {
	if ( !is_admin() ) {
	    // libs
	    wpbp_enqueue_lib(array('modernizr', 'jquery', 'wpbp'));
		// scripts
		wp_enqueue_script('theme', THEME_URI . '/js/scripts.js', array('jquery'));
		// styles
		wp_enqueue_style('theme', THEME_URI . '/css/master.css', array('wpbp'));
	}
}
add_action('init', 'enqueue');
