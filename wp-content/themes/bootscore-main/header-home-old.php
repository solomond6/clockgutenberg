<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 * 
 * @version 5.1.3.1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
  <?php wp_body_open(); ?>

  <div id="to-top"></div>

  <div id="page" class="site">

    <header id="masthead" class="site-header">

      <div class="cocktale-header">
        <!-- <div class="container">
          <div class="text-center">
            <a class="navbar-brand xs d-md-none" href="<?php //echo esc_url(home_url()); ?>"><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/Cocktales_logo.png" alt="logo" class="logo xs" style="width: 40px;"></a>
            <a class="navbar-brand md d-none d-md-block" href="<?php //echo esc_url(home_url()); ?>"><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/Cocktales_logo.png" style="width: 60px;" alt="logo" class="logo md"></a>
          </div> 
        </div> -->
        <nav id="nav-main" class="navbar navbar-expand-lg navbar-light">

          <div class="container">

            <!-- Navbar Brand -->
            <!-- <a class="navbar-brand xs d-md-none" href="<?php //echo esc_url(home_url()); ?>"><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/Cocktales_logo.png" alt="logo" class="logo xs" style="width: 50px;"></a>
            <a class="navbar-brand md d-none d-md-block" href="<?php //echo esc_url(home_url()); ?>"><img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/Cocktales_logo.png" style="width: 70px;" alt="logo" class="logo md"></a> -->

            <!-- Offcanvas Navbar -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
              <div class="offcanvas-header bg-light">
                <span class="h5 mb-0"><?php esc_html_e('Menu', 'bootscore'); ?></span>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <!-- Bootstrap 5 Nav Walker Main Menu -->
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => false,
                  'menu_class' => '',
                  'fallback_cb' => '__return_false',
                  'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav nav justify-content-center ms-auto %2$s">%3$s</ul>',
                  'depth' => 2,
                  'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
                <!-- Bootstrap 5 Nav Walker Main Menu End -->
              </div>
            </div>


            <div class="header-actions d-flex align-items-center">

              <!-- Top Nav Widget -->
              <div class="top-nav-widget">
                <?php if (is_active_sidebar('top-nav')) : ?>
                  <div>
                    <?php dynamic_sidebar('top-nav'); ?>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Searchform Large -->
              <div class="d-none d-lg-block ms-1 ms-md-2 top-nav-search-lg">
                <?php if (is_active_sidebar('top-nav-search')) : ?>
                  <div>
                    <?php dynamic_sidebar('top-nav-search'); ?>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Search Toggler Mobile -->
              <button class="btn btn-outline-secondary d-lg-none ms-1 ms-md-2 top-nav-search-md" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-search" aria-expanded="false" aria-controls="collapse-search">
                <i class="fas fa-search"></i><span class="visually-hidden-focusable">Search</span>
              </button>

              <!-- Navbar Toggler -->
              <button class="btn btn-outline-secondary d-lg-none ms-1 ms-md-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
                <i class="fas fa-bars"></i><span class="visually-hidden-focusable">Menu</span>
              </button>

            </div><!-- .header-actions -->

          </div><!-- .container -->

        </nav><!-- .navbar -->
        <div class="container-fluid p-0" style="z-index: 1000;">
          <video controls="controls" preload="metadata" class="header-logo logo md" style="width: 100%; height: 2vvh;">
            <source src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/media/LA-Wade-Reel.mp4#t=2.5" type="video/mp4">
          </video>
        </div>
        <div class="container">
          <div class="row">
            <!-- <div class="col-md-6 leadingText">
              <div class="mt-5 mb-5 pt-5">
                <h1 class="fs-1 text-white pt-5" >
                <img src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/img/lade.png" class="lade-logo" alt="logo">
                <span>L.A. WADE</span></h1>
                <h4 class="fs-4 text-white" >Author and Relation Wellness Expert</h4>
                <?php //echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
              </div>
            </div>
            <div class="col-md-6 text-center leadingImg mt-5 mb-5" style="z-index: 1000;">
              <video controls="controls" preload="metadata" class="header-logo logo md mt-5 mt-5" style="width: 100%;">
                <source src="<?php //echo esc_url(get_stylesheet_directory_uri()); ?>/media/LA-Wade-Reel.mp4#t=2.5" type="video/mp4">
              </video>
            </div>
          </div> -->
          <div class="containerh">
              <!-- Creating a SVG image -->
              <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
                  <defs>
                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                      <stop offset="0%" style="stop-color:#FF007A;stop-opacity:1" />
                      <stop offset="100%" style="stop-color:#6B1C85;stop-opacity:1" />
                    </linearGradient>
                  </defs>
                  <path d="M0, 180 C150, 250 350, 100 500, 180 L500, 00 L0, 0 Z" fill="url(#grad1)" style="stroke:none;"></path>
              </svg>
          </div>
          <div class="clear"></div>
          <?php //echo do_shortcode( '[rt-testimonial id="54" title=""]' ) ?>
        </div>
        <!-- Top Nav Search Mobile Collapse -->
        <div class="collapse container d-lg-none" id="collapse-search">
          <?php if (is_active_sidebar('top-nav-search')) : ?>
            <div class="mb-2">
              <?php dynamic_sidebar('top-nav-search'); ?>
            </div>
          <?php endif; ?>
        </div>

      </div><!-- .fixed-top .bg-light -->

    </header><!-- #masthead -->

    <?php bootscore_ie_alert(); ?>
