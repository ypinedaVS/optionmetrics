<?php
  $tag = get_term_by( 'name', 'featured', 'post_tag' );

  $args = array(
    'category_name'   => 'news-events',
    'orderby'         => 'date',
    'order'           => 'DESC',
    'showposts'       => 4,
    'tag__not_in'     => array( $tag->term_id )
  );
  $news = new WP_Query( $args );
  if( $news->have_posts() ) :
    while( $news->have_posts() ) :
      $news->the_post();
?>
  <div class="col-6 col-md-6 hide-show-more">
  <?php get_template_part( 'partials/news', 'date' ); ?>
  <a href="<?php echo get_home_url() . '/news-events/' ?>">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="News & Events News-Event-ID-<?php echo get_the_ID(); ?>" class="img-fluid w-100 mb-3">
  </a>
  <a href="<?php echo get_home_url() . '/news-events/' ?>">
    <p class="text-blue montserrat-medium h6 mb-1"><?php the_title(); ?></p>
  </a>
  <p class="text-grey lato-regular h6 mb-5 mb-md-2 _content"><?php echo get_the_content(); ?></p>
  <a class="btn btn-link pl-0 mb-5 text-blue montserrat-medium d-none d-md-inline-block" href="<?php echo get_home_url() . '/news-events/'; ?>">
    READ MORE
    <span class="fa fa-angle-double-right"></span>
  </a>
</div>
<?php endwhile; endif; ?>
