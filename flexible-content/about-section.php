<?php
wp_reset_query();
wp_reset_postdata(); 
$about_title = get_sub_field('about_title');
$about_content = get_sub_field('about_content');
$about_lists = get_sub_field('about_lists');
$about_sub_heading = get_sub_field('about_sub_heading');
$button = get_sub_field('button');
?>

<section class="about-section">
    <div class="container">
        <div class="about-content">
            <?php if(!empty($about_title)){ ?>
                <h2><?php echo $about_title; ?></h2>
            <?php } ?>
            <?php if(!empty($about_content)){ ?>
                <p><?php echo $about_content; ?></p>
            <?php } ?>
            <?php if(!empty($about_lists)){ ?>
                <ul>
                    <?php foreach ($about_lists as $key => $value) { 
                        $list_text = $value['list_text'];
                    ?>
                    <li><?php echo $list_text; ?></li>
                    <?php } ?>
                </ul>
            <?php } ?>
            <?php if(!empty($about_sub_heading)){ ?>
                <h6><?php echo $about_sub_heading; ?></h6>
            <?php } ?>
            <?php if(!empty($button)) {?>
                <div class="btn-block">
                    <a href="<?php echo $button['url']?>" class="btn-primary" target="<?php echo $button['target']?>"><?php echo $button['title']?></a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>