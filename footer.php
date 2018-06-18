    <footer>
      <div class="container" style="max-width:1600px">
        <div class="row justify-content-md-center">
          <div class="col-md-2">
            <a href="/">
              <img src="<?php gtdu('/assets/logo_white.png'); ?>" alt="Logo">
            </a>
          </div>
          <div class="col-md-auto">
            <div class="list-group" id="list-tab-about" role="tablist">
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
          <div class="col-md-auto">
            <div class="list-group" id="list-tab-data-products" role="tablist">
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
          <div class="col-md-auto">
            <div class="list-group" id="list-tab-news-events" role="tablist">
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
          <div class="col-md-auto">
            <div class="list-group" id="list-tab-contact" role="tablist">
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
          <div class="col-md-auto">
            <div class="list-group" id="list-tab-legal" role="tablist">
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
          <div class="col-md-2 d-flex justify-content-end">
            <ul class="nav">
              <li class="nav-item"><a href="#" class="nav-link px-1"><img src="<?php gtdu('/assets/Icon_Linkedin.png'); ?>" alt="LinkedIn"></a></li>
              <li class="nav-item"><a href="#" class="nav-link px-1"><img src="<?php gtdu('/assets/Icon_Twitter.png'); ?>" alt=""></a></li>
              <li class="nav-item"><a href="#" class="nav-link px-1"><img src="<?php gtdu('/assets/Icon_Linkedin.png'); ?>" alt=""></a></li>
              <li class="nav-item"><a href="#" class="nav-link px-1"><img src="<?php gtdu('/assets/Icon_Linkedin.png'); ?>" alt=""></a></li>
              <li class="nav-item"><a href="#" class="nav-link px-1"><img src="<?php gtdu('/assets/Icon_Linkedin.png'); ?>" alt=""></a></li>
            </ul>
          </div>
          <div class="col-md-12 text-center">Copyright © 2016-2018 OptionMetrics, LLC</div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
