<?php
/**
 * Greg Stuart Urban Design theme functions and definitions
 */

if ( ! defined( 'GREGSTUART_URBANDESIGN_VERSION' ) ) {
    // Replace with your theme's version number.
    define( 'GREGSTUART_URBANDESIGN_VERSION', '1.0.0' );
}

if ( ! function_exists( 'gregstuart_urbandesign_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function gregstuart_urbandesign_setup() {
        // Make theme available for translation.
        load_theme_textdomain( 'gregstuart-urbandesign', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Register navigation menus.
        register_nav_menus(
            array(
                'primary_menu' => esc_html__( 'Primary Menu', 'gregstuart-urbandesign' ),
                // You can register other menus here if needed (e.g., footer_menu)
            )
        );

        // Switch default core markup for search form, comment form, and comments
        // to output valid HTML5.
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

        // Enable support for Custom Logo.
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 100, // Adjust as needed
                'width'       => 300, // Adjust as needed
                'flex-height' => true,
                'flex-width'  => true,
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'gregstuart_urbandesign_setup' );

/**
 * Enqueue scripts and styles.
 */
function gregstuart_urbandesign_scripts_styles() {
    // Enqueue Google Fonts (example - replace with your chosen fonts)
    // wp_enqueue_style( 'gregstuart-urbandesign-google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@700&display=swap', array(), null );

    // Enqueue main stylesheet.
    wp_enqueue_style( 'gregstuart-urbandesign-style', get_stylesheet_uri(), array(), GREGSTUART_URBANDESIGN_VERSION );

    // Enqueue a JS file if needed (e.g., for dropdowns or other interactions)
    // wp_enqueue_script( 'gregstuart-urbandesign-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), GREGSTUART_URBANDESIGN_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'gregstuart_urbandesign_scripts_styles' );


/**
 * Custom Nav Walker (Optional - from your Fine Arts theme)
 * This adds 'nav-link' and 'nav-link-active' classes to your menu items.
 * If you want this, copy the GregStuart_Nav_Walker class from your
 * Fine Arts theme's functions.php and paste it here.
 * Make sure to update its name if you want (e.g., GregStuart_UrbanDesign_Nav_Walker)
 * and call it in your wp_nav_menu() in header.php if you use it.
 */
// class GregStuart_UrbanDesign_Nav_Walker extends Walker_Nav_Menu { ... }


?>