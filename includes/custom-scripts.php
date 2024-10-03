<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/*
 * Enqueue scripts and styles for the back end.
 */
function xc360_admin_scripts() {
    global $wp_version;
    // Load our admin stylesheet.
    wp_enqueue_style( 'xc360-admin-style', get_template_directory_uri() . '/css/admin-style.css' );
    // Load our admin script.
    wp_enqueue_script( 'xc360-admin-script', get_template_directory_uri() . '/js/admin-script.js' );
    //localize admin script
    wp_localize_script( 'xc360-admin-script', 'XC360ADMIN', array(
                                                                    'ajaxurl' => admin_url('admin-ajax.php', ( is_ssl() ? 'https' : 'http')),
                                                                ));
    wp_enqueue_media();
}
/*
 * Enqueue scripts and styles for the front end.
 */
function xc360_public_scripts() {
    
    // Load our bootstrap.min stylesheet.
    wp_enqueue_style( 'bootstrap-min-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), NULL );
    // Load our awesome-all stylesheet.
    wp_enqueue_style( 'font-awesome-all-style', get_template_directory_uri() . '/css/font-awesome-all.min.css', array(), NULL );
    // Load our slick stylesheet.
    wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/css/slick.css', array(), NULL );
    // Load our main stylesheet.
    wp_enqueue_style( 'xc360-style', get_stylesheet_uri(), array(), NULL );
    // Load our public style stylesheet.
    wp_enqueue_style( 'xc360-public-style', get_template_directory_uri() . '/css/public-style.css', array(), NULL );


    // Load main jquery
    wp_enqueue_script( 'jquery', array(), NULL );
    // Load ootstrap-bundle-min script
    wp_enqueue_script( 'bootstrap-bundle-min', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), NULL );
    // Load slick-min script
    wp_enqueue_script( 'slick-min', get_template_directory_uri() . '/js/slick.min.js', array(), NULL );
    // Load xc360-scripts.js script
    wp_enqueue_script( 'xc360-scripts', get_template_directory_uri() . '/js/scripts.js', array(), NULL );
    // Load public script
    wp_enqueue_script( 'xc360-public-script', get_template_directory_uri() . '/js/public-script.js', array(), NULL );
    //localize public script
    wp_localize_script( 'xc360-public-script', 'XC360PUBLIC', array(
                                                                    'ajaxurl' => admin_url('admin-ajax.php', ( is_ssl() ? 'https' : 'http')),
                                                                ));
}
/*
 * Enqueue scripts and styles for the admin login screen.
 */
function xc360_login_stylesheet() {
    wp_enqueue_style( 'xc360-login-style', get_stylesheet_directory_uri() . '/css/login-style.css' );
}
//add action to load scripts and styles for the back end
add_action( 'admin_enqueue_scripts', 'xc360_admin_scripts' );
//add action load scripts and styles for the front end
add_action( 'wp_enqueue_scripts', 'xc360_public_scripts' );
//add action load scripts and styles for admin login screen
add_action( 'login_enqueue_scripts', 'xc360_login_stylesheet' );