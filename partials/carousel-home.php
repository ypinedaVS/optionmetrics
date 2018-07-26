<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php
      $args = array(
        'category_name'   => 'home-slider',
        'orderby'         => 'ID',
        'order'           => 'ASC',
        'tag_slug__in'    => array( 'home' )
      );
      $myposts = get_posts( $args );
      $count = count( $myposts );
      for( $i=0; $i<$count; $i++) :
        if( $i === 0 ) :
          echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $i . '" class="active"></li>';
        else:
          echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $i . '"></li>';
        endif;
      endfor;
    ?>
  </ol>
  <div class="carousel-inner" role="listbox">
    <?php for( $i=0; $i<$count; $i++) : setup_postdata( $myposts[$i] ); ?>
      <div class="carousel-item h100vh300 <?php echo $i === 0 ? 'active' : ''; ?>" style="background-image: url(<?php getImageURLFromPost(); ?>)">
        <div class="d-flex h-100 align-items-center justify-content-center">
          <div class="carousel-caption position-static">
            <p class="blender-pro-bold main-slider-title mb-5"><?php echo $myposts[$i]->post_title; ?></p>
            <a class="btn btn-outline-light mb-3 btn-main-slider montserrat-medium mr-md-3" href="/data-products">View Products</a>
            <a class="btn btn-warning mb-3 btn-main-slider montserrat-medium" href="/qualification-process/">Get Started!</a>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="sr-only">Next</span>
  </a>
</div>
