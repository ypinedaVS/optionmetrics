<?php
  get_header();

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

  <header class="masthead d-flex align-items-center justify-content-center" style="background-image: url(<?php getImageURLFromPost(); ?>)">
    <p class="home-title text-white text-center"><?php echo $header[0]->post_title; ?></p>
  </header>

  <!-- About page -->
  <?php if( is_page( 'about-us') ) : ?>
  <div class="container">
    <div class="position-relative page-wrapper-up">
      <div class="row">
        <div class="col-md-6 col-lg-4 pt-5 px-5 pb-0 pr-md-2">
          <div class="row">
            <div class="col-md-3 text-center">
              <img src="<?php gtdu('/assets/Common_language_icon.png'); ?>" alt="Common Language" class="img-fluid w-md-100 pb-4" />
            </div>
            <div class="col-md-9 text-center text-md-left">
              <div class="row">
                <div class="col-12">
                  <p class="page-feature-title mb-4">We use a common language all practitioners understand</p>
                </div>
                <div class="col-12">
                  <p class="page-feature-text">Black-Scholes-Merton implied volatilities are standard for quoting options prices. Differences across delta (smile or skew) and across time-to-expiration (term structure) provide ample fodder for investigating arbitrage and relative value opportunities.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 pt-5 px-5 pb-0 pl-md-2 pr-lg-2">
          <div class="row">
            <div class="col-md-3 text-center">
              <img src="<?php gtdu('/assets/Replicate_icon.png'); ?>" alt="Replicate" class="img-fluid w-md-100 pb-4" />
            </div>
            <div class="col-md-9 text-center text-md-left">
              <div class="row">
                <div class="col-12">
                  <p class="page-feature-title mb-4">Replicate and extend studies with full confidence.</p>
                </div>
                <div class="col-12">
                  <p class="page-feature-text">Our data is the industry standard across academic and industry research that involves options data, from trading strategy research to corporate finance.<br/>Currently, over 300 institutional subscribers and universities rely on OptionMetrics.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 pt-5 px-5 pb-0 pl-lg-2 pr-md-2 pr-lg-5">
          <div class="row">
            <div class="col-md-3 text-center">
              <img src="<?php gtdu('/assets/InControl_icon.png'); ?>" alt="In Control" class="img-fluid w-md-100 pb-4" />
            </div>
            <div class="col-md-9 text-center text-md-left">
              <div class="row">
                <div class="col-12">
                  <p class="page-feature-title mb-4">You are in control.</p>
                </div>
                <div class="col-12">
                  <p class="page-feature-text">Our products allow you to backtest trading strategies, evaluate risk models, and perform sophisticated research on all aspects of option investment.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 pt-5 px-5 pb-0 pl-md-2 pl-lg-5 pr-lg-2">
          <div class="row">
            <div class="col-md-3 text-center">
              <img src="<?php gtdu('/assets/Methodology_icon.png'); ?>" alt="Methodology" class="img-fluid w-md-100 pb-4" />
            </div>
            <div class="col-md-9 text-center text-md-left">
              <div class="row">
                <div class="col-12">
                  <p class="page-feature-title mb-4">Completely transparent methodology.</p>
                </div>
                <div class="col-12">
                  <p class="page-feature-text">Our documentation explains exactly how our calculations work with enough detail to allow replication for spot checking. Additionally, all the raw data used is included with a subscription.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 pt-5 px-5 pb-0 pr-md-2 pl-lg-2 pr-lg-2">
          <div class="row">
            <div class="col-md-3 text-center">
              <img src="<?php gtdu('/assets/OurData_icon.png'); ?>" alt="Our Data" class="img-fluid w-md-100 pb-4" />
            </div>
            <div class="col-md-9 text-center text-md-left">
              <div class="row">
                <div class="col-12">
                  <p class="page-feature-title mb-4">Our data is independent and completely based on traded instruments and exchange data.</p>
                </div>
                <div class="col-12">
                  <p class="page-feature-text">We do not use input from market makers or brokers, and we are not affiliated with any bank, exchange or data vendor.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 pt-5 px-5 pb-0 pl-md-2">
          <div class="row">
            <div class="col-md-3 text-center">
              <img src="<?php gtdu('/assets/Host_icon.png'); ?>" alt="Host" class="img-fluid w-md-100 pb-4" />
            </div>
            <div class="col-md-9 text-center text-md-left">
              <div class="row">
                <div class="col-12">
                  <p class="page-feature-title mb-4">Host and access data to suit your needs.</p>
                </div>
                <div class="col-12">
                  <p class="page-feature-text">Access is not tied to any particular API or tool. Users can choose to use an SQL server database and we include utilities to help set this up.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mb-5">
    <div class="row">
      <div class="col-12 text-center">
        <p class="page-section-title mb-5">Partners</p>
      </div>
      <div class="col-12 d-lg-none">
        <div id="carouselPartners" class="carousel slide" data-ride="carousel" data-interval="3600000">
          <ol class="carousel-indicators blue partners-indicators">
            <li data-target="#carouselPartners" data-slide-to="0" class="active"></li>
            <li data-target="#carouselPartners" data-slide-to="1"></li>
            <li data-target="#carouselPartners" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active text-center px-4">
              <img src="<?php gtdu('/assets/David_photo_on.png'); ?>" alt="David" />
              <div class="arrow-up mt-70 mx-auto"></div>
              <div class="partner-wrapper">
                <p class="partner-name">David J. Hait, Ph.D.</p>
                <p class="partner-position">President and Founder</p>
                <p class="partner-description">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
              </div>
            </div>
            <div class="carousel-item text-center px-4">
              <img src="<?php gtdu('/assets/photo_robert_on.png'); ?>" alt="Robert" />
              <div class="arrow-up mt-70 mx-auto"></div>
              <div class="partner-wrapper">
                <p class="partner-name">David J. Hait, Ph.D.</p>
                <p class="partner-position">President and Founder</p>
                <p class="partner-description">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
              </div>
            </div>
            <div class="carousel-item text-center px-4">
              <img src="<?php gtdu('/assets/photo_eran_on.png'); ?>" alt="Eran" />
              <div class="arrow-up mt-70 mx-auto"></div>
              <div class="partner-wrapper">
                <p class="partner-name">David J. Hait, Ph.D.</p>
                <p class="partner-position">President and Founder</p>
                <p class="partner-description">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselPartners" role="button" data-slide="prev">
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselPartners" role="button" data-slide="next">
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-lg-4 d-none d-lg-inline-block text-center">
        <img src="<?php gtdu('/assets/David_photo_on.png'); ?>" alt="David" class="img-fluid partner-img david active" />
      </div>
      <div class="col-lg-4 d-none d-lg-inline-block text-center">
        <img src="<?php gtdu('/assets/photo_robert_on.png'); ?>" alt="Robert" class="img-fluid partner-img robert" />
      </div>
      <div class="col-lg-4 d-none d-lg-inline-block text-center">
        <img src="<?php gtdu('/assets/photo_eran_on.png'); ?>" alt="Eran" class="img-fluid partner-img eran" />
      </div>
      <div class="col-12 d-none d-lg-inline-block partner david px-5">
        <div class="arrow-up mt-70 ml-13-5"></div>
        <div class="partner-wrapper">
          <p class="partner-name pl-5 partner-name-lg">David J. Hait, Ph.D.</p>
          <p class="partner-position pl-5 partner-position-lg">President and Founder</p>
          <p class="partner-description px-5 partner-description-lg">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
        </div>
      </div>
      <div class="col-12 d-none partner robert px-5">
        <div class="arrow-up mt-70 mx-auto"></div>
        <div class="partner-wrapper">
          <p class="partner-name pl-5 partner-name-lg">David J. Hait, Ph.D. ROBERT</p>
          <p class="partner-position pl-5 partner-position-lg">President and Founder</p>
          <p class="partner-description px-5 partner-description-lg">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
        </div>
      </div>
      <div class="col-12 d-none partner eran px-5">
        <div class="arrow-up mt-70 mr-13-5"></div>
        <div class="partner-wrapper">
          <p class="partner-name pl-5 partner-name-lg">David J. Hait, Ph.D. ERAN</p>
          <p class="partner-position pl-5 partner-position-lg">President and Founder</p>
          <p class="partner-description px-5 partner-description-lg">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row m-0 p-5" style="background:url(<?php gtdu('/assets/partners-form-bg.png'); ?>)">
    <p class="page-section-title text-white partner-form-title text-center">Be part of an exceptionally creative and intelligent team</p>
    <p class="partner-form-description text-white">OptionMetrics is hiring. Be part  of developers, quants and econometrics specialists collaborating on proprietary next-gen data and analytic products. We encourage true ownership over projects and reward innovation. Join the company distinguished by its passion for volatility, data and analytic excellence and the esteemed caliber of its clients, including hedge fund managers, institutional investors and academic institutions. Take your career to new heights.</p>
  </div>
  <div class="container">
    <div class="col-sm-6">
      <img class="img-fluid" src="<?php gtdu('/assets/Image_BusinessAnalyst.png'); ?>" alt="Business" />
      <p>Business Analyst</p>
      <button class="btn btn-link">
        see positions
        <span class="fa fa-angle-double-right"></span>
      </button>
    </div>
    <div class="col-sm-6">
      <img class="img-fluid" src="<?php gtdu('/assets/Image_SeniorSoftwareDeveloper.png'); ?>" alt="Developer" />
      <p>Business Analyst</p>
      <button class="btn btn-link">
        see positions
        <span class="fa fa-angle-double-right"></span>
      </button>
    </div>
  </div>
  <?php endif; ?>
  <!-- /About page -->

  <!-- Data Products page -->
  <!-- /Data Products page -->

  <!-- News & Events page -->
  <!-- /News & Events page -->

  <!-- Contact page -->
  <!-- /Contact page -->
<?php get_footer(); ?>
