<?php

/**
 * Enqueue scripts and styles.
 */
function lanyon_scripts() {
  wp_enqueue_style( 'lanyon-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'lanyon_scripts' );
