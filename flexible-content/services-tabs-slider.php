<?php
$title = get_sub_field('title');
$description = get_sub_field('description');
$button = get_sub_field('button');
$service_categorys = get_terms( array(
    'taxonomy'   => 'service_category',
    'hide_empty' => true,
) );
?>
<?php if(!empty($service_categorys)) { ?>
    <section class="services-tabs-slider">
        <div class="container">
            <div class="services-overview">
                <?php if(!empty($title)) { ?>
                    <h2><?php echo $title; ?></h2>
                <?php } ?>
                <?php if(!empty($description)) { ?>
                    <h6><?php echo $description; ?></h6>
                <?php } ?>
            </div>
            <div class="services-tab">
                
                <ul id="tabs-nav">
                    <?php foreach ($service_categorys as $key => $service_category) { ?>
                        <li><a href="#tab<?php echo $service_category->term_id; ?>"><?php echo $service_category->name; ?></a></li>
                    <?php } ?>
                </ul> <!-- END tabs-nav -->
                
              <div id="tabs-content">
                <?php foreach ($service_categorys as $key => $service_category) { ?>
                    <div id="tab<?php echo $service_category->term_id; ?>" class="tab-content">
                        <div class="services-slider-wrap">
                            <div class="services-slider">
                                <?php 
                                $args = array( 
                                                'post_type' => 'services_posts' ,
                                                'posts_per_page' => 5, 
                                                'tax_query' => array(
                                                                    array(
                                                                        'taxonomy' => 'service_category',
                                                                        'terms' => $service_category->term_id,
                                                                        'field' => 'term_id',
                                                                    ),
                                                                )
                                    );
                                $related_query = new WP_Query($args);
                                if($related_query->have_posts()) {
                                    while ($related_query->have_posts()) {
                                        $related_query->the_post(); 
                                        $heading = get_field('heading');
                                        $sub_heading = get_field('sub_heading');
                                        $description = get_field('description');
                                        $cta = get_field('cta');
                                        $image = get_the_post_thumbnail_url();
                                        ?>
                                        <div class="single-service">
                                            <div class="service-content">
                                              <h3><?php echo $heading; ?></h3>
                                              <h6><?php echo $sub_heading; ?></h6>
                                              <?php echo $description; ?>
                                              <div class="findmore-wrap">
                                                <div class="findout-more">
                                                    <a href="<?php echo get_the_permalink(); ?>"><span>
                                                        <i class="fa-solid fa-angle-right active"></i>
                                                        <i class="fa-solid fa-angle-right hover-right"></i>
                                                    </span>Find out more</a>
                                                </div>
                                                <?php if(!empty($cta['url']) && !empty($cta['title'])) { ?>
                                                    <div class="get-in-touch">Found what you're looking for? <a href="<?php echo $cta['url']; ?>"><?php echo $cta['title']; ?></a></div>
                                                <?php } ?>
                                              </div>
                                            </div>
                                            <div class="service-pic">
                                                <img src="<?php echo $image; ?>" alt="<?php echo get_the_title(); ?>">
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
              </div> <!-- END tabs-content -->
            </div> <!-- END services-tab -->
            <?php if(!empty($button['url']) && !empty($button['title'])) { ?>
                <div class="btn-block">
                    <a href="<?php echo $button['url']; ?>" class="btn-green"><?php echo $button['title']; ?></a>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>
<?php 
wp_reset_postdata();
wp_reset_query();
?>