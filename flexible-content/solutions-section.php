<?php
wp_reset_query();
wp_reset_postdata(); 
$white_background = get_sub_field('white_background');
$solutions_heading = get_sub_field('solutions_heading');
$solutions_sub_heading = get_sub_field('solutions_sub_heading');
$solutions_overview = get_sub_field('solutions_overview');
$solutions_lists = get_sub_field('solutions_lists');
$get_in_touch_text = get_sub_field('get_in_touch_text');
$button = get_sub_field('button');
?>

<!-- Solutions Section -->
<section class="solutions-section<?php if($white_background) { ?> white-bg <?php } ?>">
    <div class="container">
        <div class="solutions-overview">
            <?php if(!empty($solutions_heading)){ ?>
                <h2><?php echo $solutions_heading; ?></h2>
            <?php } ?>
            <?php if(!empty($solutions_sub_heading)){ ?>
                <h6><?php echo $solutions_sub_heading; ?></h6>
            <?php } ?>
            <?php if(!empty($solutions_overview)){ ?>
                <p><?php echo $solutions_overview; ?></p>
            <?php } ?>
        </div>
        <?php if(!empty($solutions_lists)){ ?>
        <div class="solutions-lists">
            <?php foreach ($solutions_lists as $key => $value) { 
                $solutions_icon = $value['solutions_icon'];
                $solutions_title = $value['solutions_title'];
                $solutions_content = $value['solutions_content'];
            ?>
            <div class="solution-single">
                <div class="solutions-title">
                    <?php if(!empty($solutions_icon)) {?>
                    <div class="icon">
                        <img src="<?php echo $solutions_icon; ?>" alt="">
                    </div>
                    <?php } ?>
                    <div class="heading">
                        <h4><?php echo $solutions_title; ?></h4>
                    </div>
                    <div class="arrows"></div>
                </div>
                <div class="solutions-content">
                    <p><?php echo $solutions_content; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
        <div class="get-in-touch">
        <?php if(!empty($get_in_touch_text)){ ?>
            <h6><?php echo $get_in_touch_text; ?></h6>
        <?php } ?>
        </div>
        <?php if(!empty($button)) {?>
            <div class="btn-block">
                <a href="<?php echo $button['url']?>" class="btn-green" target="<?php echo $button['target']?>"><?php echo $button['title']?></a>
            </div>
        <?php } ?>
    </div>
</section>