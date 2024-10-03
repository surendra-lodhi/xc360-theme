<?php
wp_reset_query();
wp_reset_postdata(); 
$heading = get_sub_field('heading');
$content = get_sub_field('content');
?>
<?php 
$args = array(
            'post_type' => XC360_CASE_STUDY_POST_TYPE,
            'posts_per_page' => 5
        );
$case_study_query = new WP_Query($args);
?>
<?php if($case_study_query->have_posts()){  ?>

<section class="case-studies-slider-section">
    
        <div class="case-studies-overview">
            <h2><?php echo $heading; ?></h2>
            <p><?php echo $content; ?> </p>
        </div>
        <div class="container">

            <div class="case-slider-for">
                <?php while($case_study_query->have_posts()){ 
                    $case_study_query->the_post();
                    $image = get_the_post_thumbnail_url();
                    ?>
                    <div class="case-studies-item">
                        <div class="single-case-studies">
                            <div class="case-studies-content">
                                <div class="rating"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Stars.svg" alt=""> </div>
                                <h3><?php echo get_the_title(); ?></h3>
                                <p><?php echo get_the_content(); ?></p>
                                <div class="see-more">
                                    <a href="<?php echo get_the_permalink(); ?>"><span>
                                        <i class="fa-solid fa-angle-right active"></i>
                                        <i class="fa-solid fa-angle-right hover-right"></i>
                                    </span>See case study</a>
                                </div>
                            </div>
                            <div class="case-studies-pic">
                                <img src="<?php echo $image ; ?>" alt="<?php echo get_the_title(); ?>">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="case-slider-nav">
            <?php while($case_study_query->have_posts()){ 
                $case_study_query->the_post();
                $image = get_the_post_thumbnail_url();
                ?>
                <div class="case-studies-item">
                    <div class="single-case-studies">
                        <div class="case-studies-content">
                            <div class="rating"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Stars.svg" alt=""> </div>
                            <h3><?php echo get_the_title(); ?></h3>
                            <p><?php echo get_the_content(); ?></p>
                            <div class="see-more">
                                <a href="<?php echo get_the_permalink(); ?>"><span>
                                    <i class="fa-solid fa-angle-right active"></i>
                                    <i class="fa-solid fa-angle-right hover-right"></i>
                                </span>See case study</a>
                            </div>
                        </div>
                        <div class="case-studies-pic">
                            <img src="<?php echo $image ; ?>" alt="<?php echo get_the_title(); ?>">
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
</section>

<?php } ?>
<?php 
wp_reset_query();
wp_reset_postdata(); 
?>