    <footer class="footer px-3 py-5">
      <div class="container px-0">
        <div class="row justify-content-md-between">
          <div class="col-12 col-sm-6 d-flex justify-content-center justify-content-sm-start align-items-center mb-4">
            <a href="<?php echo get_home_url(); ?>" class="nav d-xl-none">
              <img src="<?php gtdu('/assets/logo_final/logo_optionmetrics_footer.PNG'); ?>" alt="Logo" />
            </a>
          </div>
          <div class="col-12 col-sm-6 d-flex justify-content-center justify-content-sm-end mb-4 align-items-center">
            <ul class="nav d-xl-none">
              <?php echo wp_nav_menu( array(
                'theme_location'  => 'social-menu',
                'menu'            => 'Social Navigation',
                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
              )); ?>
            </ul>
          </div>
          <div class="col-md-auto d-none d-xl-block">
            <a href="<?php echo get_home_url(); ?>">
              <img src="<?php gtdu('/assets/logo_final/logo_optionmetrics_footer.PNG'); ?>" alt="Logo">
            </a>
          </div>
          <div class="col-4 col-lg-auto text-center text-lg-left">
            <div class="list-group mb-5" id="list-tab-about" role="tablist">
              <?php echo strip_tags( wp_nav_menu( array(
                'theme_location'  => 'footer-about',
                'menu'            => 'Footer About Navigation',
                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
              )), '<a>'); ?>
            </div>
          </div>
          <div class="col-4 col-lg-auto text-center text-lg-left">
            <div class="list-group mb-5" id="list-tab-data-products" role="tablist">
              <?php echo strip_tags( wp_nav_menu( array(
                'theme_location'  => 'footer-about',
                'menu'            => 'Footer Data Products Navigation',
                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
              )), '<a>'); ?>
            </div>
          </div>
          <div class="col-4 col-lg-auto text-center text-lg-left">
            <div class="list-group mb-5" id="list-tab-news-events" role="tablist">
              <?php echo strip_tags( wp_nav_menu( array(
                'theme_location'  => 'footer-about',
                'menu'            => 'Footer News & Events Navigation',
                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
              )), '<a>'); ?>
            </div>
          </div>
          <div class="col-4 col-lg-auto text-center text-lg-left">
            <div class="list-group mb-5" id="list-tab-contact" role="tablist">
              <?php echo strip_tags( wp_nav_menu( array(
                'theme_location'  => 'footer-about',
                'menu'            => 'Footer Research Navigation',
                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
              )), '<a>'); ?>
            </div>
          </div>
          <div class="col-4 col-lg-auto text-center text-lg-left">
            <div class="list-group mb-5" id="list-tab-contact" role="tablist">
              <?php echo strip_tags( wp_nav_menu( array(
                'theme_location'  => 'footer-about',
                'menu'            => 'Footer Contact Navigation',
                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
              )), '<a>'); ?>
            </div>
          </div>
          <div class="col-4 col-lg-auto text-center text-lg-left">
            <div class="list-group mb-5" id="list-tab-legal" role="tablist">
              <?php echo strip_tags( wp_nav_menu( array(
                'theme_location'  => 'footer-about',
                'menu'            => 'Footer Legal Navigation',
                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
              )), '<a>'); ?>
            </div>
          </div>
          <div class="col-md-auto justify-content-end d-none d-xl-block">
            <ul class="nav">
              <?php echo wp_nav_menu( array(
                'theme_location'  => 'social-menu',
                'menu'            => 'Social Navigation',
                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
              )); ?>
            </ul>
          </div>
          <div class="col-md-12 text-center rights mt-5 mb-3">Copyright © 2018 OptionMetrics, LLC</div>
        </div>
      </div>
    </footer>
    <?php get_template_part( 'partials/social', 'footer' ); ?>
    <?php wp_footer(); ?>
  </body>
</html>
