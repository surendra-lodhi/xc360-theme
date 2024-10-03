<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/**
 * Register Case Study Types
 */
function xc360_register_post_types() {
    $custompost_labels = array(
                            'name'               => _x( 'Case Study', 'case_study', 'xc360' ),
                            'singular_name'      => _x( 'Case Study', 'case_study', 'xc360' ),
                            'menu_name'          => _x( 'Case Study', 'case_study', 'xc360' ),
                            'name_admin_bar'     => _x( 'Case Study', 'case_study', 'xc360' ),
                            'add_new'            => _x( 'Add New', 'case_study', 'xc360' ),
                            'add_new_item'       => __( 'Add New Case Study', 'xc360' ),
                            'new_item'           => __( 'New Case Study', 'xc360' ),
                            'edit_item'          => __( 'Edit Case Study', 'xc360' ),
                            'view_item'          => __( 'View Case Study', 'xc360' ),
                            'all_items'          => __( 'All Case Study', 'xc360' ),
                            'search_items'       => __( 'Search Case Study', 'xc360' ),
                            'parent_item_colon'  => __( 'Parent Case Study:', 'xc360' ),
                            'not_found'          => __( 'No Case Study Found.', 'xc360' ),
                            'not_found_in_trash' => __( 'No Case Study Found In Trash.', 'xc360' ),
                        );

    $custompost_args = array(
                            'labels'             => $custompost_labels,
                            'public'             => true,
                            'publicly_queryable' => true,
                            'show_ui'            => true,
                            'show_in_menu'       => true,
                            'query_var'          => true,
                            'rewrite'            => array( 'slug'=> 'casestudy', 'with_front' => false ),
                            'capability_type'    => 'post',
                            'has_archive'        => false,
                            'hierarchical'       => false,
                            'menu_position'      => null,
                            'menu_icon'          => 'dashicons-pressthis',
                            'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' )
                        );

    register_post_type( XC360_CASE_STUDY_POST_TYPE, $custompost_args );
    
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
                    'name'              => _x( 'Categories', 'taxonomy general name', 'xc360'),
                    'singular_name'     => _x( 'Category', 'taxonomy singular name','xc360' ),
                    'search_items'      => __( 'Search Categories','xc360' ),
                    'all_items'         => __( 'All Categories','xc360' ),
                    'parent_item'       => __( 'Parent Category','xc360' ),
                    'parent_item_colon' => __( 'Parent Category:','xc360' ),
                    'edit_item'         => __( 'Edit Category' ,'xc360'), 
                    'update_item'       => __( 'Update Category' ,'xc360'),
                    'add_new_item'      => __( 'Add New Category' ,'xc360'),
                    'new_item_name'     => __( 'New Category Name' ,'xc360'),
                    'menu_name'         => __( 'Categories' ,'xc360')
                );

    $args = array(
                    'hierarchical'      => true,
                    'labels'            => $labels,
                    'show_ui'           => true,
                    'show_admin_column' => true,
                    'query_var'         => true,
                    'rewrite'           => array( 'slug'=> 'custom_tax' )
                );
	
    // register_taxonomy( XC360_case_study_POST_TAX, XC360_case_study_POST_TYPE, $args );
    //flush rewrite rules
    flush_rewrite_rules();
}
//add action to create Case Study type
add_action( 'init', 'xc360_register_post_types' );




function testimonial_posttype() {
    /*
     * The $labels describes how the post type appears.
     */
    $labels = array(
        'name'          => 'Testimonials', // Plural name
        'singular_name' => 'Testimonial'   // Singular name
    );

    /*
     * The $supports parameter describes what the post type supports
     */
    $supports = array(
        'title',        // Post title
        'editor',       // Post content
        'excerpt',      // Allows short description
        'author',       // Allows showing and choosing author
        'thumbnail',    // Allows feature images
        'comments',     // Enables comments
        'trackbacks',   // Supports trackbacks
        'revisions',    // Shows autosaved version of the posts
        'custom-fields' // Supports by custom fields
    );

    /*
     * The $args parameter holds important parameters for the custom post type
     */
    $args = array(
        'labels'              => $labels,
        'description'         => 'Post type post testimonial', // Description
        'supports'            => $supports,
        'taxonomies'          => array( 'category', 'post_tag' ), // Allowed taxonomies
        'hierarchical'        => false, // Allows hierarchical categorization, if set to false, the Custom Post Type will behave like Post, else it will behave like Page
        'public'              => true,  // Makes the post type public
        'show_ui'             => true,  // Displays an interface for this post type
        'show_in_menu'        => true,  // Displays in the Admin Menu (the left panel)
        'show_in_nav_menus'   => true,  // Displays in Appearance -> Menus
        'show_in_admin_bar'   => true,  // Displays in the black admin bar
        'menu_position'       => 5,     // The position number in the left menu
        'menu_icon'           => true,  // The URL for the icon used for this post type
        'can_export'          => true,  // Allows content export using Tools -> Export
        'has_archive'         => true,  // Enables post type archive (by month, date, or year)
        'exclude_from_search' => false, // Excludes posts of this type in the front-end search result page if set to true, include them if set to false
        'publicly_queryable'  => true,  // Allows queries to be performed on the front-end part if set to true
        'capability_type'     => 'post' // Allows read, edit, delete like “Post”
    );

    register_post_type('testimonials', $args); //Create a post type with the slug is ‘product’ and arguments in $args.
}
add_action('init', 'testimonial_posttype');


