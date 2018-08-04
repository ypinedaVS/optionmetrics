<?php get_header(); ?>
<?php if( is_front_page() ) : ?>
  <header>
    <?php get_template_part( 'partials/carousel', 'home' ); ?>
  </header>
  <div class="container my-5 py-2">
    <div class="row d-flex align-items-center mb-5">
      <?php get_template_part( 'partials/cpu' ); ?>
    </div>
    <div class="row">
      <div class="col-12 px-lg-0">
        <p class="section-title montserrat-regular text-center mb-4">Data Analysis Products</p>
      </div>
      <div class="col-12 px-lg-0">
        <?php get_template_part( 'partials/maps' ); ?>
      </div>
      <div class="col-12 mb-5 px-lg-0">
        <?php get_template_part( 'partials/features', 'home' ); ?>
      </div>
    </div>

    <!-- Carousel -->
    <div class="row justify-content-center my-5 py-5">
      <div class="col-12 px-lg-0">
        <p class="section-title montserrat-regular text-center mb-4">Some of our Clients</p>
      </div>
      <?php echo do_shortcode( '[jssor-slider alias="carousel-slider.slider"]' )?>
    </div>

    <!-- News & Events -->
    <div class="row">
      <div class="col-12 px-lg-0">
        <div class="container bg-light-custom news-wrapper pb-0 px-lg-5">
          <div class="row">
            <div class="col-sm-12">
              <p class="section-title montserrat-regular text-center mb-4">News & Events</p>
            </div>
            <div class="col-md-6">
              <?php get_template_part( 'partials/news', 'featured' ); ?>
            </div>
            <div class="col-md-6">
              <div class="row">
                <?php get_template_part( 'partials/news', 'last-four' ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex align-items-center">
      <?php get_template_part( 'partials/why' ); ?>
    </div>
  </div>
<?php endif; ?>
<?php get_footer(); ?>
