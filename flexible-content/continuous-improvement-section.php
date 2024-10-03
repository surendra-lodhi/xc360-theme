<?php
wp_reset_query();
wp_reset_postdata(); 
$continuous_image = get_sub_field('continuous_image');
$heading = get_sub_field('heading');
$content = get_sub_field('content');
?>

<section class="continuous-improvement-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php if(!empty($continuous_image)){ ?>
                <div class="improvement-flow-image">
                    <img src="<?php echo $continuous_image; ?>" alt="">
                </div>
                <?php } ?>
            </div>
            <div class="col-md-8">
                <div class="improvement-content">
                    <?php if(!empty($heading)){ ?>
                        <h3><?php echo $heading; ?></h3>
                    <?php } ?>
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </div>
</section>