<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage XC360
 * @since Xc360 1.0
 */

get_header(); ?>
<?php 
   $background_image = get_field('xc360_options_background_image','option');
   $heading = get_field('xc360_options_heading','option');
   $sub_heading = get_field('xc360_options_sub_heading','option');
   $content = get_field('xc360_options_content','option');
   $button = get_field('xc360_options_button','option');
?>
<section class="home-hero-section <?php if(!is_front_page()) { ?> inner-hero-section <?php } ?>" style="background-image: url(<?php echo $background_image; ?>);">
    <div class="container">
        <div class="hero-content">
            <?php if(!empty($heading)){ ?>
                <h1><?php echo $heading; ?></h1>
            <?php } ?>
            <?php if(!empty($sub_heading)) { ?> 
                <h2><?php echo $sub_heading; ?></h2>
            <?php } ?>
            <p><?php echo $content; ?></p>
            <?php if(!empty($button)) { ?> 
                <div class="btn-block">
                    <a href="<?php echo get_home_url(); ?>" class="btn-primary"><?php echo $button; ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>