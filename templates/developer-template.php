<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/*
 * Template Name: Developer Test Template
 *
 * @package WordPress
 * @subpackage xc360
 * @since xc360 1.0
 */
get_header(); ?>
<?php
echo "<pre>";
print_r( "Hello Developer!!!!" );
echo "</pre>";
?>
<?php get_footer(); ?>