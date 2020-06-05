<?php
/**
 * InsightCustom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package InsightCustom
 */
if ( ! function_exists( 'insightcustom_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function insightcustom_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on InsightCustom, use a find and replace
		 * to change 'insightcustom' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'insightcustom', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		// This theme uses wp_nav_menu() in multiple locations.
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main Menu', 'insightCustom' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'insightCustom' ),
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
		add_theme_support( 'custom-background', apply_filters( 'insightcustom_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'insightcustom_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function insightcustom_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'insightcustom_content_width', 640 );
}
add_action( 'after_setup_theme', 'insightcustom_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function insightcustom_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'insightcustom' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'insightcustom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'insightcustom_widgets_init' );
/*********************************************************
Add custom admin login screen styles
*********************************************************/
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
/*********************************************************
Add a custom excerpt length
*********************************************************/
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
/*********************************************************
Advanced Custom Fields Customizations
*********************************************************/
require_once("app/acf/acf.php");
/********************************************
Require login by email address
********************************************/
require_once("app/login-by-email.php");
/********************************************
 Add in our custom Gutenberg blocks
********************************************/
require_once("inc/acf-gutenblocks.php");
/*********************************************
Limit Login Attempts
*********************************************/
require_once("app/limit-login.php");
/********************************************
Create a custom archive by year instead of
by month like the default widget creates
********************************************/
require_once("app/custom-archive.php");
/********************************************
 Add in our custom post types and breadcrumbs
********************************************/
require_once("inc/portfolio/custom-post-type.php");
require_once("inc/portfolio/custom-cats.php");
/********************************************
 Remove the WordPress emojis
********************************************/
require_once("app/remove-emoji.php");
require_once("app/custom-login-url.php");
/*********************************************************
Enqueue scripts and styles
*********************************************************/
function insightcustom_scripts() {
	wp_enqueue_style( 'insightcustom-style', get_stylesheet_uri() );
	wp_enqueue_style( 'insight-custom-style', get_stylesheet_directory_uri() . '/resources/css/style.min.css');
	wp_enqueue_style( 'titillium-web', 'https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700,900&display=swap', false );
	wp_enqueue_script( 'flickity', get_template_directory_uri() . '/resources/assets/flickity/flickity.pkgd.min.js' );
	wp_enqueue_script( 'customizer', get_template_directory_uri() . '/resources/js/customizer.js' );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/resources/js/custom.min.js' );
	wp_enqueue_script( 'vendor', get_template_directory_uri() . '/resources/js/vendor.min.js' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'insightcustom_scripts' );
/*********************************************************
Custom template tags for this theme
*********************************************************/
require get_template_directory() . '/app/template-tags.php';
require get_template_directory() . '/app/custom-header.php';
require get_template_directory() . '/app/customizer.php';
/*********************************************************
Functions which enhance the theme by hooking into WordPress
*********************************************************/
require get_template_directory() . '/app/template-functions.php';
