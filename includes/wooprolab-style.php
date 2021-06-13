<?php
/*
WP Page Banner Plugin Code.
*/

// Load CSS on the frontend
function wooprolab_style() {

  wp_enqueue_style('wooprolab-style', WPPLUGIN_URL . 'css/wooprolab-style.css',[],time() );

}
add_action( 'wp_enqueue_scripts', 'wooprolab_style', 100 );
