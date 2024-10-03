<?php
wp_reset_query();
wp_reset_postdata(); 
$stats_widgets_lists = get_sub_field('stats_widgets_lists');
?>

<section class="stats-widgets-section">
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($stats_widgets_lists as $key => $value) { 
                $stats_widgets_icon = $value['stats_widgets_icon'];
                $stats_widgets_number = $value['stats_widgets_number'];
                $description = $value['description'];
            ?>
            <div class="col-md-3">
                <div class="stats-widgets-item">
                    <?php if(!empty($stats_widgets_icon)){ ?>
                        <div class="icon">
                            <img src="<?php echo $stats_widgets_icon; ?>" alt="">
                        </div>
                    <?php } ?>
                    <?php if(!empty($stats_widgets_number)){ ?>
                        <h2><?php echo $stats_widgets_number; ?></h2>
                    <?php } ?>
                    <?php if(!empty($description)){ ?>
                        <p><?php echo $description; ?></p>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>