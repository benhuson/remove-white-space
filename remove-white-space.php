<?php

/*
Plugin Name: Remove White Space
Plugin URI: http://www.benhuson.co.uk/wordpress-plugins/remove-white-space
Description: Removes white space from wp_list_pages and wp_list_categories (nice for IE6).
Version: 1.0
Author: Ben Huson
Author URI: http://www.benhuson.co.uk
Minimum WordPress Version Required: 2.8
Tested up to: 3.4.1
License: GPL
*/

if ( ! function_exists( 'remove_white_space' ) ) {

	function remove_white_space( $content ) {
		return str_replace( array( "\n", "\r", "\t" ), "", $content );
	}
	
	add_filter( 'wp_list_pages', 'remove_white_space' );
	add_filter( 'wp_list_categories', 'remove_white_space' );
}

?>