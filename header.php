<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Option Metrics</title>
    <?php wp_head(); ?>
  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="optionmetrics logo" />
        </a>
        <button class="navbar-toggler navbar-toggler-right text-white" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span id="menu-bars" class="fa fa-bars"></span>
          <span id="menu-times" class="d-none fa fa-times"></span>
        </button>
        <?php wp_nav_menu( array(
          'theme_location'   => 'primary',
          'container'        => 'div',
          'container_class'  => 'collapse navbar-collapse',
          'container_id'     => 'navbarResponsive',
          'items_wrap'       => '<ul class="navbar-nav ml-auto">%3$s</ul>'
        )); ?>
      </div>
    </nav>
