<?php
wp_reset_query();
wp_reset_postdata(); 
$white_background = get_sub_field('white_background');
$heading = get_sub_field('heading');
$awards_lists = get_sub_field('awards_lists');
?>

<section class="awards-slider-section<?php if($white_background) { ?> white-bg <?php } ?>">
    <div class="container">
        <?php if(!empty($heading)){ ?>
            <h2><?php echo $heading; ?></h2>
        <?php } ?>
        <?php if(!empty($awards_lists)){ ?>
        <div class="awards-slider">
            <?php foreach ($awards_lists as $key => $value) { 
                $awards_picture = $value['awards_picture'];
            ?>
            <?php if(!empty($awards_picture)){ ?>
                <div class="award-item">
                    <img src="<?php echo $awards_picture; ?>" alt="">
                </div>
            <?php } ?>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</section>