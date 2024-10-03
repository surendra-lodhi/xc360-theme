<?php
wp_reset_query();
wp_reset_postdata(); 
$team_heading = get_sub_field('team_heading');
$team_content = get_sub_field('team_content');
$button = get_sub_field('button');
$team_image = get_sub_field('team_image');
?>

<section class="our-team-expert-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="our-team-expert-content">
                    <?php if(!empty($team_heading)){ ?>
                        <h3><?php echo $team_heading; ?></h3>
                    <?php } ?>
                    <?php echo $team_content; ?>
                    <?php if(!empty($button)) {?>
                        <div class="btn-block">
                            <a href="<?php echo $button['url']?>" class="btn-green" target="<?php echo $button['target']?>"><?php echo $button['title']?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4">
                <?php if(!empty($team_image)){ ?>
                <div class="team-images">
                    <img src="<?php echo $team_image; ?>" alt="" >
                </div>
                <?php } ?>
            </div>
           
        </div>
    </div>
</section>