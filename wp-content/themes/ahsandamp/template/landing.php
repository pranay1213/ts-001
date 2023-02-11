<?php
   /* Template Name: ashandamp */ 
   
   ?>
<!-- mobile banner -->
<section class="hero-section mobile-hero-section desktop-none">
    <div class="hero-bg-block">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
            <div class="container" style="display: block; padding: 0!important;">
				
				<div class="row">
					<div class="col-8 d-flex align-items-center">
						
						<img class="header-logo-one" src="<?php echo get_site_url();?>/wp-content/uploads/2023/01/AHS-Logo-2C-RGB.png" style="margin: 0 20px 0 0; width: 60%!important;">
						<img class="header-logo-two" src="<?php echo get_field('right_side_image_two');?>" style="width: 30%!important;">
						
					</div>
					<div class="col-4 d-flex align-items-center">
						<!-- <a class="navbar-brand" href="#">Web Zone</a> -->
						<!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					   <span class="navbar-toggler-icon"></span>
					   </button> -->
					   
						<div class="collapse navbar-collapse" id="navbarNav">
							<div class="mx-auto"></div>
							<!--   <ul class="navbar-nav"> -->
							<!-- <li class="nav-item">
							 <a class="nav-link text-white" href="#">Home</a>
							 </li>
							 <li class="nav-item">
							 <a class="nav-link text-white" href="#">About</a>
							 </li>
							 <li class="nav-item">
							 <a class="nav-link text-white" href="#">Blog</a>
							 </li>
							 <li class="nav-item">
							 <a class="nav-link text-white" href="#">Pricing</a>
							 </li> -->
							<!-- <li class="nav-item">
							 <a class="nav-link text-white" href="#">Contact</a>
						  </li> -->

							<?php 
								if (has_nav_menu('register_nav_menus')) 
									wp_nav_menu( array('theme_location' => 'main-menu' ) );
								 
							   $defaults = array(
									'theme_location'  => 'main-menu',
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
									'items_wrap'      => '<ul class="navbar-nav">%3$s</ul>',
									'depth'           => 3,
									'walker'          => ''
									);
								wp_nav_menu( $defaults );

						   ?>
							<!-- </ul> -->
						</div>
					</div>
				</div>
            </div>
        </nav>
        <div class="banner-image d-flex justify-content-center align-items-center">
            <div class=" banner-title heacontent text-center">
                <!-- <h1 class="text-white">
               <pre><span class="orangr-title">Strength</span>
               <span class="white-title"> numbers</span><span class="orangr-title">.</span></pre></h1> -->
                <div class="container">
                    <div class="row banner-text-block">
                        <div class="col p-0">
                            <h1 class="banner-titles-block"><span class="banner-orange-text">
                                    <?php echo get_field('banner_desktop_screen_strength_heading');?> <span
                                        class="banner-desc">
                                        <?php echo get_field('banner_desktop_screen_description');?>
                                    </span>
                                </span><span class="orange-text">
                                    <?php echo get_field('banner_desktop_screen_title');?>
                                </span> </h1>
                            <!--  <p class="banner-pra-mobile"><span>Welcome to Automated Handling Solutions<br> & Advanced Material Processing</span></p> -->
                        </div>
                    </div>
                </div>
                <div class="row logo-text">
                    <div class="col-md-6 mobile-none">
                        <div class="hero-left-text-block">
                            <p>
                                <?php echo get_field('left_side_description');?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right-logo-block ">

                            <img class="right-logo-one" src="<?php echo get_field('right_side_image_one');?>">

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right-logo-block">
                            <img class="right-logo-two" src="<?php echo get_field('right_side_image_two');?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- new-code -->
