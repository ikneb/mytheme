<?php

require_once(trailingslashit( get_template_directory() ) . 'lib/wp_bootstrap_navwalker.php');

function my_theme_stylesheets() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.4', 'all' );
    wp_enqueue_style( 'mytheme-stylesheet', get_stylesheet_uri(), array(), '1.3.7', 'all' );
}

add_action( 'wp_enqueue_scripts', 'my_theme_stylesheets' );

if (wc_get_page_id( 'cart' ) == get_the_ID()) {
   var_dump(get_the_ID());exit;
}


function theme_prefix_setup() {

    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width' => true,
    ) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );