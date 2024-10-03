<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage XC360
 * @since Xc360 1.0
 */

get_header(); ?>

<?php if (class_exists('acf')) { 
    if (have_rows('flexible_content')):
        while (the_flexible_field('flexible_content')) : 
            include locate_template('flexible-content/' . str_replace('_', '-', get_row_layout()) . '.php');
        endwhile;
    endif;
} ?>

<?php get_footer(); ?>