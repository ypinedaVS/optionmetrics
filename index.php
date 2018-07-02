<?php get_header(); ?>
<?php if( is_front_page() ) : ?>
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="500000">
      <ol class="carousel-indicators">
        <?php
          $args = array(
            'category_name'   => 'home-slider',
            'orderby'         => 'ID',
            'order'           => 'ASC',
            'tax_query'    => array( array(
              'taxonomy'   => 'post_tag',
              'field'      => 'slug',
              'terms'      => 'home'
            ))
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
                <button class="btn btn-outline-light mb-3 btn-main-slider montserrat-medium mr-md-3">View Products</button>
                <button class="btn btn-warning mb-3 btn-main-slider montserrat-medium">Get Started!</button>
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
  </header>
  <div class="container my-5 py-2">
    <div class="row d-flex align-items-center mb-5">
      <div class="col-md-5 text-center text-md-right mb-4">
        <img class="img-fluid" src="<?php gtdu('/assets/optionmetrics.png'); ?>" alt="Image">
      </div>
      <div class="col-md-7">
        <p class="section-title montserrat-regular text-center text-md-left mb-4">OptionMetrics</p>
        <p class="section-text lato-light text-center text-md-left">OptionMetrics is the financial industry’s premier provider of quality historical option price data, tools, and analytics. Currently, over 300 institutional subscribers and universities rely on our products as their main source of options pricing, implied volatility calculations, volatility surfaces, and analytics. We enable traders to construct, test, and execute options/derivatives investment strategies and accurately monitor their risk exposure, so that they can make more informed and, ultimately, more profitable investment decisions.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <p class="section-title montserrat-regular text-center mb-4">Data Analysis Products</p>
      </div>
      <div class="col-sm-12">
        <div class="row d-flex align-items-center">
          <div class="col-md-5 col-xl-6 mb-5">
            <img src="<?php gtdu('/assets/us_map.png'); ?>" alt="Map" class="img-fluid map us">
            <img src="<?php gtdu('/assets/canada_map.png'); ?>" alt="Map" class="img-fluid map canada d-none">
            <img src="<?php gtdu('/assets/europe_map.png'); ?>" alt="Map" class="img-fluid map europe d-none">
            <img src="<?php gtdu('/assets/asia_map.png'); ?>" alt="Map" class="img-fluid map asia d-none">
            <img src="<?php gtdu('/assets/Map_Global.png'); ?>" alt="Map" class="img-fluid map global d-none">
          </div>
          <div class="col-md-7 col-xl-6">
            <nav>
              <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist" style="margin-bottom: 20px;">
                <a class="nav-item nav-link active" id="nav-tab-ivydb" data-toggle="tab" href="#nav-ivydb" role="tab" aria-controls="nav-ivydb" aria-selected="true">IvyDB</a>
                <a class="nav-item nav-link" id="nav-tab-optigraph" data-toggle="tab" href="#nav-optigraph" role="tab" aria-controls="nav-optigraph" aria-selected="false">OptiGraph</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-ivydb" role="tabpanel" aria-labelledby="nav-ivydb-tab">
                <nav>
                  <div class="nav nav-tabs justify-content-between" id="nav-tab-country" role="tablist" style="border:none!important;margin-bottom:30px;">
                    <a class="nav-item nav-link active nav-item-country" id="nav-tab-country-us" data-toggle="tab" data-country="us" href="#nav-us" role="tab" aria-controls="nav-us" aria-selected="true">US</a>
                    <a class="nav-item nav-link nav-item-country" id="nav-tab-country-canada" data-toggle="tab" data-country="canada" href="#nav-canada" role="tab" aria-controls="nav-canada" aria-selected="false">Canada</a>
                    <a class="nav-item nav-link nav-item-country" id="nav-tab-country-europe" data-toggle="tab" data-country="europe" href="#nav-europe" role="tab" aria-controls="nav-europe" aria-selected="true">Europe</a>
                    <a class="nav-item nav-link nav-item-country" id="nav-tab-country-asia" data-toggle="tab" data-country="asia" href="#nav-asia" role="tab" aria-controls="nav-asia" aria-selected="false">Asia</a>
                    <a class="nav-item nav-link nav-item-country" id="nav-tab-country-global" data-toggle="tab" data-country="global" href="#nav-global" role="tab" aria-controls="nav-global" aria-selected="false">Global</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tab-countryContent">
                  <div class="tab-pane fade show active" id="nav-us" role="tabpanel">
                    <p class="section-text lato-light text-center text-md-left">Since its launch in 2002, the IvyDB database has been the industry standard for historical option prices and implied volatility data. Used by over 300 institutions, IvyDB contains accurate end-of-day prices for options along with their correctly calculated implied volatilities and greeks. With IvyDB, you’ll be able to evaluate risk models, test trading strategies, and perform sophisticated research on all aspects of the options markets.</p>
                  </div>
                  <div class="tab-pane fade show" id="nav-canada" role="tabpanel">
                    <p class="section-text lato-light text-center text-md-left">Since its launch in 2002, the IvyDB database has been the industry standard for historical option prices and implied volatility data. Used by over 300 institutions, IvyDB contains accurate end-of-day prices for options along with their correctly calculated implied volatilities and greeks. With IvyDB, you’ll be able to evaluate risk models, test trading strategies, and perform sophisticated research on all aspects of the options markets.</p>
                  </div>
                  <div class="tab-pane fade show" id="nav-europe" role="tabpanel">
                    <p class="section-text lato-light text-center text-md-left">Since its launch in 2002, the IvyDB database has been the industry standard for historical option prices and implied volatility data. Used by over 300 institutions, IvyDB contains accurate end-of-day prices for options along with their correctly calculated implied volatilities and greeks. With IvyDB, you’ll be able to evaluate risk models, test trading strategies, and perform sophisticated research on all aspects of the options markets.</p>
                  </div>
                  <div class="tab-pane fade show" id="nav-asia" role="tabpanel">
                    <p class="section-text lato-light text-center text-md-left">Since its launch in 2002, the IvyDB database has been the industry standard for historical option prices and implied volatility data. Used by over 300 institutions, IvyDB contains accurate end-of-day prices for options along with their correctly calculated implied volatilities and greeks. With IvyDB, you’ll be able to evaluate risk models, test trading strategies, and perform sophisticated research on all aspects of the options markets.</p>
                  </div>
                  <div class="tab-pane fade show" id="nav-global" role="tabpanel">
                    <p class="section-text lato-light text-center text-md-left">Since its launch in 2002, the IvyDB database has been the industry standard for historical option prices and implied volatility data. Used by over 300 institutions, IvyDB contains accurate end-of-day prices for options along with their correctly calculated implied volatilities and greeks. With IvyDB, you’ll be able to evaluate risk models, test trading strategies, and perform sophisticated research on all aspects of the options markets.</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-optigraph" role="tabpanel" aria-labelledby="nav-optigraph-tab">World</div>
            </div>
            <div class="text-center text-md-left">
              <button class="btn btn-link text-uppercase pl-md-0 text-blue-dark mt-4 mb-5 montserrat-medium">
                learn more
                <span class="fa fa-angle-double-right"></span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 mb-5">
        <div class="row justify-content-center">
          <div class="col-4 col-sm-4 col-md-4 col-lg-2 text-center">
            <img src="<?php gtdu('/assets/Commprensive_icon.png'); ?>" alt="Commprensive">
            <p class="montserrat-medium text-grey-dark p">Comprehensive<br/>Coverage</p>
          </div>
          <div class="col-4 col-sm-4 col-md-4 col-lg-2 text-center">
            <img src="<?php gtdu('/assets/Accumulate_icon.png'); ?>" alt="Accumulate">
            <p class="montserrat-medium text-grey-dark p">Accurate<br/>Calculations</p>
          </div>
          <div class="col-4 col-sm-4 col-md-4 col-lg-2 text-center">
            <img src="<?php gtdu('/assets/Continuos_icon.png'); ?>" alt="Continuos">
            <p class="montserrat-medium text-grey-dark p">Continuous<br/>Time Series</p>
          </div>
          <div class="col-4 col-sm-4 col-md-4 col-lg-2 text-center">
            <img src="<?php gtdu('/assets/Daily_icon.png'); ?>" alt="Daily">
            <p class="montserrat-medium text-grey-dark p">Daily<br/>Updates</p>
          </div>
          <div class="col-4 col-sm-4 col-md-4 col-lg-2 text-center">
            <img src="<?php gtdu('/assets/Customer_icon.png'); ?>" alt="Customer">
            <p class="montserrat-medium text-grey-dark p">Customer<br/>Support</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container bg-light-custom news-wrapper">
        <div class="row">
          <div class="col-sm-12">
            <p class="section-title montserrat-regular text-center mb-4">News & Events</p>
          </div>
          <div class="col-md-6">
          <?php
            $args = array(
              'category_name'   => 'news-events',
              'orderby'         => 'rand',
              'posts_per_page'  => 1,
              'tax_query'       => array( array(
                'taxonomy'  => 'post_tag',
                'field'     => 'slug',
                'terms'     => 'featured'
              ))
            );
            $featured = new WP_Query( $args );
            if( $featured->have_posts() ) :
              while( $featured->have_posts() ) :
                $featured->the_post();
                $the_id = get_the_ID();
          ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Featured News" class="img-fluid w-100 mb-3">
            <p class="text-blue-dark montserrat-medium h4 text-center text-sm-left"><?php the_title(); ?></p>
            <p class="text-grey lato-light text-center text-sm-left mb-5"><?php echo get_the_content(); ?></p>
          <?php endwhile; endif; ?>
          </div>
          <div class="col-md-6">
            <div class="row">
            <?php
              $args = array(
                'category_name'   => 'news-events',
                'orderby'         => 'date',
                'order'           => 'DESC',
                'posts_per_page'  => 4,
              );
              $news = new WP_Query( $args );
              if( $news->have_posts() ) :
                while( $news->have_posts() ) : $news->the_post();
                if( $the_id != get_the_ID() ) :
            ?>
              <div class="col-6 col-md-6">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="News & Events" class="img-fluid w-100 mb-2">
                <p class="text-blue-dark montserrat-medium news-mini"><?php the_title(); ?></p>
                <p class="text-grey-dark lato-light news-mini"><?php echo get_the_content(); ?></p>
              </div>
            <?php endif; endwhile; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex align-items-center">
      <div class="col-md-6 text-center">
        <img class="img-fluid w-75 mt-5" src="<?php gtdu('/assets/Data_illustration.png'); ?>" alt="Image">
      </div>
      <div class="col-md-6 text-center text-md-left">
        <p class="section-title montserrat-medium mt-4">Why Use OptionMetrics Historical Options Data</p>
        <p class="text-grey lato-light h5 mb-5">Using the tool for graphing realized and implied volatility data.</p>
        <button class="btn btn-warning montserrat-light btn-main-slider btn-get-started">Get Started Now!</button>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php get_footer(); ?>
