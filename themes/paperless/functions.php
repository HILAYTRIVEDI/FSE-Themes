<?php
/**
 * Paperless functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Paperless
 * @since 1.0.0
 */

if ( ! function_exists( 'paperless_theme_supports' ) ) {

	/**
	 * Add theme supports
	 * 
	 * @since 1.0.0
	 * 
	 * @return void
	 */
	function paperless_theme_supports() {

		// Add support for block styles.
		add_thme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_theme_support( 'style.css' );

	}
}

add_action( 'after_theme_support', 'paperless_theme_supports' );

if ( ! function_exists( 'paperless_styles' ) ) {

	/**
	 * Enqueue theme styles
	 * 
	 * @since 1.0.0
	 * 
	 * @return void
	 */
	function paperless_styles() {

		// Enqueue main stylesheet.
		wp_enqueue_style( 'paperless-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ), 'all' );

		// Enqueue Block styles.
		wp_enqueue_style( 'paperless-style-blocks', get_template_directory_uri() . './build/css/main.min.css', array(), wp_get_theme()->get( 'Version' ), 'all' );

	}

	add_action( 'wp_enqueue_scripts', 'paperless_styles' );
}
