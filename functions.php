<?php
/**
 * saybers functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package saybers
 */

if ( ! function_exists( 'saybers_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function saybers_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on saybers, use a find and replace
		 * to change 'saybers' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'saybers', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

        // Title Name Alteration
        require get_template_directory( ).'/inc/minor-changes.php';

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
        add_image_size( 'homepage-thumb', 450, 300, true );
        add_image_size( 'portfolio-thumb', 800, 600, true );
        add_image_size( 'team-thumb', 257, 380, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'saybers' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'saybers_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
		'height'      => 40,
		'width'       => 40,
		'flex-height' => true,
		) );
	}
endif;

add_action( 'after_setup_theme', 'saybers_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function saybers_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'saybers_content_width', 640 );
}
add_action( 'after_setup_theme', 'saybers_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function saybers_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'saybers' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'saybers' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'saybers_widgets_init' );
/*function saybers_theme_setup(){
  add_theme_support( 'title-tag' );
  add_theme_support( 'custom-logo' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'automatic-feed-links' );
  add_image_size( 'home-featured', 680, 400, array( center ,center ) );
  
  register_nav_menus( array( 
      'primary'     => __( 'Primary Menu', 'saybers')
  ) );
};*/
function saybers_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('saybers-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js');
    wp_enqueue_script('saybers-jquery.magnific-popup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js');
    wp_enqueue_script('saybers-owl.carousel', get_template_directory_uri().'/assets/js/owl.carousel.js');
    wp_enqueue_script('saybers-imagesloaded', get_template_directory_uri().'/assets/js/imagesloaded.min.js');
    wp_enqueue_script('saybers-isotope', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js');
    wp_enqueue_script('saybers-validator', get_template_directory_uri().'/assets/js/validator.js');
    wp_enqueue_script('saybers-contact', get_template_directory_uri().'/assets/js/contact.js');
    wp_enqueue_script('saybers-jquery-waypoints', get_template_directory_uri().'/assets/js/jquery.waypoints.js');
    wp_enqueue_script('saybers-jquery-counterup', get_template_directory_uri().'/assets/js/jquery.counterup.min.js');
    wp_enqueue_script('saybers-scrolltopcontrol', get_template_directory_uri().'/assets/js/scrolltopcontrol.js');
    wp_enqueue_script('saybers-main', get_template_directory_uri().'/assets/js/main.js');
}
add_action('wp_enqueue_scripts','saybers_scripts');

// CUSTOM POSTS TYPES

require get_template_directory( ).'/inc/portfolio.php';
require get_template_directory( ).'/inc/testimonial.php';
require get_template_directory( ).'/inc/team.php';
require get_template_directory( ).'/inc/plugins/kirki/kirki.php';
require get_template_directory( ).'/inc/kirki-config.php';
require get_template_directory( ).'/inc/service.php';
// TGM plugin activation
require_once get_template_directory( ).'/inc/class-tgm-plugin-activation.php';
require get_template_directory( ).'/inc/install-plugins.php';

// One click demo import
require_once get_template_directory( ).'/inc/demo-imports.php';
