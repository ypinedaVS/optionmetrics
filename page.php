<?php get_header(); ?>
<?php
  if( is_page( 'about-us' )) $tag = 'about-us';
  if( is_page( 'data-products' )) $tag = 'data-products';
  if( is_page( 'news-events' )) $tag = 'news-events';
  if( is_page( 'contact' )) $tag = 'contact';
  $args = array(
    'category_name' => 'home-slider',
    'tax_query'     => array( array(
      'taxonomy'  => 'post_tag',
      'field'     => 'slug',
      'terms'     => $tag
    )));
    $header = get_posts( $args );
    setup_postdata( $header[0] );
  ?>
  <header class="masthead text-center d-flex align-items-center" style="background-image: url(<?php getImageURLFromPost(); ?>)">
    <div class="masthead-bg">
      <p class="home-title"><?php echo $header[0]->post_title; ?></p>
    </div>
  </header>

  <!-- About page -->
  <!-- /About page -->

  <!-- Data Products page -->
  <!-- /Data Products page -->

  <!-- News & Events page -->
  <!-- /News & Events page -->

  <!-- Contact page -->
  <!-- /Contact page -->
<?php get_footer(); ?>
