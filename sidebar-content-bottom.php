<?php
/**
 * The template for the content bottom widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage XC360
 * @since Xc360 1.0
 */

if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
// If we get this far, we have widgets. Let's do this.
?>

<aside id="content-bottom-widgets" class="content-bottom-widgets" role="complementary">
    <?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
        <div class="widget-area">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div><!-- .widget-area -->
    <?php } ?>

    <?php if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
        <div class="widget-area">
            <?php dynamic_sidebar( 'sidebar-3' ); ?>
        </div><!-- .widget-area -->
    <?php } ?>
</aside><!-- .content-bottom-widgets -->