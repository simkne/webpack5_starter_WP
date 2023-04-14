<?php 

if ( ! function_exists( 'sik_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function sik_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'sik_styles',
			get_template_directory_uri() . '/assets/css/main.min.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'sik_styles' );

    //enque main script
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.min.js' , ['jquery'] , null , true );

	}

endif;

add_action( 'wp_enqueue_scripts', 'sik_styles' );

// Add block patterns
//require get_template_directory() . '/inc/block-patterns.php';



  /*
  * For developers: WordPress debugging mode.
  *
  * Change this to true to enable the display of notices during development.
  * It is strongly recommended that plugin and theme developers use WP_DEBUG
  * in their development environments.
  */
 
 define('WP_DEBUG', true); 
 define('WP_DEBUG_LOG', true); 
 define('WP_DEBUG_DISPLAY', false);  
 @ini_set('display_errors',0);
 define('DISALLOW_FILE_EDIT', true); 
 define('FS_METHOD','direct');
 //define( 'SAVEQUERIES', true);

?>