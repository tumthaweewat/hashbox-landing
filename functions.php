<?php
/**
 * Hashbox Studio Theme Functions
 *
 * @package Hashbox_Studio
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup
 */
function hashbox_theme_setup() {
    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // HTML5 support for search form, comment form, etc.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'hashbox-studio' ),
    ) );
}
add_action( 'after_setup_theme', 'hashbox_theme_setup' );

/**
 * Enqueue styles and scripts
 */
function hashbox_enqueue_assets() {
    // Google Fonts: Space Grotesk + DM Sans
    wp_enqueue_style(
        'hashbox-google-fonts',
        'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=DM+Sans:wght@300;400;500;600&display=swap',
        array(),
        null
    );

    // Preconnect hints for Google Fonts
    add_filter( 'wp_resource_hints', 'hashbox_resource_hints', 10, 2 );

    // Theme stylesheet
    wp_enqueue_style(
        'hashbox-style',
        get_stylesheet_uri(),
        array( 'hashbox-google-fonts' ),
        wp_get_theme()->get( 'Version' )
    );

    // Theme script
    wp_enqueue_script(
        'hashbox-script',
        get_template_directory_uri() . '/js/script.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'hashbox_enqueue_assets' );

/**
 * Add preconnect resource hints for Google Fonts
 */
function hashbox_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin' => false,
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $urls;
}

/**
 * Fallback menu callback — renders static nav links when no WP menu is assigned
 */
function hashbox_fallback_menu() {
    ?>
    <ul>
        <li><a href="#services" class="nav-link">Services</a></li>
        <li><a href="#digital-workforce" class="nav-link">Digital Workforce</a></li>
        <li><a href="#portfolio" class="nav-link">Work</a></li>
        <li><a href="#about" class="nav-link">About</a></li>
        <li><a href="#contact" class="nav-link">Contact</a></li>
    </ul>
    <?php
}

/**
 * Fallback mobile menu callback
 */
function hashbox_fallback_mobile_menu() {
    ?>
    <ul>
        <li><a href="#services" class="mobile-link">Services</a></li>
        <li><a href="#digital-workforce" class="mobile-link">Digital Workforce</a></li>
        <li><a href="#portfolio" class="mobile-link">Work</a></li>
        <li><a href="#about" class="mobile-link">About</a></li>
        <li><a href="#contact" class="mobile-link">Contact</a></li>
    </ul>
    <?php
}
