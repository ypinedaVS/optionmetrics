<?php
  $args = array(
    'category_name'   => 'news-events',
    'orderby'         => 'rand',
    'showposts'       => 1,
    'tag_slug__in'    => array( 'featured' )
  );
  $ftPost = new WP_Query( $args );
  if( $ftPost->have_posts() ) :
    while( $ftPost->have_posts() ) :
      $ftPost->the_post();
?>
<?php get_template_part( 'news', 'date-big' ); ?>
<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Featured News And Events" class="img-fluid w-100 mb-3" />
<p class="text-blue-dark montserrat-medium h4 text-center text-sm-left"><?php the_title(); ?></p>
<p class="text-grey lato-light text-center text-sm-left mb-5"><?php echo get_the_content(); ?></p>
<?php endwhile; endif; ?>
