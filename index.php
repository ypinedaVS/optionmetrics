<?php get_header(); ?>
<?php if( is_front_page() ) : ?>
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php
          $args = array(
            'category_name' => 'home-slider',
            'orderby' => 'ID',
            'order' => 'ASC'
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
          <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>" style="background-image: url(<?php getImageURLFromPost(); ?>)">
            <div class="carousel-caption d-block">
              <h3><?php echo $myposts[$i]->post_title; ?></h3>
              <button>View Products</button>
              <button>Get Qualified for an Evaluation</button>
            </div>
          </div>
        <?php endfor; ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-sm-5 text-right">
        <img class="img-fluid" src="<?php gtdu('/assets/optionmetrics.png'); ?>" alt="Image">
      </div>
      <div class="col-sm-7">
        <p class="h2">OptionMetrics</p>
        <p>OptionMetrics is the financial industry’s premier provider of quality historical option price data, tools, and analytics. Currently, over 300 institutional subscribers and universities rely on our products as their main source of options pricing, implied volatility calculations, volatility surfaces, and analytics. We enable traders to construct, test, and execute options/derivatives investment strategies and accurately monitor their risk exposure, so that they can make more informed and, ultimately, more profitable investment decisions.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <p class="h2 text-center">Data Analysis Products</p>
      </div>
      <div class="col-md-7">
        <img src="<?php gtdu('/assets/usa_map.png'); ?>" alt="Map" class="img-fluid map usa">
        <img src="<?php gtdu('/assets/canada_map.png'); ?>" alt="Map" class="img-fluid map canada d-none">
        <img src="<?php gtdu('/assets/europe_map.png'); ?>" alt="Map" class="img-fluid map europe d-none">
        <img src="<?php gtdu('/assets/asia_map.png'); ?>" alt="Map" class="img-fluid map asia d-none">
      </div>
      <div class="col-md-5">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-tab-ivydb" data-toggle="tab" href="#nav-ivydb" role="tab" aria-controls="nav-ivydb" aria-selected="true">IvyDB</a>
            <a class="nav-item nav-link" id="nav-tab-optigraph" data-toggle="tab" href="#nav-optigraph" role="tab" aria-controls="nav-optigraph" aria-selected="false">OptiGraph</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-ivydb" role="tabpanel" aria-labelledby="nav-ivydb-tab">
            <nav>
              <div class="nav nav-tabs" id="nav-tab-country" role="tablist">
                <a class="nav-item nav-link active" id="nav-tab-country-usa" data-toggle="tab" data-country="usa" href="#nav-usa" role="tab" aria-controls="nav-usa" aria-selected="true">USA</a>
                <a class="nav-item nav-link" id="nav-tab-country-canada" data-toggle="tab" data-country="canada" href="#nav-canada" role="tab" aria-controls="nav-canada" aria-selected="false">Canada</a>
                <a class="nav-item nav-link" id="nav-tab-country-europe" data-toggle="tab" data-country="europe" href="#nav-europe" role="tab" aria-controls="nav-europe" aria-selected="true">Europe</a>
                <a class="nav-item nav-link" id="nav-tab-country-asia" data-toggle="tab" data-country="asia" href="#nav-asia" role="tab" aria-controls="nav-asia" aria-selected="false">Asia</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tab-countryContent">
              <div class="tab-pane fade show active" id="nav-usa" role="tabpanel">
                <p>Since its launch in 2002, the IvyDB database has been the industry standard for historical option prices and implied volatility data. Used by over 300 institutions, IvyDB contains accurate end-of-day prices for options along with their correctly calculated implied volatilities and greeks. With IvyDB, you’ll be able to evaluate risk models, test trading strategies, and perform sophisticated research on all aspects of the options markets.</p>
              </div>
              <div class="tab-pane fade show" id="nav-canada" role="tabpanel">
                <p>Since its launch in 2002, the IvyDB database has been the industry standard for historical option prices and implied volatility data. Used by over 300 institutions, IvyDB contains accurate end-of-day prices for options along with their correctly calculated implied volatilities and greeks. With IvyDB, you’ll be able to evaluate risk models, test trading strategies, and perform sophisticated research on all aspects of the options markets.</p>
              </div>
              <div class="tab-pane fade show" id="nav-europe" role="tabpanel">
                <p>Since its launch in 2002, the IvyDB database has been the industry standard for historical option prices and implied volatility data. Used by over 300 institutions, IvyDB contains accurate end-of-day prices for options along with their correctly calculated implied volatilities and greeks. With IvyDB, you’ll be able to evaluate risk models, test trading strategies, and perform sophisticated research on all aspects of the options markets.</p>
              </div>
              <div class="tab-pane fade show" id="nav-asia" role="tabpanel">
                <p>Since its launch in 2002, the IvyDB database has been the industry standard for historical option prices and implied volatility data. Used by over 300 institutions, IvyDB contains accurate end-of-day prices for options along with their correctly calculated implied volatilities and greeks. With IvyDB, you’ll be able to evaluate risk models, test trading strategies, and perform sophisticated research on all aspects of the options markets.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-optigraph" role="tabpanel" aria-labelledby="nav-optigraph-tab">World</div>
        </div>
        <button class="btn btn-link">learn more</button>
      </div>
      <div class="col"></div>
      <div class="col-sm-2 text-center">
        <img src="<?php gtdu('/assets/Commprensive_icon.png'); ?>" alt="Commprensive">
        <p>Comprehensive Coverage</p>
      </div>
      <div class="col-sm-2 text-center">
        <img src="<?php gtdu('/assets/Accumulate_icon.png'); ?>" alt="Accumulate">
        <p>Accurate Calculations</p>
      </div>
      <div class="col-sm-2 text-center">
        <img src="<?php gtdu('/assets/Continuos_icon.png'); ?>" alt="Continuos">
        <p>Continuous Time Series</p>
      </div>
      <div class="col-sm-2 text-center">
        <img src="<?php gtdu('/assets/Daily_icon.png'); ?>" alt="Daily">
        <p>Daily Updates</p>
      </div>
      <div class="col-sm-2 text-center">
        <img src="<?php gtdu('/assets/Customer_icon.png'); ?>" alt="Customer">
        <p>Customer Support</p>
      </div>
      <div class="col"></div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <p class="h2 text-center">News & Events</p>
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
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Featured News" class="img-fluid w-100">
        <p class="h5"><?php the_title(); ?></p>
        <p class="small"><?php the_content(); ?></p>
        <?php endwhile; endif; ?>
      </div>
      <div class="col-md-6">
        <div class="row">
          <?php
            $args = array(
              'category_name'   => 'news-events',
              'orderby'         => 'date',
              'order'           => 'DESC',
              'posts_per_page'  => 5,
              // 'tax_query'       => array( array(
              //   'taxonomy'  => 'post_tag',
              //   'field'     => 'slug',
              //   'terms'     => 'normal',
              // ))
            );
            $news = new WP_Query( $args );
            if( $news->have_posts() ) :
              while( $news->have_posts() ) : $news->the_post();
              if( $the_id != get_the_ID() ) :
          ?>
          <div class="col-md-6">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="News & Events" class="img-fluid w-100">
            <p class="h5"><?php the_title(); ?></p>
            <p class="small"><?php the_content(); ?></p>
          </div>
        <?php endif; endwhile; endif; ?>
          <!-- <div class="col-md-6">
            <img src="<?php gtdu('/assets/Article3.PNG'); ?>" alt="A3" class="img-fluid w-100">
            <p class="h5">ORC2016 Keynote Speaker: John Marshall</p>
            <p class="small">OptionMetrics is pleased to announce that John Marshall will join us this year as our</p>
          </div>
          <div class="col-md-6">
            <img src="<?php gtdu('/assets/Article3.PNG'); ?>" alt="A3" class="img-fluid w-100">
            <p class="h5">ORC2016 Keynote Speaker: John Marshall</p>
            <p class="small">OptionMetrics is pleased to announce that John Marshall will join us this year as our</p>
          </div>
          <div class="col-md-6">
            <img src="<?php gtdu('/assets/Article4.PNG'); ?>" alt="A4" class="img-fluid w-100">
            <p class="h5">ORC2016 Keynote Speaker: John Marshall</p>
            <p class="small">OptionMetrics is pleased to announce that John Marshall will join us this year as our</p>
          </div> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 text-center">
        <img class="img-fluid w-75" src="<?php gtdu('/assets/Data_illustration.png'); ?>" alt="Image">
      </div>
      <div class="col-sm-6">
        <p class="h2">Why Use OptionMetrics Historical Options Data</p>
        <p>Using the tool for graphing realized and implied volatility data.</p>
        <button>Get Qualified for Trial Access</button>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php get_footer(); ?>
