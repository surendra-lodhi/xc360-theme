<?php
wp_reset_query();
wp_reset_postdata(); 
$newsletter_image = get_sub_field('newsletter_image');
$newsletter_title = get_sub_field('newsletter_title');
$newsletter_sub_title = get_sub_field('newsletter_sub_title');
$shortcode = get_sub_field('shortcode');
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
