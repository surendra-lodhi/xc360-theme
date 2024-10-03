<?php
wp_reset_query();
wp_reset_postdata(); 
$heading = get_sub_field('heading');
$sub_heading = get_sub_field('sub_heading');
$description = get_sub_field('description');
$shortcode = get_sub_field('shortcode');

?>

<section class="welove-to-speak-section">
    <div class="container">
        <div class="content-inner">
            <?php if(!empty($heading)){ ?>
                <h2><?php echo $heading; ?></h2>
            <?php } ?>
            <?php if(!empty($sub_heading)){ ?>
                <h6><?php echo $sub_heading; ?></h6>
            <?php } ?>
            <?php if(!empty($description)){ ?>
                <p><?php echo $description; ?></p>
            <?php } ?>
        </div>
        <div class="book-call-form">
            <?php echo do_shortcode($shortcode); ?>
        </div>
    </div>
</section>


