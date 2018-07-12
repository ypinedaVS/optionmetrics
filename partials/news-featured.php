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
<?php get_template_part( 'partials/news', 'date-big' ); ?>
<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Featured News And Events" class="img-fluid w-100 mb-3" />
<p class="text-blue montserrat-medium h5 text-center text-md-left"><?php the_title(); ?></p>
<p class="text-grey lato-light h5 text-center text-md-left mb-5"><?php echo get_the_content(); ?></p>
<?php endwhile; endif; ?>