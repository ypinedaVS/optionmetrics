<?php

function omtheme_script_enqueue()
{
  wp_enqueue_style('omtheme-custom', get_template_directory_uri() . '/css/omtheme.css', array(), '0.0.1', 'all');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.css', array(), '4.1.1', 'all');
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js', array('jquery'), '4.1.1', true);
}

add_action('wp_enqueue_scripts', 'omtheme_script_enqueue');
