<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Déclaration du css du swipper
    wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css' );
}

function theme_enqueue_scripts() {
    // Déclaration du js du thème enfant
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery',  'swiper-script' ), 1.0, true );
    // Déclaration du js du swipper
    wp_enqueue_script( 'swiper-script', "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js", array( 'jquery' ), 1.1, true);
    // Activation de la version de jQuery qui est incluse dans WordPress
    wp_enqueue_script('jquery');
  }


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
