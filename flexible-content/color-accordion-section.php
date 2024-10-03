<?php
wp_reset_query();
wp_reset_postdata(); 
$accordion_heading = get_sub_field('color_accordion_heading');
$accordion_sub_heading = get_sub_field('color_accordion_sub_heading');
$accordion_lists = get_sub_field('color_accordion_lists');
$form_title = get_sub_field('form_title');
$shortcode = get_sub_field('shortcode');
?>

<!-- Accordion Section -->
<section class="color-accordion-section">
    <div class="container">
        <?php if(!empty($accordion_heading)){ ?>
            <h2><?php echo $accordion_heading; ?></h2>
        <?php } ?>
        <div class="accordion-overview">
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
        <div class="faq-form">
            <?php if(!empty($form_title)){ ?>
                <h4><?php echo $form_title; ?></h4>
            <?php } ?>
            <?php if(!empty($shortcode)){ ?>
            <div class="contact-form">
                <?php echo do_shortcode($shortcode); ?>
            </div>
            <?php } ?>
        </div>
    </div>
</section>