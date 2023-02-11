<?php
 /* Template Name: Cookies Policy */ 

?>

<style>
.page-id-287 {
    font-family: 'Poppins';
}
.hero-section:before, .page-id-3 .hero-section:after {
    display: none;
}
.hero-section {
    background-image: none;
    background: red;
    display: block;
}
nav.navbar.fixed-top.navbar-expand-lg.navbar-dark.p-md-3 {
    margin: 0;
}
.banner-title.heacontent.text-center {
    padding-top: 65px
}
#wrapper {
    display: none;
}
h3.policies--heading {
    position: relative;
    top: 45%;
    left: 5%;
    color: #fff;
    font-size: 34px;
    text-transform: uppercase;
    max-width: 80%;
}
.bg-block {
    height: 30%;
}
.page-id-287 .privacy-policy-div {
    padding: 40px 8%;
}
h5.privacy-policy-heading {
    color: #DF5928;
    font-weight: 700;
    font-size: 30px;
    margin-bottom: 25px;
    text-transform: capitalize;
}
.privacy-policy-div p {
    color: #3C3C3C;
    font-size: 22px;
    font-weight: 500;
}
a.nav-link.text-white {
    text-transform: uppercase;
}
ul, .page-id-3 ol {
    padding-left: 2rem !important;
    font-size: 22px;
    font-weight: 500;
}
.footer-section.mobile-none {
    display: block;
}
.footer-section .desktop-none {
    display: none;
}

@media screen and (max-width: 767px) {
    .privacy-policy-div p, .page-id-3 ul, .page-id-3 ol {
        font-size: 14px;
    }
    .footer-section.mobile-none {
        display: none;
    }
     .footer-section .desktop-none {
        display: block;
    }
}

@media screen and (max-width: 991px) {
     .privacy-policy-div p, .page-id-3 ul, .page-id-3 ol {
        font-size: 18px;
    }
    .mobile-none {
        display: block;
    }
     h3.policies--heading {
        max-width: 85%;
        font-size: 24px;
    }
     a.nav-link.text-white {
        right: 10px;
    }
     .privacy-policy-div {
        padding: 0px 8% 40px;
    }
}
</style>


<!-- mobile banner -->
<section class="hero-section mobile-hero-section desktop-none">
    <div class="hero-bg-block">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact</a>
                        </li>
                    </ul>
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