<?php
   /* Template Name: testpage */ 
   
   ?>
<!-- mobile banner -->
<section class="hero-section mobile-hero-section desktop-none">
   <div class="hero-bg-block">
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
         <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
               <div class="mx-auto"></div>
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
                        <?php echo get_field('banner_strength_heading');?> <span
                           class="banner-desc">
                        <?php echo get_field('banner_description');?>
                        </span>
                        </span><span class="orange-text">
                        <?php echo get_field('banner_title');?>
                        </span> 
                     </h1>
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
                  <div class="right-logo-block">
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
         <div class="container">
            <!-- <a class="navbar-brand" href="#">Web Zone</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
               aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <div class="mx-auto"></div>
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
                        <?php echo get_field('banner_strength_heading');?> <span
                           class="banner-desc">
                        <?php echo get_field('banner_description');?>
                        </span>
                        </span><span class="orange-text">
                        <?php echo get_field('banner_title');?>
                        </span> 
                     </h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row logo-text">
         <div class="col-md-6 p-0 mobile-none">
            <div class="hero-left-text-block">
               <p>
                  <?php echo get_field('left_side_description');?>
               </p>
            </div>
         </div>
         <div class="col-md-3 p-0">
            <div class="right-logo-block">
               <?php 
                  $mobileImage = get_field('right_side_image_one');
                    if($mobileImage)
                   {
                  ?>
               <img class="right-logo-one" src="<?php echo $mobileImage;?>">
               <?php } ?>
            </div>
         </div>
         <div class="col-md-3 p-0">
            <div class="right-logo-block">
               <?php 
                  $mobileImage2 = get_field('right_side_image');
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
                  <?php echo get_field('left_side_description');?>
               </p>
            </div>
         </div>
      </div>
      <div class="row logo-sec">
         <div class="col logo1">
            <a href="<?php echo get_field('logo_one_url');?>"><img
               src="<?php echo get_field('logo_one');?>" alt="logo1"></a>
         </div>
         <div class="col logo2">
            <a href="<?php echo get_field('logo_two_url');?>"><img
               src="<?php echo get_field('logo_two');?>" alt="logo1"></a>
         </div>
         <div class="col scroll-block">
            <div class="scroll-block">
               <a class="mouseDown" href="#section1" title="Scroll Down"><span></span>
               </a>
            </div>
         </div>
         <div class="col">
            <a href="<?php echo get_field('logo_three_url');?>"><img
               src="<?php echo get_field('logo_three');?>" alt="logo1"></a>
         </div>
         <div class="col">
            <a href="<?php echo get_field('logo_four_url');?>"><img
               src="<?php echo get_field('logo_four');?>" alt="logo1"></a>
         </div>
      </div>
   </div>
</section>
<section class="logo-section mobile-none">
   <div class="container">
      <div class="row logo-sec">
         <div class="col">
            <a href="<?php echo get_field('logo_one_url');?>"><img
               src="<?php echo get_field('logo_one');?>" alt="logo1"></a>
         </div>
         <div class="col">
            <a href="<?php echo get_field('logo_two_url');?>"><img
               src="<?php echo get_field('logo_two');?>" alt="logo1"></a>
         </div>
         <div class="col scroll-block">
            <div class="scroll-block">
               <a class="mouseDown" href="#section1" title="Scroll Down"><span></span>
               </a>
            </div>
         </div>
         <div class="col">
            <a href="<?php echo get_field('logo_three_url');?>"><img
               src="<?php echo get_field('logo_three');?>" alt="logo1"></a>
         </div>
         <div class="col">
            <a href="<?php echo get_field('logo_four_url');?>"><img
               src="<?php echo get_field('logo_four');?>" alt="logo1"></a>
         </div>
      </div>
   </div>
</section>
<div class="bg-block mobile-none"></div>
<div class="bg-block-mobile desktop-none"></div>
<section class="product-section">
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
<section class="contact-form-section">
   <div class="container text-white text-center">
      <div class="row">
         <div class="col mobile-none">&nbsp;</div>
         <div class="col-md-8">
            <div class="contact-title-block mobile-none">
               <h3>
                  <?php echo get_field('get_in_touch_heading');?>
               </h3>
               <?php echo get_field('description');?>
            </div>
            <div class="contact-title-block desktop-none">
               <h3 class="m-btn">
                  <?php echo get_field('get_in_touch_heading');?>
               </h3>
            
               <?php echo get_field('description');?>
            </div>
         </div>
         <div class="col mobile-none">&nbsp;</div>
      </div>
      <div class="row">
         <div class="col-md-12">
           
            <?php echo do_shortcode( '[contact-form-7 id="14" title="contact form"]'); ?>
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
   <div class="container">
      <div class="row">
         <div class="col-sm-6 text-center">
            <div class="footer-img-block">
               <img class="footrt-logo-one" src="<?php echo get_field('footer_logo_one');?>">
               <img class="footrt-logo-two" src="<?php echo get_field('footer_logo_two');?>">
            </div>
            <div class="footer-text">
               <p>
                  <?php echo get_field('footer_description');?>
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
<!-- for mobile -->
<section class="footer-section mobile-footer desktop-none">
   <div class="container">
      <div class="row mobile-footer-block">
         <div class="col-sm-6 text-center">
            <div class="footer-img-block">
               <img class="footrt-logo-one" src="<?php echo get_field('footer_logo_one');?>">
               <img class="footrt-logo-two" src="<?php echo get_field('footer_logo_two');?>">
            </div>
            <div class="footer-text">
               <p>
                  <?php echo get_field('footer_description');?>
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