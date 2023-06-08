<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TT1_Blocks
 * @since 0.1
 */

if ( ! function_exists( 'tt1_blocks_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function tt1_blocks_setup() {
		// Enqueue editor styles.
		add_editor_style(
			array(
				'./assets/css/blocks.css',
				'./assets/css/style-shared.css',
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
}
add_action( 'after_setup_theme', 'tt1_blocks_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 0.1
 *
 * @return void
 */
function tt1_blocks_enqueue_styles() {
	wp_enqueue_style( 'tt1-blocks-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'tt1-blocks-style-shared', get_template_directory_uri() . '/assets/css/style-shared.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'tt1-blocks-blocks', get_template_directory_uri() . '/assets/css/blocks.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'tt1_blocks_enqueue_styles' );
