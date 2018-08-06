<?php
  $args = array(
    'category_name'   => 'white-papers',
    'orderby'         => 'date',
    'order'           => 'DESC',
    'showposts'       => 3
  );
  $papers = new WP_Query( $args );
?>
<p class="h4 text-blue text-center text-sm-left mb-4">OptionMetrics White Papers</p>
<div class="bg-light p-3 mb-3">
  <?php
    $i = 1;
    if( $papers->have_posts() ) :
      while( $papers->have_posts() ) :
        $papers->the_post();
        $link = get_post_meta( get_the_ID(), 'white_papers_url', true );
  ?>
    <a href="<?php echo $link; ?>" target="_blank" class="text-blue montserrat-medium p-3 d-block"><?php the_title(); ?></a>
    <?php
      if( $i < $papers->post_count ) :
        echo '<hr />';
        $i++;
      endif;
      endwhile;
      endif;
    ?>
</div>
