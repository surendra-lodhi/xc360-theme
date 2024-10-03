<?php
wp_reset_query();
wp_reset_postdata(); 
$heading = get_sub_field('heading');
$client_lists = get_sub_field('client_lists');
?>

<section class="client-slider-section">
    <div class="container">
        <?php if(!empty($heading)){ ?>
            <h2><?php echo $heading; ?></h2>
        <?php } ?>
        <?php if(!empty($client_lists)){ ?>
        <div class="client-slider">
            <?php foreach ($client_lists as $key => $value) { 
                $client_logo = $value['client_logo'];
            ?>
            <div class="client-item">
                <img src="<?php echo $client_logo; ?>" alt="">
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</section>