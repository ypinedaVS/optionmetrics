<?php
  $privacy = new WP_Query( array(
    'category_name' => 'privacy',
  ));
  if ( $privacy->have_posts() ) :
    while( $privacy->have_posts() ) :
      $privacy->the_post();
?>
<div class="container">
  <div class="position-relative page-wrapper-up">
    <div class="row">
      <div class="col-12 p-4 p-md-5">
        <a href="<?php echo get_home_url() . '/qualification-process/'; ?>" class="btn btn-link text-left text-grey-light pl-lg-5">
          <span class="fa fa-long-arrow-left"></span>
          Back
        </a>
      </div>
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-md-10 offset-md-1 lato-regular privacy">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
