<?php
wp_reset_query();
wp_reset_postdata(); 
$service_heading = get_sub_field('service_heading');
$service_content = get_sub_field('service_content');
$features_lists = get_sub_field('features_lists');
$button = get_sub_field('button');
?>

<section class="service-excellence-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-excellence-content">
                    <?php if(!empty($service_heading)){ ?>
                        <h3><?php echo $service_heading; ?></h3>
                    <?php } ?>
                    <?php echo $service_content; ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-side-services">
                    <?php if(!empty($features_lists)){ ?>
                        <ul class="right-side-services-list">
                            <?php foreach ($features_lists as $key => $value) { 
                                $features = $value['features'];
                            ?>
                                <li><?php echo $features; ?></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                    <?php if(!empty($button)) {?>
                    <div class="btn-block">
                        <a href="<?php echo $button['url']?>" class="btn-green" target="<?php echo $button['target']?>"><?php echo $button['title']?></a>
                        <svg class="blue-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="63.732" height="87.6" viewBox="0 0 63.732 87.6">
                          <g id="Group_1829" data-name="Group 1829" transform="translate(-31 82)">
                            <g id="Group_1829-2" data-name="Group 1829" transform="translate(31 -82)" clip-path="url(#clip-path)">
                              <path id="Path_3196" data-name="Path 3196" d="M.8,8.35A3.425,3.425,0,0,1,2.131,6.9c8.62-4.539,19.931-8.01,29.759-6.573,1.9.277.125,2.922-1.059,3.064-4.816.577-9.605.821-14.352,1.927A58,58,0,0,0,7.371,8.3,80.338,80.338,0,0,1,63.729,85.582c-.01,1.255-2.72,3.041-2.773,1.281A80.768,80.768,0,0,0,7.779,13.607a55.626,55.626,0,0,1,6.5,24.275c.073,2.069-4.326,4.8-4.419,2.04A52.957,52.957,0,0,0,.326,11.169,2.234,2.234,0,0,1,.8,8.35" transform="translate(0 0)" fill="#2984b7"/>
                            </g>
                          </g>
                        </svg>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
