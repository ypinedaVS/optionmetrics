<?php
  $privacy = new WP_Query( array(
    'category_name' => 'terms-of-use',
  ));
  if ( $privacy->have_posts() ) :
    while( $privacy->have_posts() ) :
      $privacy->the_post();
?>
<div class="container">
  <div class="position-relative page-wrapper-up">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-md-10 offset-md-1 lato-regular" style="margin-top:50px">
            <p class="section-title text-clue">Terms of Use</p>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
