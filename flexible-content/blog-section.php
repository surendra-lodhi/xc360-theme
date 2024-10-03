<?php
wp_reset_query();
wp_reset_postdata(); 
$title = get_sub_field('title'); 
$description = get_sub_field('description'); 
$current_category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';
?>
<style type="text/css">
    .hidden-blog {
        display: none;
    }
</style>
<!-- Blog Section -->
<section class="news-section">
    <div class="container">
        <div class="news-overview">
            <h2><?php echo $title; ?></h2>
            <h6><?php echo $description; ?></h6>
        </div>
        <div id="news-categories">
            <span>Categories</span>
            <ul class="categories" id="post-categories">
                <li>All</li>
                <?php 
                // Get all categories of post type 'post'
                $categories = get_categories(array(
                    'taxonomy' => 'category', // default taxonomy for posts
                    'orderby' => 'name',
                    'order'   => 'ASC'
                ));

                // Loop through the categories
                foreach($categories as $category) { 
                    $active_class = ($current_category == $category->slug) ? 'active' : '';
                    echo '<li data-category="' . esc_attr($category->slug) . '" class="' . $active_class . '">' . esc_html($category->name) . '</li>';
                } 
                ?>
            </ul>

        </div>
        <div class="news-wrap">
            <!-- Preloader -->
            <div class="loader-mask">
                <div class="loader">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <!-- Preloader -->
            <div class="news-lists-wrap">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'orderby' => 'date'
                );
                if ($current_category) {
                    $args['category_name'] = $current_category; // Filter by selected category
                } 
                $query = new WP_Query($args); 

                $post_count = 0;
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $post_count++;
                        // Add 'hidden' class for posts after the initial 5
                        $hidden_class = $post_count > 7 ? 'hidden-blog' : '';
                ?>
                <div class="news-card <?php echo $hidden_class; ?>">
                    <div class="post-pic">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="post-content-wrap">
                        <div class="post-content">
                            <h6><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h6>
                            <p>
                            <?php  $content =  get_the_content(); echo $trimmed_content = wp_trim_words( $content, 30, '...' ); ?>
                            </p>
                        </div>
                        <div class="read-more">
                            <a href="<?php the_permalink(); ?>">
                                <span>
                                <i class="fa-solid fa-angle-right active"></i>
                                <i class="fa-solid fa-angle-right hover-right"></i>
                                </span>
                                Read full article
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_query();
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <?php if ( $post_count > 3 ) { ?>
                <div class="btn-block loadmore" id="loadmore_blog">
                    <a class="btn-green" href="#">Load more posts</a>
                </div>
            <?php }?>
        </div>
    </div>
</section>



