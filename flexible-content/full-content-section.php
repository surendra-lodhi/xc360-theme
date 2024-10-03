<?php
wp_reset_query();
wp_reset_postdata(); 
$heading = get_sub_field('heading');
$sub_heading = get_sub_field('sub_heading');
$content = get_sub_field('content');
$button = get_sub_field('button');
?>

<section class="full-content-section">
    <div class="container">
        <?php if(!empty($heading)){ ?>
            <h2><?php echo $heading; ?></h2>
        <?php } ?>
        <div class="content-inner">
            <?php if(!empty($sub_heading)){ ?>
                <h6><?php echo $sub_heading; ?></h6>
            <?php } ?>
            <?php if(!empty($content)){ ?>
                <p><?php echo $content; ?></p>
            <?php } ?>
            <?php if(!empty($button)) {?>
                <div class="btn-block">
                    <a href="<?php echo $button['url']?>" class="btn-primary" target="<?php echo $button['target']?>"><?php echo $button['title']?></a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>