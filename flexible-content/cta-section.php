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
            <?php
            $title = get_sub_field('title'); 
            $small_text = get_sub_field('small_text'); 
            $button = get_sub_field('button'); 
            ?>
            <h3><?php echo $title; ?></h3>
            <h6><?php echo $small_text; ?></h6>
            <a href="<?php echo $button['url']; ?>" class="btn-green"><?php echo $button['title']; ?></a>
        </div>
    </div>
</section>