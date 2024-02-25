<?php

/**
 * Bismillah functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bismillah
 * @since v1.0.5
 */

if ( ! function_exists( 'bismillah_theme_support' ) ) {
	function bismillah_theme_support() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'wp-block-styles' );
	}
}

add_action( 'after_setup_theme', 'bismillah_theme_support' );
