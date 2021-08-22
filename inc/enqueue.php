<?php 
function bs4_enqeue_scripts(){
    wp_enqueue_script( 'bs4-jq-script', get_template_directory_uri() . '/js/jquery-3.6.0.min.js' );
    wp_enqueue_script( 'bs4-script', get_template_directory_uri() . '/js/bootstrap.min.js' );
    wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css');
    
}



add_action( 'wp_enqueue_scripts', 'bs4_enqeue_scripts' );
