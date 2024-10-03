<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage XC360
 * @since Xc360 1.0
 */

get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();

?>

<style type="text/css">
    
.news-categories-list {
    padding: 0;
    margin: 0 0 50px 0;
    text-align: center;
    list-style: none;
}
.news-categories-list span{
    font-weight: 600;
    font-family: 'Metropolis', sans-serif;
    text-decoration: none;
    color: #2984B7;
}
</style>
<?php
$blogPageID = 43;   
if( have_rows('flexible_content', $blogPageID) ) {
    while ( have_rows('flexible_content', $blogPageID) ) { the_row();
        
        // Check for the banner section layout
        if( get_row_layout() == 'hero_section' ){
            $background_image = get_sub_field('background_image');
            $heading = get_sub_field('heading');
        }
    }
}
?>
<section class="home-hero-section <?php if(!is_front_page()) { ?> inner-hero-section <?php } ?>" style="background-image: url(<?php echo $background_image; ?>);">
    <div class="container">
        <?php if(!empty($heading)){ ?>
            <div class="hero-content">
                <h1><?php echo $heading; ?></h1>
            </div>
        <?php } ?>
    </div>
</section>
<!-- Blog Section -->
<section class="news-detail-section">
    <div class="container">
        <div class="news-overview">
            <?php
            $blogPageID = 43;   
            if( have_rows('flexible_content', $blogPageID) ) {
                while ( have_rows('flexible_content', $blogPageID) ) { the_row();
                    
                    // Check for the banner section layout
                    if( get_row_layout() == 'blog_section' ){
                       $title = get_sub_field('title'); 
                        $description = get_sub_field('description');
                    }
                }
            }
            ?>
            <h2><?php echo $title; ?></h2>
            <h6><?php echo $description; ?></h6>
        </div>
        <div class="news-categories-list">
            <?php
                // Get the categories of the current post
                $categories = get_the_category();
                if ($categories) {
                    // Create an array to hold category names
                    $category_names = [];

                    // Loop through categories and add their names to the array
                    foreach ($categories as $category) {
                        $category_names[] = esc_html($category->name); // Sanitize the category name
                    }
            ?>
            <span> <?php echo implode(' | ', $category_names); ?></span>
        <?php } ?>
        </div>
        <div class="news-details-wrap">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <?php endif; ?>
            <h4><?php echo the_title(); ?></h4>
            <?php echo the_content(); ?>
            <h4><a href="#">Share this article</a></h4>
            <div class="social-sharing">
        <ul class="share-buttons">
            <li>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" title="Share on Facebook" target="_blank" onclick="return !window.open(this.href, 'Facebook', 'width=600,height=500')">
                    <i class="fab fa-facebook-f"></i> <!-- Font Awesome icon for Facebook -->
                </a>
            </li>
            <li>
                <a href="https://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" title="Tweet" onclick="return !window.open(this.href, 'Twitter', 'width=600,height=500')">
                    <i class="fab fa-twitter"></i> <!-- Font Awesome icon for Twitter -->
                </a>
            </li>
            <li>
                <a href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="Share on Google+" onclick="return !window.open(this.href, 'Google+', 'width=600,height=500')">
                    <i class="fab fa-google-plus-g"></i> <!-- Font Awesome icon for Google+ -->
                </a>
            </li>
            <li>
                <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>&summary=<?php echo urlencode(get_the_excerpt()); ?>" target="_blank" title="Share on LinkedIn" onclick="return !window.open(this.href, 'LinkedIn', 'width=600,height=500')">
                    <i class="fab fa-linkedin-in"></i> <!-- Font Awesome icon for LinkedIn -->
                </a>
            </li>
            <li>
                <a href="mailto:?subject=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode(get_the_title() . ' - ' . get_permalink()); ?>" title="Email">
                    <i class="fas fa-envelope"></i> <!-- Font Awesome icon for Email -->
                </a>
            </li>
        </ul>
</div>

            
        </div>
    </div>
</section>