// Team post type start here
function team_posttype() {
    /*
     * The $labels describes how the post type appears.
     */
    $labels = array(
        'name'          => 'Teams', // Plural name
        'singular_name' => 'Team'   // Singular name
    );

    /*
     * The $supports parameter describes what the post type supports
     */
    $supports = array(
        'title',        // Post title
        'editor',       // Post content
        'excerpt',      // Allows short description
        'author',       // Allows showing and choosing author
        'thumbnail',    // Allows feature images
        'comments',     // Enables comments
        'trackbacks',   // Supports trackbacks
        'revisions',    // Shows autosaved version of the posts
        'custom-fields' // Supports by custom fields
    );

    /*
     * The $args parameter holds important parameters for the custom post type
     */
    $args = array(
        'labels'              => $labels,
        'description'         => 'Post type post team', // Description
        'supports'            => $supports,
        'taxonomies'          => array( 'category', 'post_tag' ), // Allowed taxonomies
        'hierarchical'        => false, // Allows hierarchical categorization, if set to false, the Custom Post Type will behave like Post, else it will behave like Page
        'public'              => true,  // Makes the post type public
        'show_ui'             => true,  // Displays an interface for this post type
        'show_in_menu'        => true,  // Displays in the Admin Menu (the left panel)
        'show_in_nav_menus'   => true,  // Displays in Appearance -> Menus
        'show_in_admin_bar'   => true,  // Displays in the black admin bar
        'menu_position'       => 5,     // The position number in the left menu
        'menu_icon'           => true,  // The URL for the icon used for this post type
        'can_export'          => true,  // Allows content export using Tools -> Export
        'has_archive'         => true,  // Enables post type archive (by month, date, or year)
        'exclude_from_search' => false, // Excludes posts of this type in the front-end search result page if set to true, include them if set to false
        'publicly_queryable'  => true,  // Allows queries to be performed on the front-end part if set to true
        'capability_type'     => 'post' // Allows read, edit, delete like “Post”
    );

    register_post_type('teams', $args); //Create a post type with the slug is ‘product’ and arguments in $args.
}
add_action('init', 'team_posttype');
// Custom Post Type and Taxonomy Registration
function services_posttype() {
    /*
     * Labels for the custom post type.
     */
    $labels = array(
        'name'               => 'Services',
        'singular_name'      => 'Service',
        'menu_name'          => 'Services',
        'name_admin_bar'     => 'Service',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Service',
        'new_item'           => 'New Service',
        'edit_item'          => 'Edit Service',
        'view_item'          => 'View Service',
        'all_items'          => 'All Services',
        'search_items'       => 'Search Services',
        'parent_item_colon'  => 'Parent Services:',
        'not_found'          => 'No services found.',
        'not_found_in_trash' => 'No services found in Trash.',
    );

    /*
     * Supports for the custom post type.
     */
    $supports = array(
        'title',
        'editor',
        'excerpt',
        'author',
        'thumbnail',
        'comments',
        'revisions',
        'custom-fields',
    );

    /*
     * Arguments for registering the post type.
     */
    $args = array(
        'labels'             => $labels,
        'description'        => 'Post type for services',
        'supports'           => $supports,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-admin-tools', // Example dashicon
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'services_posts' ),
        'can_export'         => true,
        'publicly_queryable' => true,
        'capability_type'    => 'post',
    );

    register_post_type( 'services_posts', $args );

    // Register Custom Taxonomy
    $taxonomy_labels = array(
        'name'              => _x( 'Service Categories', 'taxonomy general name', 'xc360' ),
        'singular_name'     => _x( 'Service Category', 'taxonomy singular name', 'xc360' ),
        'search_items'      => __( 'Search Categories', 'xc360' ),
        'all_items'         => __( 'All Categories', 'xc360' ),
        'parent_item'       => __( 'Parent Category', 'xc360' ),
        'parent_item_colon' => __( 'Parent Category:', 'xc360' ),
        'edit_item'         => __( 'Edit Category', 'xc360' ),
        'update_item'       => __( 'Update Category', 'xc360' ),
        'add_new_item'      => __( 'Add New Category', 'xc360' ),
        'new_item_name'     => __( 'New Category Name', 'xc360' ),
        'menu_name'         => __( 'Categories', 'xc360' ),
    );

    $taxonomy_args = array(
        'hierarchical'      => true,
        'labels'            => $taxonomy_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'service-category' ),
    );

    register_taxonomy( 'service_category', 'services_posts', $taxonomy_args );
}
add_action( 'init', 'services_posttype' );
