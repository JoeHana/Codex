<?php
/**
 * Codex Class
 *
 * @package  codex
 * @author   ANEX
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Codex' ) ) {

	/**
	 * The Codex class
	 */
	class Codex {

		/**
		 * Setup Class
		 *
		 * @since 1.0.0
		 */
		public function __construct() {
			
			// Setup Theme (load textdomain, add theme support,...)
			add_action( 'after_setup_theme',	array( $this, 'setup' ),			10 );
			
			// Load Assets
			add_action( 'wp_enqueue_scripts',	array( $this, 'assets' ),			10 );

			// Include Head Meta
			add_action( 'wp_head',				array( $this, 'head_meta' ),		1 );
		
			// Init Widget Areas
			add_action( 'widgets_init',			array( $this, 'widget_areas' ),		10 );
			
		}
		 
		/**
		 * Sets up theme defaults and registers support for various WordPress features.
		 *
		 * Note that this function is hooked into the after_setup_theme hook, which
		 * runs before the init hook. The init hook is too late for some features, such
		 * as indicating support for post thumbnails.
		 *
		 * @since 1.0.0
		 */
		 public function setup() {
			 
			/**
			 * Set the content width based on the theme's design and stylesheet.
			 *
			 * @since 1.0.0
			 */
			
			if ( ! isset( $content_width ) )
				$content_width = 1400;
			 
			/**
			 * Load Localisation files.
			 *
			 * Note: the first-loaded translation file overrides any following ones if the same translation is present.
			 */

			// Loads wp-content/languages/themes/kolarik-de_DE.mo.
			load_theme_textdomain( 'codex', trailingslashit( WP_LANG_DIR ) . 'themes/' );

			// Loads wp-content/themes/kolarik-child/languages/de_DE.mo.
			load_theme_textdomain( 'codex', get_stylesheet_directory() . '/languages' );

			// Loads wp-content/themes/kolarik/languages/de_DE.mo.
			load_theme_textdomain( 'codex', get_template_directory() . '/languages' );
							
			/**
			 * WordPress Core Features
			 */
		
			// Add custom menus
			add_theme_support( 'menus' );
			
			// Add custom widgets
			add_theme_support( 'widgets' );
			
			// Add default posts and comments RSS feed links to head
			add_theme_support( 'automatic-feed-links' );
			
			// Add post thumbnails
			add_theme_support( 'post-thumbnails' );
			
			// Add custom background
			add_theme_support( 'custom-background', array( 'default-color' => 'ffffff', 'default-image' => '' ) );
			
			// Add html5 support
			add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
			
			// Add support for title tag
			add_theme_support( 'title-tag' );
			
			// Add support for custom logo
			add_theme_support( 'custom-logo', array(
				'width'       => 100,
				'height'      => 100,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			) );
		
			//Disable Admin Bar
			add_filter( 'show_admin_bar', '__return_false' );

		}
		
		/**
		 * Assets
		 *
		 * @since 1.0.0
		 */
		public function assets() {
			
			/**
			 * Styles
			 */
			
			wp_enqueue_style( 'open-sans',			'//fonts.googleapis.com/css?family=Open+Sans:400,300',															false, false,			'all' );
		
			wp_enqueue_style( 'ionicons',			'//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',											false, '2.0.1',			'all' );
			wp_enqueue_style( 'animate',			'//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css',											false, '3.5.2',			'all' );
			
			wp_enqueue_style( 'uikit',				'//cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/css/uikit.min.css',												false, '2.26.4',		'all' );
			wp_enqueue_style( 'uikit-tooltip',		'//cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/css/components/tooltip.min.css',									false, '2.26.4',		'all' );
			wp_enqueue_style( 'uikit-accordion',	'//cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/css/components/accordion.min.css',								false, '2.26.4',		'all' );

			wp_enqueue_style( 'mmenu',				'//cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/5.6.5/css/jquery.mmenu.all.css',									false, '5.6.5',			'all' );
			wp_enqueue_style( 'mmenu-widescreen',	'//cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/5.6.5/extensions/widescreen/jquery.mmenu.widescreen.min.css',	false, '5.6.5',			'all and (min-width: 1280px)' );
			
			wp_enqueue_style( 'codex',				get_stylesheet_directory_uri() . '/style.css',																	false, THEME_VERSION,	'all' );
			
//			$color = get_theme_mod( 'my-custom-color' ); //E.g. #FF0000
//			
//			$custom_css = "
//				.mycolor{
//					background: {$color};
//				}";
//				
//			wp_add_inline_style( 'kolarik-style', $custom_css );
			
			/**
			 * Scripts
			 */
			
			// Enqueue jQuery
			wp_enqueue_script( 'jquery' );
			
			wp_enqueue_script( 'uikit',				'//cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/js/uikit.min.js',											array( 'jquery' ),	'2.26.4',		true );
			wp_enqueue_script( 'uikit-accordion',	'//cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/js/components/accordion.min.js',								array( 'jquery' ),	'2.26.4',		true );
			
			wp_enqueue_script( 'mmenu',				'//cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/5.6.5/js/jquery.mmenu.all.min.js',							array( 'jquery' ),	'5.6.5',		false );
			wp_enqueue_script( 'mmenu-wordpress',	'//cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/5.6.5/wrappers/wordpress/jquery.mmenu.wordpress.min.js',		array( 'mmenu' ),	'5.6.5',		true );
			
			// Enqueue Custom Javascripts 
			wp_enqueue_script( 'codex',				get_template_directory_uri() . '/assets/js/init.js',														array( 'jquery' ),	THEME_VERSION,	true );
		
		}
		
		/**
		 * head_meta()
		 * Adds additional meta data to the head area (eg. viewport meta)
		 *
		 * @since	1.0.0
		 */
		public function head_meta() {
			
			echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">';
			
		}
		
		/**
		 * kolarik_widget_areas()
		 * Setup Widget Areas Array
		 *
		 * @since	1.0.0
		 */
		public function widget_areas() {
				
			$widget_areas = array(

				// Sidebar Position
				'aside' => array(
					'name' 			=> __( 'Aside', 'codex' ),
					'description' 	=> __( 'This is the primary sidebar to display the same widgets on all pages.', 'codex' ),
					'id' 			=> 'aside',
					'before_widget' => '<div class="widget-wrap %2$s-wrap"><div id="%1$s" class="widget %2$s">',
					'after_widget' 	=> '</div></div>',
					'before_title' 	=> '<h4 class="title title-widget">',
					'after_title' 	=> '</h4>',
					'position'		=> 100,
					'grid'			=> false
				)
				
			);
			
			// filter widget areas
			$widget_areas = apply_filters( 'codex_widget_areas', $widget_areas );

			// loop through array and register sidebar
			foreach( $widget_areas as $widget_area )
				register_sidebar( $widget_area );
		
		}
		
		/**
		 * Remove WP AdminBar Margins
		 */
		public function wp_admin_bar() {
			
			remove_action( 'wp_head', '_admin_bar_bump_cb', 100 );
			
		}

	}

}

return new Codex();