<!-- <section class="leave-comment-section">
    <div class="container">
        <h3>Leave a <strong>comment</strong></h3>
        <div class="form-wrap">
            <form class="custom-form">
              <div class="row">
                <div class="col-md-6">
                    <div class="col-full"><input type="text" placeholder="Full name*"></div>
                </div>
                <div class="col-md-6">
                    <div class="col-full"><input type="email" placeholder="Email address*"></div>
                </div>
                <div class="col-md-12">
                    <div class="col-full"><textarea placeholder="Comment"></textarea></div>
                </div>
                <div class="col-md-12">
                    <div class="btn-block">
                        <button type="submit" class="btn-primary">Send message</button>
                    </div>
                </div>
              </div>
            </form>
        </div>
    </div>
</section> -->

<!-- 
<section class="comment-listing-section">
    <div class="container">
        <div class="comment-content-wrap">
            <h3>Comments</h3>
            <div class="comment-list">
                <div class="single-comment">
                    <h6>Rob Lever | 5 August 2023 <span>Reply</span></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vestibulum massa a sem convallis porta. Sed hendrerit ipsum id tempus tincidunt. Maecenas faucibus molestie arcu, eu ultrices nisi eleifend a. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed finibus velit.</p>
                    <div class="single-comment single-comment-reply">
                        <h6>Carrie Branson | 7 August 2023 <span>Reply</span></h6>
                        <p>Integer blandit sagittis sagittis. Etiam vitae ex lectus. Quisque dictum, augue ac placerat bibendum, turpis risus imperdiet velit, vitae blandit turpis magna quis lectus. Curabitur ultrices nulla at euismod molestie. </p>
                    </div>
                </div>
            </div>
            <div class="btn-block">
                <a href="#" class="btn-green">Back to all posts</a> 
            </div>
        </div>
    </div>
</section> -->


<section class="leave-comment-section">
    <div class="container">
        <div class="form-wrap">
        <?php
        if (comments_open() || get_comments_number()) {
            comments_template();
        }
        ?>
    </div>

    </div>
</section> 

<section class="comment-listing-section">
    <div class="container">
        <div class="comment-content-wrap"> 
            <?php if (have_comments()) : ?>
                <h3>Comments</h3>
                <div class="comment-list">
                    <div class="single-comment">
                        <?php wp_list_comments('type=comment&callback=mytheme_comment&max_depth=3'); ?>
                    </div>
                </div>
                <?php the_comments_navigation(); ?>
            <?php endif; ?>
            <div class="btn-block">
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn-green">Back to all posts</a> 
            </div>
        </div>
    </div>
</section>

<?php
// End of the loop.
    endwhile;
?>

<?php
$blogPageID = 43;   
if( have_rows('flexible_content', $blogPageID) ) {
    while ( have_rows('flexible_content', $blogPageID) ) { the_row();
        
        // Check for the banner section layout
        if( get_row_layout() == 'cta_section' ){
            $title = get_sub_field('title'); 
            $small_text = get_sub_field('small_text'); 
            $button = get_sub_field('button'); 
        }
    }
}
?>
<section class="cta-section">
    <div class="container">
        <div class="inner-content">
            <div class="cta-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="119.059" height="126.955" viewBox="0 0 119.059 126.955">
                  <defs>
                    <clipPath id="clip-path">
                      <rect id="Rectangle_457" data-name="Rectangle 457" width="80.356" height="100.612" fill="#5e9e2d"/>
                    </clipPath>
                  </defs>
                  <g id="Arrow" transform="matrix(0.875, 0.485, -0.485, 0.875, 48.778, 0)">
                    <g id="Group_556" data-name="Group 556" transform="translate(0 0)" clip-path="url(#clip-path)">
                      <path id="Path_1912" data-name="Path 1912" d="M78.043,97.947l-.029-.01c-4,1.352-8.5,1.768-12.661,2.127q-3.4.293-6.814.4c-2.014.063-4.626.545-6.332-.672-.9-.638.237-2.115,1.24-2.636v-.008l.044-.014a1.554,1.554,0,0,1,.469-.155,18.069,18.069,0,0,1,5.5-.329c2.237.012,4.473-.019,6.708-.121q3.32-.152,6.639-.392c.078-.006.157-.014.235-.02a178.283,178.283,0,0,1-20.265-8.422A119.727,119.727,0,0,1,31.018,73.546C17.275,62.194,6.71,47.061,2.213,29.7A66.237,66.237,0,0,1,1.074.9C1.206.183,2.733-.528,2.559.56-.194,17.752,4.591,35.407,13.822,49.969c9.389,14.81,23.332,26.2,38.728,34.337a140.021,140.021,0,0,0,20.9,9.141,70.449,70.449,0,0,1-12.59-19.937c-.311.007-.568-.165-.661-.652a8.323,8.323,0,0,1-.207-1.68c0-1.218,2.8-4,3.509-2.036A75.03,75.03,0,0,0,80.108,95.5c.938.987-1.006,2.839-2.064,2.449" transform="translate(0 0)" fill="#5e9e2d"/>
                    </g>
                  </g>
                </svg>
            </div>
            <h3><?php echo $title; ?></h3>
            <h6><?php echo $small_text; ?></h6>
            <a href="<?php echo $button['url']; ?>" class="btn-green"><?php echo $button['title']; ?></a>
        </div>
    </div>
