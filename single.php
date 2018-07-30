<?php
  get_template_part( 'partials/page', 'hero' );
  the_post();
  $cat = get_the_category()[0]->slug;
?>

<div class="container">
  <div class="position-relative page-wrapper-up">
    <div class="row">
      <div class="col-12 p-4 p-md-5">
        <a href="<?php echo get_home_url() . '/' . $cat . '/'; ?>" class="btn btn-link text-left text-grey-light pl-lg-5">
          <span class="fa fa-long-arrow-left"></span>
          Back
        </a>
      </div>
      <div class="col-12 text-center col-md-10 offset-md-1">
        <div class="row">
          <div class="col-12 col-md-8 offset-md-2">
            <?php
            if( $cat == 'news-events' ) :
              echo get_the_post_thumbnail( get_the_ID(), '', array( 'class' => 'attachment-full img-fluid mb-3 w-100'));
            endif;
            ?>
          </div>
        </div>
        <p class="section-title text-blue h4" style="font-weight:bold;"><?php the_title(); ?></p>
        <?php if( $cat == 'news-events' ) : ?>
          <p class="montserrat-medium text-blue h6" style="font-size:18px;">
            <?php echo get_the_date( 'D, F j, Y' ); ?>
          </p>
        <?php else : ?>
          <p class="text-grey lato-regular" style="font-style:italic">
            <?php echo get_the_date( 'F jS, Y' ); ?>
          </p>
        <?php endif; ?>
        <!-- Custom Fields here -->

        <!-- /Custom Fields here -->
        <p class="_content lato-regular text-grey"><?php echo get_the_content(); ?></p>
        <?php if( $cat == 'news-events' ) : ?>
          <a href="#" class="btn btn-link text-blue montserrat-medium small">
            Register Now!
          </a>
        <?php else : ?>
          <a href="#" class="btn btn-link text-blue montserrat-medium small">
            Download
            <span class="fa fa-download"></span>
          </a>
        <?php endif; ?>
        <!-- LinkedIn share button here -->
        
        <!-- /LinkedIn share button here -->
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
