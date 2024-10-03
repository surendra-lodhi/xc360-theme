<?php
    wp_reset_query();
    wp_reset_postdata(); 
    $team_page_id = 380;
    $linkedin_title = get_field('linkedin_title', $team_page_id);
    $linkedin_link = get_field('linkedin_link', $team_page_id);
    $email_title = get_field('email_title', $team_page_id);
    $email_id = get_field('email_id', $team_page_id);
    $button_title = get_field('button_title', $team_page_id);
    $button_link = get_field('button_link', $team_page_id);
?>

<?php 
    $args = array(
                'post_type' => 'teams',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'order' => 'DESC',
                'orderby' => 'date'
            );
    $team_query = new WP_Query($args);
?>


<section class="meet-the-people-section">
    <div class="container">
        <div class="team-wrap tab" data-id="tab2">
            <div class="row">
            <?php if($team_query->have_posts()){  ?>
                <?php while($team_query->have_posts()){ 
                    $team_query->the_post();
                    $image = get_the_post_thumbnail_url();
                    
                ?>
                <div class="col-lg-3 col-md-4">
                    <div class="single-team">
                        <div class="single-team-box">
                            <img src="<?php echo $image ; ?>" alt="<?php echo get_the_title(); ?>">
                            <h6><?php echo get_the_title(); ?></h6>
                        </div>
                        <!-- PopUp Start -->
                        <div class="single-team-detail">
                            <div class="single-team-inner">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12">
                                        <h4><?php echo get_the_title(); ?></h4>
                                        <p> <?php echo get_the_content(); ?></p>
                                        <div class="close-team">X</div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="profile-sidebar">
                                            <div class="profile-actions">
                                                <?php if(!empty($linkedin_title)) {?>
                                                <a href="<?php the_field('linkedin_link'); ?>" class="linkedin-link" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-icon.svg"><?php the_field('linkedin_title'); ?></a>
                                               <?php } ?>
                                               <?php if(!empty($email_title)) {?> 
                                                <a href="mailto:<?php the_field('email_id'); ?>" class="email-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email-white-icon.svg"><?php the_field('email_title'); ?></a>
                                                <?php } ?>
                                            </div>
                                            <?php if(!empty($button_title)) {?>
                                            <div class="btn-block">
                                                <a href="<?php the_field('button_link'); ?>" class="button" target="_blank">
                                                    <?php the_field('button_title'); ?>
                                                </a>
                                            </div>
                                            <?php } ?>
                                            <div  class="line-shape">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bg-image-popup.png">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- PopUp End -->
                    </div>
                </div>
                <?php } ?>
                <?php
                    wp_reset_query(); 
                    wp_reset_postdata(); 
                ?>
            <?php } ?>
            </div>
        </div>
    </div>
</section>
