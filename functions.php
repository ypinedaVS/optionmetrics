<?php

function omtheme_script_enqueue()
{
  wp_enqueue_style( 'omtheme-custom', get_template_directory_uri() . '/css/omtheme.css', array(), '0.0.1', 'all' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.css', array(), '4.1.1', 'all' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/node_modules/font-awesome/css/font-awesome.css', array(), '4.7.0', 'all' );

  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js', array('jquery'), '4.1.1', true );
  wp_enqueue_script( 'burger', get_template_directory_uri() . '/js/burger.js', array('jquery'), '0.0.1', true );
  wp_enqueue_script( 'country', get_template_directory_uri() . '/js/country.js', array('jquery'), '0.0.1', true );
  wp_enqueue_script( 'affix', get_template_directory_uri() . '/js/affix.js', array('jquery'), '0.0.1', true );
  wp_enqueue_script( 'partners', get_template_directory_uri() . '/js/partners.js', array('jquery'), '0.0.1', true );

  wp_register_script( 'research_script', get_template_directory_uri() . '/js/research.js', array('jquery'), '0.0.1', true );
  wp_enqueue_script( 'research_script' );
  wp_localize_script( 'research_script', 'research_vars', [ 'ajaxurl' => admin_url('admin-ajax.php') ] );
}
add_action( 'wp_enqueue_scripts', 'omtheme_script_enqueue' );

function omtheme_setup()
{
  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );
  register_nav_menu( 'primary', 'Primary Header Navigation' );
  register_nav_menu( 'footer-menu', 'Footer Navigation' );
  register_nav_menu( 'social-menu', 'Social Navigation' );
}
add_action( 'init', 'omtheme_setup' );

function add_class_on_li( $classes, $item, $args )
{
  $classes[] = 'nav-item';
  return $classes;
}
add_filter( 'nav_menu_css_class', 'add_class_on_li', 1, 3 );

function add_link_atts( $atts, $item, $args )
{
  if( $args->theme_location == 'primary' )
  {
    $atts['class'] = 'nav-link text-white ml-lg-2 ml-xl-4 montserrat-medium';
  }
  if( $args->theme_location == 'footer-about' )
  {
    $atts['class'] = 'list-group-item list-group-item-action footer-menu';
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts', 10, 3 );

function getImageURLFromPost( $num=1 )
{
  preg_match_all( '/<img[^>]+>/i', get_the_content(), $result );
  $src = simplexml_load_string( $result[0][$num-1] );
  echo $src['src'];
}

function gtdu($path)
{
  echo get_template_directory_uri() . $path;
}

add_action( 'wp_ajax_nopriv_do_research_ajax', 'research_send_posts' );
add_action( 'wp_ajax_do_research_ajax', 'research_send_posts' );

function research_send_posts()
{
  $year = absint($_POST['year']);
  $args = array(
    'category_name'   => 'research',
    'orderby'         => 'publish_date',
    'order'           => 'DESC',
    's'               => '',
    'date_query'      => array( array(
      'year'          => $year
    ))
  );
  $the_query = new WP_Query ( $args );
  echo json_encode($the_query->posts);
  wp_die();
}
