<?php
/**
 * Theme functions and defenitions.
 */

/**
 * Set up theme defaults here and register support for various features.
 */
if ( ! function_exists( 'rinzai_setup' ) ) {

    function rinzai_setup() {

        // Set the default content width.
        if ( ! isset( $content_width ) ) $content_width = 790;

        // Make the theme available for translations.
        load_theme_textdomain( 'rinzai', get_template_directory() . '/languages' );

        // Add editor stylesheet.
        add_editor_style( get_theme_file_uri( '/assets/css/admin/editor-style.css' ) );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'main' => __( 'Main Menu', 'rinzai' ),
            'social' => __( 'Social Menu', 'rinzai' ),
        ) );

        // Output valid HTML5 for search form, comment form, comments and gallery.
        add_theme_support( 'html5', array(
            'comment-form', 'gallery', 'caption',
        ) );

        // Add theme support for Custom Logo.
        add_theme_support( 'custom-logo', array(
            'height'      => 50,
            'width'       => 170,
            'flex-height' => true,
            'flex-width'  => true,
        ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Add support for the Pageviews plugin
		add_theme_support( 'pageviews' );

    }

}
add_action( 'after_setup_theme', 'rinzai_setup' );

/**
 * Register widget areas.
 */
function rinzai_widgets_init() {

    // Blog sidebar.
    register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'rinzai' ),
        'id' => 'blog-sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget uk-card uk-card-body uk-box-shadow-small uk-margin-medium-bottom %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="uk-h4">',
        'after_title' => '</h3>',
    ) );

    // Page sidebar.
    register_sidebar( array(
        'name' => __( 'Page Sidebar', 'rinzai' ),
        'id' => 'page-sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget uk-card uk-card-body uk-box-shadow-small uk-margin-medium-bottom %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="uk-h4">',
        'after_title' => '</h3>',
    ) );

}
add_action( 'widgets_init', 'rinzai_widgets_init' );

/**
 * Enqueue theme scripts and styles.
 */
function rinzai_scripts_and_styles() {

    // Enqueue theme stylesheet.
    wp_enqueue_style( 'rinzai-style', get_stylesheet_uri() );

    // Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

    // Enqueue theme script.
    wp_enqueue_script( 'uikit-script', get_theme_file_uri( '/assets/js/uikit.js' ), array( 'jquery' ) );
    wp_enqueue_script( 'uikit-icons-script', get_theme_file_uri( '/assets/js/uikit-icons.js' ), array( 'uikit-script' ) );
    wp_enqueue_script( 'rinzai-script', get_theme_file_uri( '/assets/js/rinzai.js' ), array( 'uikit-icons-script' ), true, true );

    // Comment reply script.
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'rinzai_scripts_and_styles' );

/**
 * Theme template functions.
 */
require 'inc/rinzai-template-functions.php';

/**
 * Theme hooks.
 */
require 'inc/rinzai-hooks.php';

/**
 * Require Navbar Walker class.
 * Require Comments Walker class.
 * Require Offcanvas Nav Walker class.
 *
 * Classes generate comments markup, navbar markup and offcanvas nav markup.
 */
require 'inc/Rinzai_Navbar_Walker.php';
require 'inc/Rinzai_Comments_Walker.php';
require 'inc/Rinzai_Offcanvas_Nav_Walker.php';
