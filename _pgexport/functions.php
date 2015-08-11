<?php
if ( ! function_exists( 'flatinum_setup' ) ) :

function flatinum_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'flatinum', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu',      'flatinum' ),
        'social'  => __( 'Social Links Menu', 'flatinum' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // flatinum_setup

add_action( 'after_setup_theme', 'flatinum_setup' );


if ( ! function_exists( 'flatinum_init' ) ) :

function flatinum_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin*/
    /* This code will be replaced by register_post_type calls. */
    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin*/
    /* This code will be replaced by register_taxonomy calls. */
    /* Pinegrow generated Taxonomies End */

}
endif; // flatinum_setup

add_action( 'init', 'flatinum_init' );


if ( ! function_exists( 'flatinum_widgets_init' ) ) :

function flatinum_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin*/
    /* This code will be replaced by register_sidebar calls. */
    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'flatinum_widgets_init' );
endif;// flatinum_widgets_init



if ( ! function_exists( 'flatinum_customize_register' ) ) :

function flatinum_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */
    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'flatinum_customize_register' );
endif;// flatinum_customize_register


if ( ! function_exists( 'flatinum_enqueue_scripts' ) ) :
    function flatinum_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */
        /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */
        /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'flatinum_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin*/
/* Pinegrow generated Include Resources End */
?>