<section class="hero-section mobile-none">
    <div class="hero-bg-block">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
            <div class="container" style="display: block;">
			
				<div class="row">
					<div class="col-4 d-flex align-items-center">
						
						<img class="header-logo-one" src="<?php echo get_site_url();?>/wp-content/uploads/2023/01/AHS-Logo-2C-RGB.png" style="margin: 0 20px 0 0; width: 60%!important;">
						<img class="header-logo-two" src="<?php echo get_field('right_side_image_two');?>" style="width: 30%!important;">
						
					</div>
					<div class="col-8 d-flex align-items-center">
			
						<!-- <a class="navbar-brand" href="#">Web Zone</a> -->
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
							aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<div class="mx-auto"></div>
							<!-- <ul class="navbar-nav"> -->
							<!-- <li class="nav-item">
							 <a class="nav-link text-white" href="#">Home</a>
							 </li>
							 <li class="nav-item">
							 <a class="nav-link text-white" href="#">About</a>
							 </li>
							 <li class="nav-item">
							 <a class="nav-link text-white" href="#">Blog</a>
							 </li>
							 <li class="nav-item">
							 <a class="nav-link text-white" href="#">Pricing</a>
							 </li> -->
							<!-- <li class="nav-item">
							 <a class="nav-link text-white" href="#">CONTACT</a>
						  </li> -->

							<?php 
								if (has_nav_menu('register_nav_menus')) 
									wp_nav_menu( array('theme_location' => 'main-menu' ) );
								 
							   $defaults = array(
									'theme_location'  => 'main-menu',
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
									'items_wrap'      => '<ul class="navbar-nav">%3$s</ul>',
									'depth'           => 3,
									'walker'          => ''
									);
									wp_nav_menu( $defaults );

							?>


							<!-- </ul> -->
						</div>
					
					</div>
                </div>
            </div>
        </nav>
        <div class="banner-image d-flex justify-content-center align-items-center">
            <div class=" banner-title heacontent text-center">
                <!-- <h1 class="text-white">
               <pre><span class="orangr-title">Strength</span>
               <span class="white-title"> numbers</span><span class="orangr-title">.</span></pre></h1> -->
                <div class="container">
                    <div class="row banner-text-block">
                        <div class="col p-0">
                            <h1 class="banner-titles-block"><span class="banner-orange-text">
                                    <?php echo get_field('banner_mobile_screen_strength_heading');?> <span
                                        class="banner-desc">
                                        <?php echo get_field('banner_mobile_screen_description');?>
                                    </span>
                                </span><span class="orange-text">
                                    <?php echo get_field('banner_mobile_screen_title');?>
                                </span> </h1>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row logo-text">
            <div class="col-md-6 p-0 mobile-none">
                <div class="hero-left-text-block">
                    <p>
                        <?php echo get_field('left_side_description_mobile_screen');?>
                    </p>
                </div>
            </div>
            <div class="col-md-3 p-0">
                <div class="right-logo-block right-image-one">
                    <?php 
                   $mobileImage = get_field('right_side_image_one_mobile_screen');
                     if($mobileImage)
                    {
                   ?>
                    <img class="right-logo-one" src="<?php echo $mobileImage;?>">
                    <?php } ?>

                </div>
            </div>
            <div class="col-md-3 p-0">
                <div class="right-logo-block right-image-two">
                    <?php 
                       $mobileImage2 = get_field('right_side_image_mobile_screen');
                       if($mobileImage2)
                       {
                      ?>

                    <img class="right-logo-two" src="<?php echo $mobileImage2;?>">
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- for mobile -->
<section class="logo-section logo-mobile-sect desktop-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-left-text-block">
                    <p>
                        <?php echo get_field('left_side_description_mobile_screen');?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row logo-sec">
            <div class="col logo1">
                <a href="<?php echo get_field('desktop_logo_one_url');?>"><img
                        src="<?php echo get_field('desktop_logo_one');?>" alt="logo1"></a>
            </div>
            <div class="col logo2">
                <a href="<?php echo get_field('desktop_logo_two_url');?>"><img
                        src="<?php echo get_field('desktop_logo_two');?>" alt="logo1"></a>
            </div>
            <div class="col scroll-block">
                <div class="scroll-block">
                    <a class="mouseDown" href="#section1" title="Scroll Down"><span></span>
                    </a>
                </div>
            </div>
            <div class="col">
                <a href="<?php echo get_field('desktop_logo_three_url');?>"><img
                        src="<?php echo get_field('desktop_logo_three');?>" alt="logo1"></a>
            </div>
            <div class="col">
                <a href="<?php echo get_field('desktop_logo_four_url');?>"><img
                        src="<?php echo get_field('desktop_logo_four');?>" alt="logo1"></a>
            </div>
        </div>
    </div>
</section>
<section class="logo-section mobile-none">
    <div class="container">
        <div class="row logo-sec">
            <div class="col p-0 logo-1">
                <a href="<?php echo get_field('mobile_logo_one_url');?>" target="_blank"><img
                        src="<?php echo get_field('mobile_logo_one');?>" alt="logo1"></a>
            </div>
            <div class="col p-0 logo-2">
                <a href="<?php echo get_field('mobile_logo_two_url');?>"  target="_blank"><img
                        src="<?php echo get_field('mobile_logo_two');?>" alt="logo1"></a>
            </div>
            <div class="col p-0 ">
                <div class="scroll-block">
                    <a class="mouseDown" href="#machine" title="Scroll Down"><span></span>
                    </a>
                </div>
            </div>
            <div class="col p-0 logo-3">
                <a href="<?php echo get_field('mobile_logo_three_url');?>"  target="_blank"><img
                        src="<?php echo get_field('mobile_logo_three');?>" alt="logo1"></a>
            </div>
            <div class="col p-0 logo-4">
                <a href="<?php echo get_field('mobile_logo_four_url');?>"  target="_blank"><img
                        src="<?php echo get_field('mobile_logo_four');?>" alt="logo1"></a>
            </div>
        </div>
    </div>
</section>
<div class="bg-block mobile-none"></div>
<div class="bg-block-mobile desktop-none"></div>
<section class="product-section" id="machine">
    <div class="container text-white text-center">
        <div class="row">
            <div class="col mobile-none">&nbsp;</div>
            <div class="col-md-10">
                <div class="product-title-block">
                    <p>
                        <?php echo get_field('advancing_engineering_capabilities_heading');?>
                    </p>
                    <h3>
                        <?php echo get_field('advancing_engineering_capabilities');?>
                    </h3>
                </div>
            </div>
            <div class="col mobile-none">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product-img-block">
                    <img src="<?php echo get_field('advancing_engineering_image');?>" alt="product">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="engg-section">
    <div class="first-block">
        <div class="container">
            <div class="row engg-sec-block">
                <div class="col p-0">
                    <div class="engg-block">
                        <!-- <p> With AHS combining the material handling systems of Spiroflow and Cablevey
                     Conveyors, and AMP integrating material processing systems of Kason Corporation
                     and Marion Process Solutions, the result is two unrivalled platform companies
                     that deliver integrated core competencies and market leading product portfolios
                     to customers globally.
                  </p> -->
                        <?php echo get_field('bottom_left_side_description');?>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="engg-img-block">
                        <img src="<?php echo get_field('bottom_right_side_image');?>" alt="engg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="last-block"></div>
<section class="contact-form-section" id="contact">
    <div class="container text-white text-center">
        <div class="row">
            <div class="col mobile-none">&nbsp;</div>
            <div class="col-md-8">
                <div class="contact-title-block mobile-none">
                    <h3>
                        <?php echo get_field('get_in_touch_desktop_screen_heading');?>
                    </h3>
                    <!-- <p>Want to learn more about our solutions? Have a general question?
                  Let’s connect! Call or email us, or simply fill out the contact form below. We look forward
                  to starting a dialogue.
               </p> -->
                    <?php echo get_field('desktop_screen_description');?>
                </div>
                <div class="contact-title-block desktop-none">
                    <h3 class="m-btn">
                        <?php echo get_field('get_in_touch_mobile_screen_heading');?>
                    </h3>
                    <!--  <p>Want to learn more about our solutions? Have a general question?
                  Let’s connect! Call or email us, or simply fill out the contact form below. We look forward
                  to starting a dialogue.
               </p> -->
                    <?php echo get_field('mobile_screen_description');?>
                </div>
            </div>
            <div class="col mobile-none">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- <div class="contact-title-block">
               <h3>Contact Information</h3>
               </div> -->
                <?php //echo do_shortcode( '[contact-form-7 id="14" title="contact form"]'); ?>
                <p>
                <div class="col-sm-12 accep desktop-none">
                    <?php echo get_field('contact_us_bottom_description');?>
                </div>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="footer-section mobile-none">
    <div class="footer-after-sec">
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
    </div>
</section>
<!-- for mobile -->
<section class="footer-section mobile-footer desktop-none">
    <div class="container">
        <div class="row mobile-footer-block">
            <div class="col-sm-6 text-center">
                <div class="footer-img-block">
                    <img class="footrt-logo-one" src="<?php echo get_field('footer_logo_one_mobile_screen');?>">
                    <img class="footrt-logo-two" src="<?php echo get_field('footer_logo_two_mobile_screen');?>">
                </div>
                <div class="footer-text">
                    
                        <?php echo get_field('footer_description_mobile_screen');?>
                    
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