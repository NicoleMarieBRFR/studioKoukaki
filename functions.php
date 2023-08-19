<?php
// add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
// function theme_enqueue_styles() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
// }

function theme_enqueue_styles(){
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'template.css', get_stylesheet_directory_uri() . '/css/template.css'); 
    wp_register_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);
    wp_register_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', false, false, false );
    wp_enqueue_style('swipercss', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', false);
    wp_enqueue_script('swiper');  
    wp_enqueue_script('scripts');  
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}
