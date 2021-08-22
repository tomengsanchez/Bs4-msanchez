<?php
/**
 * functions and definitions
 *
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$bs4_inc_dir = 'inc';

// Array of files to include.
$bs4_incs = array(
	'/enqueue.php', //for enqeue
	'/theme_support.php', // for add_theme_support
	'/class-wp-bootstrap-navwalker.php' // navwalker i Used Navwalker From Github
);

// Load WooCommerce functions if WooCommerce is activated.


// Include files.
foreach ( $bs4_incs as $file ) {
	require_once get_theme_file_path( $bs4_inc_dir . $file );
}
