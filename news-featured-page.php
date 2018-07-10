<?php
  $args = array(
    'category_name'   => 'news-events',
    'orderby'         => 'rand',
    'showposts'       => 1,
    'tag_slug__in'    => array( 'featured' )
  );
  $ft_post = new WP_Query( $args );
  if( $ft_post->have_posts() ) :
    while( $ft_post->have_posts() ) :
      $ft_post->the_post();
?>
<div class="row d-flex align-items-center mb-4">
  <div class="col-md-6 col-lg-5">
    <?php get_template_part( 'news', 'date-big' ); ?>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Featured News And Events" class="img-fluid w-100 mb-3" />
  </div>
  <div class="col-md-6 col-lg-7">
    <p class="text-blue-dark montserrat-medium h4 text-center text-md-left"><?php the_title(); ?></p>
    <p class="text-grey lato-light text-center text-md-left"><?php echo get_the_content(); ?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-link montserrat-medium pl-0 text-blue-dark d-none d-md-block text-left">READ MORE</a>
  </div>
</div>
<?php endwhile; endif; ?>
