<?php
wp_reset_query();
wp_reset_postdata(); 
$accordion_heading = get_sub_field('accordion_heading');
$accordion_sub_heading = get_sub_field('accordion_sub_heading');
$accordion_lists = get_sub_field('accordion_lists');
?>

<!-- Accordion Section -->
<section class="accordion-section">
    <div class="container">
        <div class="accordion-overview">
            <?php if(!empty($accordion_heading)){ ?>
                <h3><?php echo $accordion_heading; ?></h3>
            <?php } ?>
            <?php if(!empty($accordion_sub_heading)){ ?>
                <h6><?php echo $accordion_sub_heading; ?></h6>
            <?php } ?>
        </div>
        <?php if(!empty($accordion_lists)){ ?>
        <div class="acc">
            <?php foreach ($accordion_lists as $key => $value) { 
                $accordion_title = $value['accordion_title'];
                $accordion_content = $value['accordion_content'];
            ?>
            <div class="acc__card">
              <div class="acc__title"><?php echo $accordion_title; ?> <i class="fa-solid fa-angle-down"></i></div>
              <div class="acc__panel">
                <?php echo $accordion_content; ?>
              </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</section>