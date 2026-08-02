<?php
/**
 * Archangel Cosplays Theme
 * Functions and definitions
 * 
 * @package Archangel_Cosplays
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ARCHANGEL_VERSION', '1.0.0' );
define( 'ARCHANGEL_DIR', get_template_directory() );
define( 'ARCHANGEL_URI', get_template_directory_uri() );

/**
 * Sets up theme defaults and registers support for various WordPress features
 */
function archangel_setup() {
	// Make theme available for translation
	load_theme_textdomain( 'archangel-cosplays', ARCHANGEL_DIR . '/languages' );

	// Add support for featured images
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'portfolio-grid', 400, 400, true );
	add_image_size( 'portfolio-single', 800, 600, true );
	add_image_size( 'blog-featured', 800, 400, true );

	// Add support for custom logo
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// Add support for title tag
	add_theme_support( 'title-tag' );

	// Add support for HTML5 markup
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add support for selective refresh
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Register navigation menus
	register_nav_menus(
		array(
			'primary'   => esc_html__( 'Primary Menu', 'archangel-cosplays' ),
			'footer'    => esc_html__( 'Footer Menu', 'archangel-cosplays' ),
			'social'    => esc_html__( 'Social Links Menu', 'archangel-cosplays' ),
		)
	);
}
add_action( 'after_setup_theme', 'archangel_setup' );

/**
 * Enqueue scripts and styles
 */
function archangel_enqueue_scripts() {
	// Enqueue main stylesheet
	wp_enqueue_style(
		'archangel-style',
		ARCHANGEL_URI . '/style.css',
		array(),
		ARCHANGEL_VERSION
	);

	// Enqueue main JavaScript
	wp_enqueue_script(
		'archangel-script',
		ARCHANGEL_URI . '/assets/js/main.js',
		array( 'jquery' ),
		ARCHANGEL_VERSION,
		true
	);

	// Pass data to JavaScript
	wp_localize_script(
		'archangel-script',
		'archangelData',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'archangel-nonce' ),
		)
	);

	// Enqueue comment script if needed
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'archangel_enqueue_scripts' );

/**
 * Set the content width
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1200;
}

/**
 * Register widget areas
 */
function archangel_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Primary Sidebar', 'archangel-cosplays' ),
			'id'            => 'primary-sidebar',
			'description'   => esc_html__( 'Main sidebar', 'archangel-cosplays' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Area', 'archangel-cosplays' ),
			'id'            => 'footer-area',
			'description'   => esc_html__( 'Footer widgets', 'archangel-cosplays' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'archangel_widgets_init' );

/**
 * Filter the excerpt length
 */
function archangel_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'archangel_excerpt_length' );

/**
 * Filter the excerpt more text
 */
function archangel_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'archangel_excerpt_more' );

/**
 * Remove unnecessary WordPress stuff
 */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );

/**
 * Add custom body classes
 */
function archangel_body_classes( $classes ) {
	// Add a class if it's a single post or page
	if ( is_singular() ) {
		$classes[] = 'singular';
	}

	// Add a class if it's an archive page
	if ( is_archive() ) {
		$classes[] = 'archive';
	}

	return $classes;
}
add_filter( 'body_class', 'archangel_body_classes' );
