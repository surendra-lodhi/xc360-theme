<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/*
 * Custom Theme Options
 */
if( function_exists('acf_add_options_page') ) {
    // Xc360 General Settings
    $general_settings   = array(
                                'page_title' 	=> __( 'Xc360 Settings', 'xc360' ),
                                'menu_title'	=> __( 'Xc360 Settings', 'xc360' ),
                                'menu_slug' 	=> 'xc360-general-settings',
                                'capability'	=> 'edit_posts',
                                'redirect'      => false,
                                'icon_url'      => 'dashicons-admin-customizer'
                            );
    acf_add_options_page( $general_settings );
}