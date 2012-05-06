<?php

// ENQUEUE
function enqueue() {
	if ( !is_admin() ) {
		// scripts
		wpbp_enqueue_scripts( array( 'modernizr', 'jquery', 'wpbp' ) );
		// styles
		wpbp_enqueue_styles( array( '960gs', 'default' ) );
		wp_enqueue_style('theme', get_stylesheet_directory_uri() . '/css/theme.css', array('default'));
	}
}
add_action('init', 'enqueue');
