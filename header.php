<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage XC360
 * @since Xc360 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) { ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php } ?>
        <?php
            if( class_exists('acf') ) {
                $favicon = get_field( 'xc360_options_favicon', 'option' );
                if( !empty( $favicon ) ) {
        ?>
            <!-- Favicon -->
            <link rel="shortcut icon" href="<?php echo $favicon; ?>" type="image/x-icon" />
        <?php
                }
            }
        ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php 
    if(class_exists('acf')){
        $site_logo = get_field('xc360_options_site_logo','option');
        $h_phone = get_field('xc360_options_h_phone','option');
        $h_email = get_field('xc360_options_h_email','option');

        $s_fb_link = get_field('xc360_options_s_fb_link','option');
        $s_x_link = get_field('xc360_options_s_tw_link','option');
        $s_tiktok_link = get_field('xc360_options_s_tiktok_link','option');
        $s_li_link = get_field('xc360_options_s_li_link','option');
        $s_vimeo_link = get_field('xc360_options_s_vimeo_link','option');
        $s_in_link = get_field('xc360_options_s_in_link','option');
        $s_yt_link = get_field('xc360_options_s_yt_link','option');
    }
    ?>

    <header id="header">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo $site_logo['url']?>" alt=""></a>
                </div>
                <div class="nav-menu">
                    <a class="menulinks"><i></i></a>
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_class'     => 'mainmenu',
                                'container'      => '',
                             ) );
                        ?>
                     <?php endif; ?>
                </div>
                <div class="header-connect-us">
                    <?php if(!empty($h_phone)) { ?>
                    <div class="call"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone-icon.svg" alt=""><a href="tel:<?php echo $h_phone; ?>"><?php echo $h_phone; ?></a></div>
                    <?php } ?>
                    <?php if(!empty($h_email)) { ?>
                        <div class="email"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email-icon.svg" alt=""><a href="mailto:<?php echo $h_email;?>"><?php echo $h_email;?></a></div>
                    <?php } ?>
                    <div class="header-social">
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
        </div>
    </header>    