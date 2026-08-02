<?php
/**
 * Functions snippet: copy the contents of this file into your theme's functions.php
 * or include it and adapt to your project. It registers menus, enqueues styles/scripts, and sets theme supports.
 * Note: For staging/local preview we reference Wix-hosted fonts via CSS @font-face. For production, verify licensing or
 * replace fonts with licensed/Google fonts.
 */

// Theme supports and menus
function archangel_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'archangel' ),
        'footer'  => __( 'Footer Menu', 'archangel' ),
    ) );
}
add_action( 'after_setup_theme', 'archangel_setup' );

// Enqueue styles and scripts
function archangel_enqueue_assets() {
    // Base stylesheet
    wp_enqueue_style( 'archangel-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

    // NOTE: Wix-hosted fonts are referenced via @font-face in theme-updates/style/screen.css for preview.
    // If you prefer to enqueue Google Fonts instead, uncomment and modify the block below.
    /*
    $fonts = 'family=Montserrat:300,400,700|Open+Sans:300,400,700&display=swap';
    wp_enqueue_style( 'archangel-google-fonts', 'https://fonts.googleapis.com/css2?' . $fonts, array(), null );
    */

    // Elementor and WPForms will enqueue their own assets when active
}
add_action( 'wp_enqueue_scripts', 'archangel_enqueue_assets' );

// Add default image sizes (adjust as needed)
add_image_size( 'hero', 1600, 720, true );
add_image_size( 'gallery-thumb', 400, 300, true );
