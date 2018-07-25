<?php
  $args = array(
    'category_name'   => 'research',
    'orderby'         => 'rand',
    'showposts'       => 1,
    'tag_slug__in'    => array( 'featured' )
  );
  $ft_post = new WP_Query( $args );
  if( $ft_post->have_posts() ) :
    while( $ft_post->have_posts() ) :
      $ft_post->the_post();
?>
  <p class="text-blue h5 montserrat-medium"><?php the_title(); ?></p>
  <p class="text-grey lato-regular" style="font-style:italic"><?php echo get_the_date( 'F jS, Y' ); ?></p>
  <p id="research-top" class="_content text-center lato-regular h6"><?php echo get_the_content(); ?></p>
  <a class="btn btn-link text-blue-dark montserrat-medium mx-auto mb-5">
    READ MORE
    <span class="fa fa-angle-double-right"></span>
  </a>
<?php endwhile; endif; ?>
