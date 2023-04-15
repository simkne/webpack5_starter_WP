<?php

if (!function_exists('sik_styles')) :

	/**
	 * Enqueue styles.
	 */
	function sik_styles()
	{
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get('Version');

		$version_string = is_string($theme_version) ? $theme_version : false;
		wp_register_style(
			'sik_styles',
			get_template_directory_uri() . '/assets/css/main.min.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style('sik_styles');

		//enque main script
		wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.min.js', ['jquery'], null, true);
	}

endif;

add_action('wp_enqueue_scripts', 'sik_styles');



if (!function_exists('sik_theme_support')) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 */
	function sik_theme_support()
	{

		// Add support for block styles.
		add_theme_support('align-wide');
		add_theme_support('wp-block-styles');

		// Enqueue editor styles.
		add_editor_style('style.css');

		//default features
		//		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');

		add_theme_support('menus');

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		
		add_theme_support(
			'html5',
			[
				'search-form',
				'gallery',
				'caption',
				'script',
				'style',
			]
		);
	}

endif;

add_action('after_setup_theme', 'sik_theme_support');


/*
* register menus
*/

function register_menus()
{
	register_nav_menus(
		array(
			'main-menu' => 'Main Menu',
			'footer-menu' => 'Footer Menu',
		)
	);
}
add_action('init', 'register_menus');

// Add block patterns
//require get_template_directory() . '/inc/block-patterns.php';



/*
  * For developers: WordPress debugging mode.
  *
  * Change this to true to enable the display of notices during development.
  * It is strongly recommended that plugin and theme developers use WP_DEBUG
  * in their development environments.
  */

define('DISALLOW_FILE_EDIT', true);
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);
/*   define('FS_METHOD','direct'); */
 //define( 'SAVEQUERIES', true);
