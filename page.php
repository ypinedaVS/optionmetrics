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

  <header class="masthead masthead-part d-flex align-items-center justify-content-center" style="background-image: url(<?php getImageURLFromPost(); ?>)">
    <p class="blender-pro-bold page-hero-title px-4 text-white text-center"><?php echo $header[0]->post_title; ?></p>
  </header>

  <!-- About page -->
  <?php if( is_page( 'about-us') ) : ?>
  <div class="container">
    <div class="position-relative page-wrapper-up">
      <div class="row">
        <div class="col-md-6 col-lg-4 pt-4 px-4 pb-0 pr-md-2 pt-md-5">
          <div class="row">
            <div class="col-md-3 text-center">
              <img src="<?php gtdu('/assets/Common_language_icon.png'); ?>" alt="Common Language" class="img-fluid w-md-100 pb-4" />
            </div>
            <div class="col-md-9 text-center text-md-left">
              <div class="row">
                <div class="col-12">
                  <p class="page-feature-title montserrat-medium mb-4">We use a common language all practitioners understand</p>
                </div>
                <div class="col-12">
                  <p class="page-feature-text">Black-Scholes-Merton implied volatilities are standard for quoting options prices. Differences across delta (smile or skew) and across time-to-expiration (term structure) provide ample fodder for investigating arbitrage and relative value opportunities.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 pt-4 px-4 pb-0 pl-md-2 pr-lg-2 pt-md-5">
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
        <div class="col-md-6 col-lg-4 pt-4 px-4 pb-0 pl-lg-2 pr-md-2 pr-lg-4 pt-md-5">
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
        <div class="col-md-6 col-lg-4 pt-4 px-4 pb-0 pl-md-2 pl-lg-4 pr-lg-2 pt-md-5">
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
        <div class="col-md-6 col-lg-4  pt-4 px-4 pb-0 pr-md-2 pl-lg-2 pr-lg-2 pt-md-5">
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
        <div class="col-md-6 col-lg-4 pt-4 px-4 pb-0 pl-md-2 pt-md-5">
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
      <div class="col-12">
        <p class="section-title montserrat-regular text-center mb-5 mt-5">Partners</p>
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
                <p class="partner-name montserrat-medium">David J. Hait, Ph.D.</p>
                <p class="partner-position montserrat-medium">President and Founder</p>
                <p class="partner-description montserrat-light">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
              </div>
            </div>
            <div class="carousel-item text-center px-4">
              <img src="<?php gtdu('/assets/photo_robert_on.png'); ?>" alt="Robert" />
              <div class="arrow-up mt-70 mx-auto"></div>
              <div class="partner-wrapper">
                <p class="partner-name montserrat-medium">David J. Hait, Ph.D.</p>
                <p class="partner-position montserrat-medium">President and Founder</p>
                <p class="partner-description montserrat-light">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
              </div>
            </div>
            <div class="carousel-item text-center px-4">
              <img src="<?php gtdu('/assets/photo_eran_on.png'); ?>" alt="Eran" />
              <div class="arrow-up mt-70 mx-auto"></div>
              <div class="partner-wrapper">
                <p class="partner-name montserrat-medium">David J. Hait, Ph.D.</p>
                <p class="partner-position montserrat-medium">President and Founder</p>
                <p class="partner-description montserrat-light">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
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
          <p class="partner-name pl-5 partner-name-lg montserrat-medium">David J. Hait, Ph.D.</p>
          <p class="partner-position pl-5 partner-position-lg montserrat-medium">President and Founder</p>
          <p class="partner-description px-5 partner-description-lg montserrat-light">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
        </div>
      </div>
      <div class="col-12 d-none partner robert px-5">
        <div class="arrow-up mt-70 mx-auto"></div>
        <div class="partner-wrapper">
          <p class="partner-name pl-5 partner-name-lg montserrat-medium">David J. Hait, Ph.D. ROBERT</p>
          <p class="partner-position pl-5 partner-position-lg montserrat-medium">President and Founder</p>
          <p class="partner-description px-5 partner-description-lg montserrat-light">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
        </div>
      </div>
      <div class="col-12 d-none partner eran px-5">
        <div class="arrow-up mt-70 mr-13-5"></div>
        <div class="partner-wrapper">
          <p class="partner-name pl-5 partner-name-lg montserrat-medium">David J. Hait, Ph.D. ERAN</p>
          <p class="partner-position pl-5 partner-position-lg montserrat-medium">President and Founder</p>
          <p class="partner-description px-5 partner-description-lg montserrat-light">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row m-0 p-5" style="background-image:url(<?php gtdu('/assets/partners-form-bg.png'); ?>);background-size:cover">
    <div class="container p-0">
      <div class="col-12 text-center p-0">
        <p class="section-title text-white montserrat-regular h4 mb-4">Be part of an exceptionally creative and intelligent team</p>
        <p class="text-white lato-light mb-4">OptionMetrics is hiring. Be part  of developers, quants and econometrics specialists collaborating on proprietary next-gen data and analytic products. We encourage true ownership over projects and reward innovation. Join the company distinguished by its passion for volatility, data and analytic excellence and the esteemed caliber of its clients, including hedge fund managers, institutional investors and academic institutions. Take your career to new heights.</p>
        <div class="d-lg-none">
          <form class="m-auto w-75">
            <div class="form-group text-center lato-regular text-white">
              <label for="exampleFormControlInput1" class="">I’m interested in</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Choose Job Category</option>
                <option>Category</option>
                <option>Category</option>
                <option>Category</option>
                <option>Category</option>
              </select>
            </div>
            <div class="form-group text-center lato-regular text-white">
              <label for="exampleFormControlSelect1">in</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Choose a location</option>
                <option>Location</option>
                <option>Location</option>
                <option>Location</option>
                <option>Location</option>
              </select>
            </div>
            <div class="form-group mb-0">
              <button class="btn btn-warning montserrat-medium btn-block" style="height:60px;font-size:20px;">Submit</button>
            </div>
          </form>
        </div>
        <div class="d-none d-lg-block">
          <form class="form-inline justify-content-center">
            <div class="form-group text-center lato-regular text-white">
              <label for="exampleFormControlInput2" class="mr-4">I’m interested in</label>
              <select class="form-control" id="exampleFormControlSelect2">
                <option>Choose Job Category</option>
                <option>Category</option>
                <option>Category</option>
                <option>Category</option>
                <option>Category</option>
              </select>
            </div>
            <div class="form-group text-center lato-regular text-white">
              <label for="exampleFormControlSelect2" class="mx-4">in</label>
              <select class="form-control" id="exampleFormControlSelect2">
                <option>Choose a location</option>
                <option>Location</option>
                <option>Location</option>
                <option>Location</option>
                <option>Location</option>
              </select>
            </div>
            <div class="form-group mb-0">
              <button class="btn btn-warning montserrat-medium btn-block ml-4" style="height:38px;font-size:16px;">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container text-center text-md-left p-5 pl-lg-5">
    <div class="row">
      <div class="col-md-5 offset-md-1 mb-5 pr-md-4">
        <img class="img-fluid w-100" src="<?php gtdu('/assets/Image_BusinessAnalyst.png'); ?>" alt="Business" />
        <p class="section-title montserrat-medium text-blue mt-2 mb-0 h3">Business Analyst</p>
        <button class="btn btn-link montserrat-medium text-blue-light-2 pl-md-0 o-50 text-uppercase">
          see positions
          <span class="fa fa-angle-double-right"></span>
        </button>
      </div>
      <div class="col-md-5 pl-md-4">
        <img class="img-fluid w-100" src="<?php gtdu('/assets/Image_SeniorSoftwareDeveloper.png'); ?>" alt="Developer" />
        <p class="section-title montserrat-medium text-blue mt-2 mb-0 h3">Senior Software Developer</p>
        <button class="btn btn-link montserrat-medium text-blue-light-2 pl-md-0 o-50 text-uppercase">
          see positions
          <span class="fa fa-angle-double-right"></span>
        </button>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <!-- /About page -->

  <!-- Data Products page -->
  <?php if( is_page( 'data-products') ) : ?>
  <div class="container">
    <div class="position-relative page-wrapper-up">
        <div class="row d-flex align-items-center mb-5 mx-0">
          <div class="col-md-5 col-xl-6 pt-5">
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
          </div>
        </div>
        <div class="row d-flex align-items-center mb-5 mx-0">
          <div class="col-md-7 col-xl-6">
            <div class="tab-content" id="nav-tabContentGraph">
              <div class="tab-pane fade show active" role="tabpanel">
                <nav>
                  <div class="nav nav-tabs justify-content-between" id="nav-tab-graph" role="tablist" style="border:none!important;margin-bottom:30px;">
                    <a class="nav-item nav-link active" id="comprehensive-tab" data-toggle="tab" href="#comprehensive" role="tab" aria-controls="comprehensive" aria-selected="true">Comprehensive Illustration</a>

                    <a class="nav-item nav-link" id="accurate-tab" data-toggle="tab" href="#accurate" role="tab" aria-controls="accurate" aria-selected="false">Accurate Illustration</a>

                    <a class="nav-item nav-link" id="continouos-tab" data-toggle="tab" href="#continouos" role="tab" aria-controls="continouos" aria-selected="false">Continouos Illustration</a>

                    <a class="nav-item nav-link" id="daily-tab" data-toggle="tab" href="#daily" role="tab" aria-controls="daily" aria-selected="false">Daily Illustration</a>

                    <a class="nav-item nav-link" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="customer" aria-selected="false">Customer Illustration</a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="col-md-5 col-xl-6 pt-5 tab-content">
              <img src="<?php gtdu('/assets/Comprehensive_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane active" id="comprehensive" role="tabpanel" aria-labelledby="comprehensive-tab">

              <img src="<?php gtdu('/assets/Accurate_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane" id="accurate" role="tabpanel" aria-labelledby="accurate-tab">

              <img src="<?php gtdu('/assets/Continouos_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane" id="continouos" role="tabpanel" aria-labelledby="continouos-tab">

              <img src="<?php gtdu('/assets/Daily_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane" id="daily" role="tabpanel" aria-labelledby="daily-tab">

              <img src="<?php gtdu('/assets/Customer_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane" id="customer" role="tabpanel" aria-labelledby="customer-tab">
            </div>
          </div>
    </div>
  </div>


  <div class="container mb-5">
    <div class="row">
      <div class="col-12">
        <p class="section-title montserrat-regular text-center mb-5 mt-5">Partners</p>
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
                <p class="partner-name montserrat-medium">David J. Hait, Ph.D.</p>
                <p class="partner-position montserrat-medium">President and Founder</p>
                <p class="partner-description montserrat-light">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
              </div>
            </div>
            <div class="carousel-item text-center px-4">
              <img src="<?php gtdu('/assets/photo_robert_on.png'); ?>" alt="Robert" />
              <div class="arrow-up mt-70 mx-auto"></div>
              <div class="partner-wrapper">
                <p class="partner-name montserrat-medium">David J. Hait, Ph.D.</p>
                <p class="partner-position montserrat-medium">President and Founder</p>
                <p class="partner-description montserrat-light">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
              </div>
            </div>
            <div class="carousel-item text-center px-4">
              <img src="<?php gtdu('/assets/photo_eran_on.png'); ?>" alt="Eran" />
              <div class="arrow-up mt-70 mx-auto"></div>
              <div class="partner-wrapper">
                <p class="partner-name montserrat-medium">David J. Hait, Ph.D.</p>
                <p class="partner-position montserrat-medium">President and Founder</p>
                <p class="partner-description montserrat-light">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
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
          <p class="partner-name pl-5 partner-name-lg montserrat-medium">David J. Hait, Ph.D.</p>
          <p class="partner-position pl-5 partner-position-lg montserrat-medium">President and Founder</p>
          <p class="partner-description px-5 partner-description-lg montserrat-light">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
        </div>
      </div>
      <div class="col-12 d-none partner robert px-5">
        <div class="arrow-up mt-70 mx-auto"></div>
        <div class="partner-wrapper">
          <p class="partner-name pl-5 partner-name-lg montserrat-medium">David J. Hait, Ph.D. ROBERT</p>
          <p class="partner-position pl-5 partner-position-lg montserrat-medium">President and Founder</p>
          <p class="partner-description px-5 partner-description-lg montserrat-light">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
        </div>
      </div>
      <div class="col-12 d-none partner eran px-5">
        <div class="arrow-up mt-70 mr-13-5"></div>
        <div class="partner-wrapper">
          <p class="partner-name pl-5 partner-name-lg montserrat-medium">David J. Hait, Ph.D. ERAN</p>
          <p class="partner-position pl-5 partner-position-lg montserrat-medium">President and Founder</p>
          <p class="partner-description px-5 partner-description-lg montserrat-light">David J. Hait, Ph.D. is the President of OptionMetrics, LLC, which he founded in 1999. Dr. Hait is a financial economist with over 20 years of experience in applied quantitative derivative research and technology. Prior to founding OptionMetrics he served as Vice President in the Fixed Income Research Group at Paine Webber, and taught courses on derivatives at J. P. Morgan. Dr. Hait received his Ph.D. in Finance from New York University’s Stern School of Business, where he was an Adjunct Professor at the Stern School of Business and Courant Institute of Mathematics. Dr. Hait also received an MS in Computer Science from University of California at Berkeley and a BSE in Computer Engineering from the University of Pennsylvania.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row m-0 p-5" style="background-image:url(<?php gtdu('/assets/partners-form-bg.png'); ?>);background-size:cover">
    <div class="col-12 text-center">
      <p class="section-title text-white montserrat-regular h4 mb-4">Be part of an exceptionally creative and intelligent team</p>
      <p class="text-white lato-light mb-4">OptionMetrics is hiring. Be part  of developers, quants and econometrics specialists collaborating on proprietary next-gen data and analytic products. We encourage true ownership over projects and reward innovation. Join the company distinguished by its passion for volatility, data and analytic excellence and the esteemed caliber of its clients, including hedge fund managers, institutional investors and academic institutions. Take your career to new heights.</p>
      <div class="d-lg-none">
        <form class="m-auto w-75">
        <div class="form-group text-center lato-regular text-white">
          <label for="exampleFormControlInput1" class="">I’m interested in</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Choose Job Category</option>
            <option>Category</option>
            <option>Category</option>
            <option>Category</option>
            <option>Category</option>
          </select>
        </div>
        <div class="form-group text-center lato-regular text-white">
          <label for="exampleFormControlSelect1">in</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Choose a location</option>
            <option>Location</option>
            <option>Location</option>
            <option>Location</option>
            <option>Location</option>
          </select>
        </div>
        <div class="form-group mb-0">
          <button class="btn btn-warning montserrat-medium btn-block" style="height:60px;font-size:20px;">Submit</button>
        </div>
      </form>
      </div>
      <div class="d-none d-lg-block">
        <form class="form-inline justify-content-center">
        <div class="form-group text-center lato-regular text-white">
          <label for="exampleFormControlInput2" class="mr-4">I’m interested in</label>
          <select class="form-control" id="exampleFormControlSelect2">
            <option>Choose Job Category</option>
            <option>Category</option>
            <option>Category</option>
            <option>Category</option>
            <option>Category</option>
          </select>
        </div>
        <div class="form-group text-center lato-regular text-white">
          <label for="exampleFormControlSelect2" class="mx-4">in</label>
          <select class="form-control" id="exampleFormControlSelect2">
            <option>Choose a location</option>
            <option>Location</option>
            <option>Location</option>
            <option>Location</option>
            <option>Location</option>
          </select>
        </div>
        <div class="form-group mb-0">
          <button class="btn btn-warning montserrat-medium btn-block ml-4" style="height:38px;font-size:16px;">Submit</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <div class="container text-center p-5">
    <div class="col-sm-6 mb-5">
      <img class="img-fluid" src="<?php gtdu('/assets/Image_BusinessAnalyst.png'); ?>" alt="Business" />
      <p class="text-center montserrat-medium text-blue mt-2 mb-0">Business Analyst</p>
      <button class="btn btn-link montserrat-medium text-blue">
        see positions
        <span class="fa fa-angle-double-right"></span>
      </button>
    </div>
    <div class="col-sm-6">
      <img class="img-fluid" src="<?php gtdu('/assets/Image_SeniorSoftwareDeveloper.png'); ?>" alt="Developer" />
      <p class="text-center montserrat-medium text-blue mt-2 mb-0">Business Analyst</p>
      <button class="btn btn-link montserrat-medium text-blue">
        see positions
        <span class="fa fa-angle-double-right"></span>
      </button>
    </div>
  </div>

  <?php endif; ?>
  <!-- /Data Products page -->

  <!-- News & Events page -->
  <?php if ( is_page( 'news-events') ) : ?>
  <div class="container">
    <div class="position-relative page-wrapper-up pt-5 ">
      <div class="row">
        <div class="col-12">
          <p class="section-title montserrat-regular text-center mb-4">Events</p>
        </div>
        <div class="col-12 px-5">
          <?php get_template_part( 'news', 'featured-page' ); ?>
        </div>
        <?php get_template_part( 'news', 'events-pagination' ); ?>
      </div>
    </div>
  </div>

  <?php endif; ?>
  <!-- /News & Events page -->

  <!-- Contact page -->
  <!-- /Contact page -->
<?php get_footer(); ?>
