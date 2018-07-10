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
<div class="col-6 col-md-6">
  <?php get_template_part( 'news', 'date' ); ?>
  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="News & Events News-Event-ID-<?php echo get_the_ID(); ?>" class="img-fluid w-100 mb-3">
  <p class="text-blue-dark montserrat-medium news-mini mb-1"><?php the_title(); ?></p>
  <p class="text-grey-dark lato-light news-mini mb-1"><?php echo get_the_content(); ?></p>
  <a class="btn btn-link pl-0 mb-5 text-blue-dark montserrat-medium">
    READ MORE
    <span class="fa fa-angle-double-right"></span>
  </a>
</div>
<?php endwhile; endif; ?>
