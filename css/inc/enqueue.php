<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// Custom scripts
		wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/scripts.js', array(), true);
		wp_enqueue_script( 'matchHeight-script', get_template_directory_uri() . '/js/matchHeight.js', array(), true);

		wp_enqueue_script( 'gsap-functions', get_template_directory_uri() . '/js/gsap/gsap-functions.js', array(), false, true);	
		wp_enqueue_script( 'gsap-core-script', get_template_directory_uri() . '/js/gsap/gsap-core.js', array(), false, true);
		// wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min', array(), false, true );
		
		wp_enqueue_script( 'drawSVG', get_template_directory_uri() . '/js/gsap/DrawSVGPlugin.js', array(), false, true); 
		wp_enqueue_script( 'CSSPlugin', get_template_directory_uri() . '/js/gsap/CSSPlugin.js', array(), false, true); 
		
			
	}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
