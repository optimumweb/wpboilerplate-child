<?php

// ENQUEUE
function enqueue() {
	if ( !is_admin() ) {
		// scripts
		wpbp_enqueue_scripts( array( 'modernizr', 'jquery', 'wpbp' ) );
		// styles
		wpbp_enqueue_styles( array( '960gs', 'default' ) );
		wp_enqueue_style('theme', THEME_URI . '/css/master.css', array('default'));
	}
}
add_action('init', 'enqueue');
