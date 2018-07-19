<?php
  get_header();

  if( is_page( 'about-us' )) $tag = 'about-us';
  if( is_page( 'research' )) $tag = 'research';
  if( is_page( 'data-products' )) $tag = 'data-products';
  if( is_page( 'news-events' )) $tag = 'news-events';
  if( is_page( 'contact' )) $tag = 'contact';
  if( is_page( 'privacy-policy' )) $tag = 'privacy-policy';
  if( is_page( 'qualification-process' )) $tag = 'qualification-process';

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

  <header class="masthead masthead-part d-flex align-items-center justify-content-center" style="background-image: url(<?php getImageURLFromPost(); ?>)">
    <p class="blender-pro-bold main-slider-title page px-2 text-white text-center"><?= $header[0]->post_title; ?></p>
  </header>
