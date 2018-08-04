<?php
  get_template_part( 'partials/page', 'hero' );
  the_post();
  $cat = get_the_category()[0]->slug;
?>

<div class="container">
  <div class="position-relative page-wrapper-up <?php if( $cat == 'careers' ) echo 'page-wrapper-up-careers'; ?>">
    <div class="row">
      <div class="col-12 p-4 p-md-5">
        <?php $redirect = $cat == 'careers' ? 'about-us?d=true' : $cat . '/'; ?>
        <a href="<?php echo get_home_url() . '/' . $redirect; ?>" class="btn btn-link text-left text-grey-light pl-lg-5">
          <span class="fa fa-long-arrow-left"></span>
          Back
        </a>
      </div>
      <div class="col-12 col-md-10 offset-md-1">
        <div class="row">
          <div class="col-12 col-md-8 offset-md-2">
            <?php
              if( $cat == 'news-events' ) :
                echo get_the_post_thumbnail( get_the_ID(), '', array( 'class' => 'attachment-full img-fluid mb-3 w-100'));
              endif;
            ?>
          </div>
        </div>
        <p class="section-title text-blue h4 px-3 text-center" style="font-weight:bold;"><?php the_title(); ?></p>
        <?php if( $cat == 'news-events' ) : ?>
          <?php
            $d_location = get_post_meta( get_the_ID(), 'event_date_location', true ) != ''
              ? ' | ' . get_post_meta( get_the_ID(), 'event_date_location', true ) : '';
            ?>
          <?php $location = get_post_meta( get_the_ID(), 'event_location', true ); ?>
          <?php $address = get_post_meta( get_the_ID(), 'event_address', true ); ?>
          <p class="montserrat-medium text-blue h6 text-center" style="font-size:18px;">
            <?php echo get_the_date( 'D, F j, Y' ) . $d_location; ?>
          </p>
          <?php if( $location != '' ) : ?>
            <p class="text-blue small montserrat-medium text-center mt-3" style="font-style:italic;"><?php echo $location; ?></p>
          <?php endif; ?>
          <?php if( $address != '' ) : ?>
            <p class="text-grey-light montserrat-medium text-center mt-3"><?php echo $address; ?></p>
          <?php endif; ?>
        <?php elseif( $cat == 'research' ) : ?>
          <p class="text-grey lato-regular text-center" style="font-style:italic">
            <?php echo get_the_date( 'F jS, Y' ); ?>
          </p>
        <?php elseif( $cat == 'careers' ) : ?>
          <div class="row mt-4 text-left px-3">
            <div class="col-5 col-xl-3" style="font-weight:bold;">Ref. Number</div>
            <div class="col-7 col-xl-9"><?php echo get_post_meta(get_the_ID(), 'careers_ref_number', true); ?></div>
          </div>
          <div class="row text-left px-3">
            <div class="col-5 col-xl-3" style="font-weight:bold;">Location</div>
            <div class="col-7 col-xl-9"><?php echo get_post_meta(get_the_ID(), 'careers_location', true); ?></div>
          </div>
          <div class="row text-left px-3">
            <div class="col-5 col-xl-3" style="font-weight:bold;">Position Type</div>
            <div class="col-7 col-xl-9"><?php echo get_post_meta(get_the_ID(), 'careers_type', true); ?></div>
          </div>
          <div class="row text-left px-3 mb-4">
            <div class="col-5 col-xl-3" style="font-weight:bold;">Start Date</div>
            <div class="col-7 col-xl-9"><?php echo get_post_meta(get_the_ID(), 'careers_start_date', true); ?></div>
          </div>
        <?php endif; ?>
        <div class="_content lato-regular text-grey px-3 mt-4"><?php echo get_the_content(); ?></div>
        <?php if( $cat == 'research' ) : ?>
          <a href="#" class="btn btn-link text-blue montserrat-medium small">
            Download
            <span class="fa fa-download"></span>
          </a>
        <?php elseif( $cat == 'careers' ) : ?>
          <a href="mailto:user@email.com" class="btn btn-link text-blue montserrat-medium small">
            Want to apply? Send us an email
          </a>
        <?php endif; ?>
        <!-- LinkedIn share button here -->

        <!-- /LinkedIn share button here -->
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
