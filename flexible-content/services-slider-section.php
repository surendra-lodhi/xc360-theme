<?php
$green_background = get_sub_field('green_background'); 
$title = get_sub_field('title'); 
$description = get_sub_field('description'); 
$button = get_sub_field('button'); 
?>
<section class="services-carousel-section<?php if($green_background) { ?> green-bg <?php } ?>">
    <div class="container">
        <div class="carousel-overview">
            <h3><?php echo $title; ?></h3>
            <h6><?php echo $description; ?></h6>
        </div>
        <div class="services-carousel-wrap">
            <div class="services-carousel-slider">
                <?php
                $args = array(
                    'post_type' => 'services_posts',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'post_per_page' => -1
                );
                $query = new WP_Query($args); 
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="services-single">
                    <div class="service-pic">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="read-more">
                        <a href="#">
                            <i class="fa-solid fa-angle-right active"></i>
                        </a>
                    </div>
                    <h6><?php the_title();?></h6>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div class="btn-block">
                <a href="<?php echo $button['url']; ?>" class="btn-primary"><?php echo $button['title']; ?></a>
            </div>
        </div>
    </div>
</section