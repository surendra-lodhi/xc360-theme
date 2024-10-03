<?php
$testimonials_full_bg = get_sub_field('testimonials_full_bg');
$no_author_picture = get_sub_field('no_author_picture');
$testimonial_bg_image = get_sub_field('testimonial_bg_image');
$testimonial_heading = get_sub_field('testimonial_heading');
$testimonials_lists = get_sub_field('testimonials_lists');
?>
<section class="testimonials-section<?php if($testimonials_full_bg) { ?> testimonials-full-bg<?php } ?><?php if($no_author_picture) { ?> no-author-pic<?php } ?>">
    <?php if(!empty($testimonial_bg_image)){ ?>
    <div class="testimonials-bg">
        <img src="<?php echo $testimonial_bg_image; ?>" alt="">
    </div>
    <?php } ?>
    <div class="container">
        <div class="testimonials-wrap">
            <div class="testimonial-inner">
                
                <h3><?php echo $testimonial_heading; ?></h3>

                <?php
                    $args = array(
                        'post_type' => 'testimonials', // Change to your post type
                        'posts_per_page' => -1,        // Get all posts
                        'post_status' => 'publish',
                    );
                    
                    // Execute the query
                    $query = new WP_Query($args);
                ?>
                <div class="testimonials">
                    <?php if ($query->have_posts()) { ?>
                        <?php  while ($query->have_posts()) {
                            $query->the_post();
                        ?>
                    <div class="testimonial">
                        <p><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
                        <div class="author"><?php echo the_title(); ?></div>
                        <div class="rating"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Stars.svg" alt=""> </div>
                        <div class="author-pic"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""> </div>
                    </div>
                    <?php   
                            }
                            wp_reset_postdata(); 
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>