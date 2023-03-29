<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>

<footer>

  <div class="bootscore-footer bg-light pt-5 pb-3">
    <div class="container">

      <!-- Top Footer Widget -->
      <?php if (is_active_sidebar('top-footer')) : ?>
        <div>
          <?php dynamic_sidebar('top footer'); ?>
        </div>
      <?php endif; ?>

      <div class="row">

        <!-- Footer 1 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-1')) : ?>
            <div>
              <?php dynamic_sidebar('footer-1'); ?>
            </div>
          <?php endif; ?>
        </div>

        <!-- Footer 2 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-2')) : ?>
            <div>
              <?php dynamic_sidebar('footer-2'); ?>
            </div>
          <?php endif; ?>
        </div>

        <!-- Footer 3 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-3')) : ?>
            <div>
              <?php dynamic_sidebar('footer-3'); ?>
            </div>
          <?php endif; ?>
        </div>

        <!-- Footer 4 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-4')) : ?>
            <div>
              <?php dynamic_sidebar('footer-4'); ?>
            </div>
          <?php endif; ?>
        </div>
        <!-- Footer Widgets End -->

      </div>

      <div class="row">
        <div class="col-md-3 text-left">
          <!-- Bootstrap 5 Nav Walker Footer Menu -->
          <?php
            wp_nav_menu(array(
              'theme_location' => 'footer-menu',
              'container' => false,
              'menu_class' => '',
              'fallback_cb' => '__return_false',
              'items_wrap' => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
              'depth' => 1,
              'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
          ?>
          <!-- Bootstrap 5 Nav Walker Footer Menu End -->
        </div>
        <div class="col-md-3 text-center">
          <img class="footer-logo" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/Cocktales_logo.png" alt="logo" class="logo md">
        </div>
        <div class="col-md-5 text-center">
          <div class="tnp tnp-subscription">
            <form method="post" action="http://localhost/cocktales/?na=s">
              <input type="hidden" name="nlang" value="">
              <div class="input-group mb-3 p-0">
                <div class="" style="width: 70%;">
                  <input type="email" name="ne" id="tnp-1" value="" required class="tnp-email form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="button-addon2">
                </div>
                <button class="tnp-submit btn btn-primary" type="submit" id="button-addon2">Subscribe</button>
              </div>
            </form>
          </div>
          <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="bootscore-info bg-light text-white py-2 text-center">
    <div class="container">
      <small>&copy;&nbsp;<?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></small>
    </div>
  </div>

</footer>

<div class="top-button position-fixed zi-1020">
  <a href="#to-top" class="btn btn-primary shadow"><i class="fas fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>