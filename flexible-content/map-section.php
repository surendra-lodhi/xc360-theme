<?php
wp_reset_query();
wp_reset_postdata(); 
$map_iframe = get_sub_field('map_iframe');
$location_title = get_sub_field('location_title');
$address_on_map = get_sub_field('address_on_map');
?>

<section class="map-section">
    <?php if(!empty($address_on_map)) { ?>
    <div class="location">
        <?php if(!empty($location_title)) { ?>
            <h4><?php echo $location_title; ?></h4>
        <?php } ?>
        <?php echo $address_on_map; ?>
    </div>
    <?php } ?>
    <div class="map-pin">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map-pin.svg" alt="">
    </div>
    <?php echo do_shortcode($map_iframe); ?>
</section>
