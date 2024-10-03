<?php
wp_reset_query();
wp_reset_postdata(); 
$why_choose_heading = get_sub_field('why_choose_heading');
$why_choose_lists = get_sub_field('why_choose_lists');
?>

<section class="why-choose-us-section">
    <div class="container">
        <?php if(!empty($why_choose_heading)){ ?>
            <h3><?php echo $why_choose_heading; ?></h3>
        <?php } ?>
        <div class="features-wrap">
            <?php foreach ($why_choose_lists as $key => $value) { 
                $why_choose_image = $value['why_choose_image'];
                $why_choose_title = $value['why_choose_title'];
                $why_choose_content = $value['why_choose_content'];
            ?>
            <div class="feature-item">
                <div class="row align-items-center">
                    <div class="col-sm-2">
                        <?php if(!empty($why_choose_image)){ ?>
                        <div class="why-choose-us-icon">
                            <img src="<?php echo $why_choose_image; ?>" alt="" class="feature-icon">
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-sm-10">
                        <div class="why-choose-us-content">
                            <?php if(!empty($why_choose_title)){ ?>
                                <h6><?php echo $why_choose_title; ?></h6>
                            <?php } ?>
                            <p><?php echo $why_choose_content; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
