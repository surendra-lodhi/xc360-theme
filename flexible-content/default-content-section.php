<?php
wp_reset_query();
wp_reset_postdata(); 
$heading = get_sub_field('dc_heading');
$sub_heading = get_sub_field('dc_sub_heading');
$overview_text = get_sub_field('dc_overview_text');
$button = get_sub_field('button');
$button_green = get_sub_field('button_green');
?>

<section class="default-content-section">
    <div class="container">
        <div class="overview-content">
            <?php if(!empty($heading)){ ?>
                <h2><?php echo $heading; ?></h2>
            <?php } ?>
            <?php if(!empty($sub_heading)){ ?>
                <h6><?php echo $sub_heading; ?></h6>
            <?php } ?>
            <?php if(!empty($overview_text)){ ?>
                <?php echo $overview_text; ?>
            <?php } ?>
        </div>
        <div class="default-content">
            <?php echo the_content(); ?>
        </div>
        <?php if(!empty($button)) {?>
            <div class="btn-block">
                <a href="<?php echo $button['url']?>" class="btn-primary<?php if($button_green) { ?> btn-green <?php } ?>" target="<?php echo $button['target']?>"><?php echo $button['title']?></a>
            </div>
        <?php } ?>
    </div>
</section>