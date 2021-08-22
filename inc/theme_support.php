<?php 
/** theme support
 * 
 * 
 * */ 

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

/*
* Let WordPress manage the document title.
* By adding theme support, we declare that this theme does not use a
* hard-coded <title> tag in the document head, and expect WordPress to
* provide it for us.
*/

// This theme uses wp_nav_menu() in one location.

add_theme_support( 'title-tag' );

add_theme_support( 'custom-logo' );


register_nav_menus(
    array(
        'primary' => __( 'Primary Menu', 'b4-msanchez' ),
        'footer' => __( 'Footer Menu', 'b4-msanchez' )
    
    )
);
?>