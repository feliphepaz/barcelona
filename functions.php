<?php

add_theme_support( 'post-thumbnails' );

function barcelona_scripts() {
  wp_register_script('script', get_template_directory_uri() . '/script.js', [], false, true);
  wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'barcelona_scripts');

?>