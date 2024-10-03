<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage XC360
 * @since Xc360 1.0
 */

get_header(); ?>

<?php if (class_exists('acf')) { 
    if (have_rows('flexible_content', get_option( 'page_for_posts' ))):
        while (the_flexible_field('flexible_content', get_option( 'page_for_posts' ))) : 
            include locate_template('flexible-content/' . str_replace('_', '-', get_row_layout()) . '.php');
        endwhile;
    endif;
} ?>

<?php get_footer(); ?>