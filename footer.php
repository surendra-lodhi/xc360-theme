<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage XC360
 * @since Xc360 1.0
 */
?>
<?php 
$email_title = get_field('xc360_options_c_email_title','option');
$c_email = get_field('xc360_options_c_email','option');
$support_title = get_field('xc360_options_support_title','option');
$support_phone = get_field('xc360_options_support_phone','option');
$sales_title = get_field('xc360_options_sales_title','option');
$sales_phone = get_field('xc360_options_sales_phone','option');
$c_address = get_field('xc360_options_c_address','option');

$s_fb_link = get_field('xc360_options_s_fb_link','option');
$s_x_link = get_field('xc360_options_s_tw_link','option');
$s_tiktok_link = get_field('xc360_options_s_tiktok_link','option');
$s_li_link = get_field('xc360_options_s_li_link','option');
$s_vimeo_link = get_field('xc360_options_s_vimeo_link','option');
$s_in_link = get_field('xc360_options_s_in_link','option');
$s_yt_link = get_field('xc360_options_s_yt_link','option');

$f_logo = get_field('xc360_options_footer_logo','option');
$f_registered_text = get_field('xc360_options_registered_text','option');
$f_copy = get_field('xc360_options_f_copy','option');

?>
<!-- Footer start here -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container">
            	<div class="row">
                    <div class="col">
                        <div class="get-in-touch">
                            <div class="call">
                            	<?php if(!empty($c_email)) { ?> 
                                	<p>
                                		<strong><?php echo $email_title;?></strong><a href="mailto:<?php echo $c_email;?>"><?php echo $c_email;?></a>
                                	</p>
                            	<?php } ?>
                            	<?php if(!empty($support_phone)) { ?>
                                	<p>
                                		<strong><?php echo $support_title;?></strong><a href="tel:<?php echo $support_phone;?>"><?php echo $support_phone;?></a>
                                	</p>
                                <?php } ?>
                                <?php if(!empty($sales_phone)) { ?>
                                	<p>
                                		<strong><?php echo $sales_title;?></strong><a href="tel:<?php echo $sales_phone;?>"><?php echo $sales_phone;?></a>
                                	</p>
                                <?php } ?>
                            </div>
                            <div class="address">
                                <p><i class="fas fa-map-marker-alt"></i><?php echo $c_address;?></p>
                            </div>
                        </div>
                    </div>
            		<div class="col">
                    	<div class="footer-menu">
                            <h5>Services</h5>
                            <?php
                                wp_nav_menu( array(
                                        'theme_location' => 'footer_services',
                                        'menu_class'     => '',
                                        'container' => ''
                                ) );
                        	?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-menu">
                            <h5>Support</h5>
                            <?php
                                wp_nav_menu( array(
                                        'theme_location' => 'footer_support',
                                        'menu_class'     => '',
                                        'container' => ''
                                ) );
                        	?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-menu">
                            <h5>Customers</h5>
                            <?php
                                wp_nav_menu( array(
                                        'theme_location' => 'footer_customers',
                                        'menu_class'     => '',
                                        'container' => ''
                                ) );
                        	?>
                            <h5>Resources</h5>
                            <?php
                                wp_nav_menu( array(
                                        'theme_location' => 'footer_resources',
                                        'menu_class'     => '',
                                        'container' => ''
                                ) );
                        	?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-menu">
                            <h5>About us</h5>
                            <?php
                                wp_nav_menu( array(
                                        'theme_location' => 'footer_about',
                                        'menu_class'     => '',
                                        'container' => ''
                                ) );
                        	?>
                        </div>
                        <div class="social-media">
                            <ul>
                            	<?php if(!empty($s_fb_link)) { ?> 
                                	<li class="facebook"><a href="<?php echo $s_fb_link;?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            	<?php } ?>
                            	<?php if(!empty($s_x_link)) { ?>
                                	<li class="twitter"><a href="<?php echo $s_x_link;?>" target="_blank"><i class="fab fa-x-twitter"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($s_tiktok_link)) { ?>
                                	<li class="tiktok"><a href="<?php echo $s_tiktok_link;?>" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($s_li_link)) { ?>
                                	<li class="linkedin"><a href="<?php echo $s_li_link;?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($s_vimeo_link)) { ?>
                                	<li class="vimeo"><a href="<?php echo $s_vimeo_link;?>" target="_blank"><i class="fab fa-vimeo-v"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($s_in_link)) { ?>
                                	<li class="instagram"><a href="<?php echo $s_in_link;?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($s_yt_link)) { ?>
                                	<li class="youtube"><a href="<?php echo $s_yt_link;?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
            	</div>
                <div class="footer-logo-registered">
                    <div class="footer-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
	                        <img src="<?php echo $f_logo; ?>" alt="<?php bloginfo( 'name' ); ?>">
	                    </a>
                    </div>
                    <div class="registered-text">
                        <?php echo $f_registered_text; ?>
                    </div>
                </div>
            </div>
        </div>
		<div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copy-menu">
                        	<?php echo $f_copy; ?>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
	</footer><!-- Footer End here -->		

        <?php wp_footer(); ?>
    </body>
</html>
