<?php
 /* Template Name: Privacy Policy Template */ 

?>

<style>
.page-id-3 {
    font-family: 'Poppins';
}
.page-id-3 .hero-section:before, .page-id-3 .hero-section:after {
    display: none;
}
.page-id-3 .hero-section {
    background-image: none;
    background: red;
    display: block;
}
.page-id-3 nav.navbar.fixed-top.navbar-expand-lg.navbar-dark.p-md-3 {
    margin: 0;
}
.page-id-3 .banner-title.heacontent.text-center {
    padding-top: 65px
}
.page-id-3 #wrapper {
    display: none;
}
.page-id-3 h3.policies--heading {
    position: relative;
    top: 45%;
    left: 5%;
    color: #fff;
    font-size: 34px;
    text-transform: uppercase;
    max-width: 80%;
}
.page-id-3 .bg-block {
    height: 36%;
}
.page-id-3 .privacy-policy-div {
    padding: 40px 8%;
}
.page-id-3 h5.privacy-policy-heading {
    color: #DF5928;
    font-weight: 700;
    font-size: 30px;
    margin-bottom: 25px;
    text-transform: capitalize;
}
.page-id-3 .privacy-policy-div p {
    color: #3C3C3C;
    font-size: 22px;
    font-weight: 500;
}
.page-id-3 a.nav-link.text-white {
    text-transform: uppercase;
	right: auto;
}
.page-id-3 ul, .page-id-3 ol {
    padding-left: 2rem !important;
    font-size: 22px;
    font-weight: 500;
}
.page-id-3 .footer-section.mobile-none {
    display: block;
}
.page-id-3 .footer-section .desktop-none {
    display: none;
}


.header-logo-one {
	margin: 0 20px 0 0;
	width: 60%!important;
}
.header-logo-two {
	width: 30%!important;
}

@media screen and (max-width: 767px) {
    .page-id-3 .privacy-policy-div p, .page-id-3 ul, .page-id-3 ol {
        font-size: 14px;
    }
    .page-id-3 .footer-section.mobile-none {
        display: none;
    }
    .page-id-3 .footer-section .desktop-none {
        display: block;
    }
	
}
@media screen and (max-width: 991px) {
    .page-id-3 .privacy-policy-div p, .page-id-3 ul, .page-id-3 ol {
        font-size: 18px;
    }
    .page-id-3 .mobile-none {
        display: block;
    }
    .page-id-3 h3.policies--heading {
        max-width: 85%;
        font-size: 24px;
    }
    .page-id-3 a.nav-link.text-white {
        right: 10px;
    }
    .page-id-3 .privacy-policy-div {
        padding: 0px 8% 40px;
    }
}
</style>


<!-- mobile banner -->
<section class="hero-section mobile-hero-section desktop-none">
    <div class="hero-bg-block">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
            <div class="container" style="display: block; padding: 0!important;">
				
				<div class="row">
					<div class="col-8 col-sm-4 d-flex align-items-center">
						
						<a href="<?php echo get_site_url(); ?>" style="white-space: nowrap;">
							<img class="header-logo-one" src="<?php echo get_site_url();?>/wp-content/uploads/2023/01/AHS-Logo-2C-RGB.png">
							<img class="header-logo-two" src="<?php echo get_field('right_side_image_two', get_option('page_on_front'));?>">
						</a>
						
					</div>
					<div class="col-4 col-sm-8 d-flex align-items-center">
			
			
			
						<div class="collapse navbar-collapse" id="navbarNav">
							<div class="mx-auto"></div>
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link text-white" href="<?php echo get_site_url(); ?>/#contact">Contact</a>
								</li>
							</ul>
						</div>
				
				
				
					</div>
				</div>
            </div>
        </nav>
    </div>
</section>

    <div class="bg-block mobile-none">
        <h3 class="policies--heading"><?php echo get_field('policy_page_heading'); ?></h3>
    </div>

    <div class="privacy-policy-div">
        <h5 class="privacy-policy-heading"><?php echo get_field('policy_heading'); ?></h5>
        <?php echo get_field('policy_description'); ?>
    </div>


