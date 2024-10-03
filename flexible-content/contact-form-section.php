<?php
wp_reset_query();
wp_reset_postdata(); 
$heading = get_sub_field('heading');
$sub_heading = get_sub_field('sub_heading');
$button = get_sub_field('button');
$contact_lists = get_sub_field('contact_lists');
$shortcode = get_sub_field('shortcode');
?>

<section class="lets-talk-section">
    <div class="container">
        <?php if(!empty($heading)){ ?>
            <h2><?php echo $heading; ?></h2>
        <?php } ?>
        <div class="content-inner">
            <?php if(!empty($sub_heading)){ ?>
                <h6><?php echo $sub_heading; ?></h6>
            <?php } ?>
            <?php if(!empty($button)) {?>
            <div class="btn-block">
                <svg id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="113.002" height="126.635" viewBox="0 0 113.002 126.635">
                  <defs>
                    <clipPath id="clip-path">
                      <rect id="Rectangle_457" data-name="Rectangle 457" width="80.356" height="100.612" fill="#5e9e2d"/>
                    </clipPath>
                  </defs>
                  <g id="Arrow" transform="translate(21.145) rotate(11)">
                    <g id="Arrow-2" data-name="Arrow" transform="translate(93.577 99.633) rotate(172)">
                      <g id="Group_556" data-name="Group 556" clip-path="url(#clip-path)">
                        <path id="Path_1912" data-name="Path 1912" d="M78.044,2.664l-.029.01c-4-1.352-8.5-1.768-12.661-2.127q-3.4-.293-6.814-.4C56.527.084,53.914-.4,52.209.818c-.9.638.237,2.115,1.24,2.636v.008l.044.014a1.554,1.554,0,0,0,.469.155,18.069,18.069,0,0,0,5.5.329c2.237-.012,4.473.019,6.708.121q3.32.152,6.639.392c.078.006.157.014.235.02a178.283,178.283,0,0,0-20.265,8.422,119.727,119.727,0,0,0-21.76,14.149C17.275,38.418,6.71,53.551,2.213,70.916a66.238,66.238,0,0,0-1.139,28.8c.133.715,1.659,1.426,1.485.337C-.194,82.86,4.591,65.205,13.822,50.642c9.389-14.81,23.332-26.2,38.728-34.337a140.022,140.022,0,0,1,20.9-9.142A70.449,70.449,0,0,0,60.863,27.1c-.311-.007-.568.165-.661.652A8.323,8.323,0,0,0,60,29.432c0,1.218,2.8,4,3.509,2.036a75.031,75.031,0,0,1,16.6-26.355c.938-.987-1.006-2.839-2.064-2.449" transform="translate(0 0)" fill="#5e9e2d"/>
                      </g>
                    </g>
                  </g>
                </svg>
                <a href="<?php echo $button['url']?>" class="btn-primary" target="<?php echo $button['target']?>"><?php echo $button['title']?></a>
            </div>
            <?php } ?>
        </div>
        <?php if(!empty($contact_lists)){ ?>
        <div class="contact-info">
            <?php foreach ($contact_lists as $key => $value) { 
                $contact_title = $value['contact_title'];
                $phone_number = $value['phone_number'];
                $email_id = $value['email_id'];
            ?>
                <?php if(!empty($phone_number && $contact_title)){ ?>
                    <div class="call">
                        <strong><?php echo $contact_title; ?></strong><a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a> <a href="mailto:<?php echo $email_id; ?>"><?php echo $email_id; ?></a>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <?php } ?>
        <?php if(!empty($shortcode)){ ?>
        <div class="contact-form form-design">
            <?php echo do_shortcode($shortcode); ?>
        </div>
        <?php } ?>
    </div>
</section>
