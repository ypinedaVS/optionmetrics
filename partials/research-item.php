<p class="text-blue h6 montserrat-medium"><?php the_title(); ?></p>
<p class="text-grey lato-regular" style="font-style:italic"><?php echo get_the_date( 'F jS, Y' ); ?></p>
<p class="_content lato-regular text-grey"><?php echo get_the_content(); ?></p>
<a href="<?php the_permalink(); ?>" class="btn btn-link text-blue-dark montserrat-medium mb-3">
  READ MORE
  <span class="fa fa-angle-double-right"></span>
</a>