</section>
<?php
$blogPageID = 43;   
if( have_rows('flexible_content', $blogPageID) ) {
    while ( have_rows('flexible_content', $blogPageID) ) { the_row();
        
        // Check for the banner section layout
        if( get_row_layout() == 'newsletter_section' ){
            $newsletter_image = get_sub_field('newsletter_image');
            $newsletter_title = get_sub_field('newsletter_title');
            $newsletter_sub_title = get_sub_field('newsletter_sub_title');
            $shortcode = get_sub_field('shortcode');
        }
    }
}
?>
<!-- Newsletter Section -->
<section class="newsletter-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?php if(!empty($newsletter_image)){ ?>
                    <div class="newsletter-image">
                        <img src="<?php echo $newsletter_image; ?>" alt="">
                    </div>
                <?php } ?>
            </div>
            <div class="col-lg-8">
                <div class="newsletter-content">
                    <?php if(!empty($newsletter_title)){ ?>
                        <h3><?php echo $newsletter_title; ?></h3>
                    <?php } ?>
                    <?php if(!empty($newsletter_sub_title)){ ?>
                        <h6><?php echo $newsletter_sub_title; ?></h6>
                    <?php } ?>
                </div>
                <div class="newsletter-form">
                    <svg id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="93.577" height="110.816" viewBox="0 0 93.577 110.816">
                      <defs>
                        <clipPath id="clip-path">
                          <rect id="Rectangle_457" data-name="Rectangle 457" width="80.356" height="100.612" fill="#fff"/>
                        </clipPath>
                      </defs>
                      <g id="Arrow-2" data-name="Arrow" transform="translate(93.577 99.633) rotate(172)">
                        <g id="Group_556" data-name="Group 556" clip-path="url(#clip-path)">
                          <path id="Path_1912" data-name="Path 1912" d="M78.044,2.664l-.029.01c-4-1.352-8.5-1.768-12.661-2.127q-3.4-.293-6.814-.4C56.527.084,53.914-.4,52.209.818c-.9.638.237,2.115,1.24,2.636v.008l.044.014a1.554,1.554,0,0,0,.469.155,18.069,18.069,0,0,0,5.5.329c2.237-.012,4.473.019,6.708.121q3.32.152,6.639.392c.078.006.157.014.235.02a178.283,178.283,0,0,0-20.265,8.422,119.727,119.727,0,0,0-21.76,14.149C17.275,38.418,6.71,53.551,2.213,70.916a66.238,66.238,0,0,0-1.139,28.8c.133.715,1.659,1.426,1.485.337C-.194,82.86,4.591,65.205,13.822,50.642c9.389-14.81,23.332-26.2,38.728-34.337a140.022,140.022,0,0,1,20.9-9.142A70.449,70.449,0,0,0,60.863,27.1c-.311-.007-.568.165-.661.652A8.323,8.323,0,0,0,60,29.432c0,1.218,2.8,4,3.509,2.036a75.031,75.031,0,0,1,16.6-26.355c.938-.987-1.006-2.839-2.064-2.449" transform="translate(0 0)" fill="#fff"/>
                        </g>
                      </g>
                    </svg>
                    <?php echo do_shortcode($shortcode); ?>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php get_footer(); ?>