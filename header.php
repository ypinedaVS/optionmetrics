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
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php wp_nav_menu(array(
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'navbarResponsive',
          'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>'
        )); ?>
      </div>
    </nav>
