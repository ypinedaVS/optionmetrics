<?php

function omtheme_script_enqueue()
{
  wp_enqueue_style('omtheme-custom', get_template_directory_uri() . '/css/omtheme.css', array(), '0.0.1', 'all');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.css', array(), '4.1.1', 'all');
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js', array('jquery'), '4.1.1', true);
}
add_action('wp_enqueue_scripts', 'omtheme_script_enqueue');

function omtheme_setup()
{
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Navigation');
}
add_action('init', 'omtheme_setup');

function add_class_on_li($classes, $item, $args)
{
  $classes[] = 'nav-item';
  return $classes;
}
add_filter('nav_menu_css_class', 'add_class_on_li', 1, 3);

function add_link_atts($atts)
{
  $atts['class'] = 'nav-link';
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_link_atts');