<section class="footer-section mobile-none">
    <div class="container">
        <div class="row footer-sec-block">
            <div class="col-sm-6 text-center">
                <div class="footer-img-block">
                    <img class="footrt-logo-one" src="<?php echo get_field('footer_logo_one_desktop_screen');?>">
                    <img class="footrt-logo-two" src="<?php echo get_field('footer_logo_two_desktop_screen');?>">
                </div>
                <div class="footer-text">
                    
                        <?php echo get_field('footer_description_desktop_screen');?>
                
                    <i class="fa fa-linkedin-square"></i>
                </div>
            </div>
            <div class="white-divider desktop-none">
                <hr>
            </div>
            <div class="col-sm-3 text-center">

                <?php 
                                                if (has_nav_menu('register_nav_menus')) 
                                                    wp_nav_menu( array('theme_location' => 'footer-menu' ) );
                                                 
                                               $defaults = array(
                                                    'theme_location'  => 'footer-menu',
                                                    'menu'            => '',
                                                    'container'       => false,
                                                    'container_class' => '',
                                                    'container_id'    => '',
                                                    'menu_class'      => 'menu',
                                                    'menu_id'         => '',
                                                    'echo'            => true,
                                                    'fallback_cb'     => 'wp_page_menu',
                                                    'before'          => '',
                                                    'after'           => '',
                                                    'link_before'     => '',
                                                    'link_after'      => '',
                                                    'items_wrap'      => '<ul class="list">%3$s</ul>',
                                                    'depth'           => 3,
                                                    'walker'          => ''
                                                    );
                                                wp_nav_menu( $defaults );
           
                                           ?>
            </div>
            <div class="white-divider desktop-none">
                <hr>
            </div>
            <div class="col-sm-3 text-center">

                <?php 
                                                if (has_nav_menu('register_nav_menus')) 
                                                    wp_nav_menu( array('theme_location' => 'footer-menu-one' ) );
                                                 
                                               $defaults = array(
                                                    'theme_location'  => 'footer-menu-one',
                                                    'menu'            => '',
                                                    'container'       => false,
                                                    'container_class' => '',
                                                    'container_id'    => '',
                                                    'menu_class'      => 'menu',
                                                    'menu_id'         => '',
                                                    'echo'            => true,
                                                    'fallback_cb'     => 'wp_page_menu',
                                                    'before'          => '',
                                                    'after'           => '',
                                                    'link_before'     => '',
                                                    'link_after'      => '',
                                                    'items_wrap'      => '<ul class="list">%3$s</ul>',
                                                    'depth'           => 3,
                                                    'walker'          => ''
                                                    );
                                                wp_nav_menu( $defaults );
           
                                           ?>
            </div>
            <div class="col-sm-3 text-center"></div>
        </div>
    </div>
</section>

<section class="footer-section mobile-footer desktop-none">
    <div class="container">
        <div class="row mobile-footer-block">
            <div class="col-sm-6 text-center">
                <div class="footer-img-block">
                    <img class="footrt-logo-one" src="<?php echo get_field('footer_logo_one_mobile_screen');?>">
                    <img class="footrt-logo-two" src="<?php echo get_field('footer_logo_two_mobile_screen');?>">
                </div>
                <div class="footer-text">
                    <p>
                        <?php echo get_field('footer_description_mobile_screen');?>
                    </p>
                    <i class="fa fa-linkedin-square"></i>
                </div>
            </div>
            <div class="white-divider desktop-none">
                <hr>
            </div>
            <div class="col-sm-3 text-center">

                <?php 
                                                if (has_nav_menu('register_nav_menus')) 
                                                    wp_nav_menu( array('theme_location' => 'footer-menu' ) );
                                                 
                                               $defaults = array(
                                                    'theme_location'  => 'footer-menu',
                                                    'menu'            => '',
                                                    'container'       => false,
                                                    'container_class' => '',
                                                    'container_id'    => '',
                                                    'menu_class'      => 'menu',
                                                    'menu_id'         => '',
                                                    'echo'            => true,
                                                    'fallback_cb'     => 'wp_page_menu',
                                                    'before'          => '',
                                                    'after'           => '',
                                                    'link_before'     => '',
                                                    'link_after'      => '',
                                                    'items_wrap'      => '<ul class="list">%3$s</ul>',
                                                    'depth'           => 3,
                                                    'walker'          => ''
                                                    );
                                                wp_nav_menu( $defaults );
           
                                           ?>
            </div>
            <div class="white-divider desktop-none">
                <hr>
            </div>
            <div class="col-sm-3 text-center">

                <?php 
                                                if (has_nav_menu('register_nav_menus')) 
                                                    wp_nav_menu( array('theme_location' => 'footer-menu-one' ) );
                                                 
                                               $defaults = array(
                                                    'theme_location'  => 'footer-menu-one',
                                                    'menu'            => '',
                                                    'container'       => false,
                                                    'container_class' => '',
                                                    'container_id'    => '',
                                                    'menu_class'      => 'menu',
                                                    'menu_id'         => '',
                                                    'echo'            => true,
                                                    'fallback_cb'     => 'wp_page_menu',
                                                    'before'          => '',
                                                    'after'           => '',
                                                    'link_before'     => '',
                                                    'link_after'      => '',
                                                    'items_wrap'      => '<ul class="list">%3$s</ul>',
                                                    'depth'           => 3,
                                                    'walker'          => ''
                                                    );
                                                wp_nav_menu( $defaults );
           
                                           ?>
            </div>
            <div class="col-sm-3 text-center"></div>
        </div>
    </div>
</section>
   

<?php get_header();

?>







