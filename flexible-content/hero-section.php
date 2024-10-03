<?php
wp_reset_query();
wp_reset_postdata(); 
$background_image = get_sub_field('background_image');
$heading = get_sub_field('heading');
?>

<section class="home-hero-section<?php if(!is_front_page()) { ?> inner-hero-section <?php } ?>" style="background-image: url(<?php echo $background_image; ?>);">
    <div class="container">
        <?php if(!empty($heading)){ ?>
            <div class="hero-content">
                <h1><?php echo $heading; ?></h1>
            </div>
        <?php } ?>
    </div>
</section>
