<?php get_template_part( 'partials/page', 'hero' ); ?>

  <!-- About page -->
  <?php if( is_page( 'about-us') ) :
    get_template_part( 'partials/page', 'about-us' );
  endif; ?>
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
      <div class="row d-flex align-items-center mb-5 pt-5 mx-0">
        <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 col-xl-6 d-sm-none d-none d-lg-block d-xl-block d-md-block">
          <div class="tab-content" id="nav-tabContentGraph">
            <div class="tab-pane fade show active" role="tabpanel">
              <nav>
                <div class="nav nav-tabs justify-content-between" id="nav-tab-graph" role="tablist" style="border:none!important;margin-bottom:30px;">
                  <div class="content-nav-graph">
                    <a class="nav-graph-link active" id="comprehensive-tab" data-toggle="tab" href="#comprehensive" role="tab" aria-controls="comprehensive" aria-selected="true">
                      <img src="<?php gtdu('/assets/Commprensive_icon.png'); ?>" alt="icon">
                      <p>Comprehensive Illustration</p>
                    </a>
                  </div>
                  <div class="content-nav-graph">
                    <a class="nav-graph-link" id="accurate-tab" data-toggle="tab" href="#accurate" role="tab" aria-controls="accurate" aria-selected="false">
                      <img src="<?php gtdu('/assets/Accumulate_icon.png'); ?>" alt="icon">
                      <p>Accurate Illustration</p>
                    </a>
                  </div>
                  <div class="content-nav-graph">
                    <a class="nav-graph-link" id="continouos-tab" data-toggle="tab" href="#continouos" role="tab" aria-controls="continouos" aria-selected="false">
                      <img src="<?php gtdu('/assets/Continuos_icon.png'); ?>" alt="icon">
                      <p>Continouos Illustration</p>
                    </a>
                  </div>
                  <div class="content-nav-graph">
                    <a class="nav-graph-link" id="daily-tab" data-toggle="tab" href="#daily" role="tab" aria-controls="daily" aria-selected="false">
                      <img src="<?php gtdu('/assets/Daily_icon.png'); ?>" alt="icon">
                      <p>Daily Illustration</p>
                    </a>
                  </div>
                  <div class="content-nav-graph">
                    <a class="nav-graph-link" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="customer" aria-selected="false">
                      <img src="<?php gtdu('/assets/Customer_icon.png'); ?>" alt="icon">
                      <p>Customer Illustration</p>
                    </a>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-xl-6 tab-content d-sm-none d-none d-lg-block d-xl-block d-md-block">
          <img src="<?php gtdu('/assets/Comprehensive_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane active" id="comprehensive" role="tabpanel" aria-labelledby="comprehensive-tab">
          <img src="<?php gtdu('/assets/Accurate_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane" id="accurate" role="tabpanel" aria-labelledby="accurate-tab">
          <img src="<?php gtdu('/assets/Continouos_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane" id="continouos" role="tabpanel" aria-labelledby="continouos-tab">
          <img src="<?php gtdu('/assets/Daily_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane" id="daily" role="tabpanel" aria-labelledby="daily-tab">
          <img src="<?php gtdu('/assets/Customer_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane" id="customer" role="tabpanel" aria-labelledby="customer-tab">
        </div>
        <div class="col-sm-12 accordion d-md-none d-xl-none d-lg-none d-block d-sm-block" id="accordionExample">
          <div class="card">
            <div class="heading" id="headingOne">
              <a class="nav-item active" id="comprehensive-tab" href="#comprehensive" role="tab"  data-toggle="collapse" data-target="#collapseOne"aria-expanded="true" aria-controls="collapseOne" >
                <img src="<?php gtdu('/assets/Commprensive_icon.png'); ?>" alt="icon">
                <p>Comprehensive Illustration</p>
              </a>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body text-body">
                IvyDB contains a complete historical record of end-of-day data on all US exchange-traded equity and index options (including options on ETF's and ADR's) from January 1996 onward. The data includes both daily option pricing information (symbol, date, closing, bid and ask quote, volume, and open interest) as well as high, low, and closing prices for the underlying equity or index. IvyDB also provides all interest rate, dividend, and corporate action information for each security, so you can correlate your own option pricing models with calculations.
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
          <div class="card">
            <div class="heading" id="headingTwo">
              <a class="nav-item nav-graph-link" id="accurate-tab" href="#accurate" role="tab" aria-selected="false" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <img src="<?php gtdu('/assets/Accumulate_icon.png'); ?>" alt="icon">
                <p>Accurate Illustration</p>
              </a>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body text-body">
                IvyDB contains a complete historical record of end-of-day data on all US exchange-traded equity and index options (including options on ETF's and ADR's) from January 1996 onward. The data includes both daily option pricing information (symbol, date, closing, bid and ask quote, volume, and open interest) as well as high, low, and closing prices for the underlying equity or index. IvyDB also provides all interest rate, dividend, and corporate action information for each security, so you can correlate your own option pricing models with calculations.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="heading" id="headingThree">
              <a class="nav-item nav-graph-link" id="continouos-tab" href="#continouos" role="tab"  aria-selected="false" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <img src="<?php gtdu('/assets/Continuos_icon.png'); ?>" alt="icon">
                <p>Continouos Illustration</p>
              </a>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body text-body">
                IvyDB contains a complete historical record of end-of-day data on all US exchange-traded equity and index options (including options on ETF's and ADR's) from January 1996 onward. The data includes both daily option pricing information (symbol, date, closing, bid and ask quote, volume, and open interest) as well as high, low, and closing prices for the underlying equity or index. IvyDB also provides all interest rate, dividend, and corporate action information for each security, so you can correlate your own option pricing models with calculations.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="heading" id="headingFour">
              <a class="nav-item nav-graph-link" id="continouos-tab" href="#continouos" role="tab" aria-selected="false" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <img src="<?php gtdu('/assets/Continuos_icon.png'); ?>" alt="icon">
                <p>Continouos Illustration</p>
              </a>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body text-body">
                IvyDB contains a complete historical record of end-of-day data on all US exchange-traded equity and index options (including options on ETF's and ADR's) from January 1996 onward. The data includes both daily option pricing information (symbol, date, closing, bid and ask quote, volume, and open interest) as well as high, low, and closing prices for the underlying equity or index. IvyDB also provides all interest rate, dividend, and corporate action information for each security, so you can correlate your own option pricing models with calculations.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="heading" id="headingFive">
              <a class="nav-item nav-graph-link" id="customer-tab" href="#customer" role="tab" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" aria-selected="false">
                <img src="<?php gtdu('/assets/Customer_icon.png'); ?>" alt="icon">
                <p>Customer Illustration</p>
              </a>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body">
                IvyDB contains a complete historical record of end-of-day data on all US exchange-traded equity and index options (including options on ETF's and ADR's) from January 1996 onward. The data includes both daily option pricing information (symbol, date, closing, bid and ask quote, volume, and open interest) as well as high, low, and closing prices for the underlying equity or index. IvyDB also provides all interest rate, dividend, and corporate action information for each security, so you can correlate your own option pricing models with calculations.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row d-flex align-items-center mb-5 pt-5 mx-0">
        <div class="col-sm-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 wuo-img">
          <img src="<?php gtdu('/assets/Data_illustration.png'); ?>" alt="">
        </div>
        <div class="col-sm-12 col-md-5 col-xl-6 tab-content">
          <p class="section-title montserrat-medium mt-4">Why Use OptionMetrics Historical Options Data</p>
          <p class="text-grey lato-light h5 mb-5">Using the tool for graphing realized nd implied volatility data.</p>
          <button class="btn btn-warning montserrat-medium btn-main-slider btn-get-started">Get Started</button>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <!-- /Data Products page -->

  <!-- News & Events page -->
  <?php if ( is_page( 'news-events') ) : ?>
  <div class="container">
    <div class="position-relative page-wrapper-up pt-5 ">
      <div class="row">
        <div class="col-12 px-5">
          <?php get_template_part( 'partials/news', 'featured-page' ); ?>
        </div>
        <?php get_template_part( 'partials/news', 'events-pagination' ); ?>
        <?php get_template_part( 'partials/news', 'news-pagination' ); ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <!-- /News & Events page -->

  <!-- Contact page-->
  <?php if ( is_page( 'contact') ) : ?>
  <div class="container">
    <div class="position-relative page-wrapper-up pt-5 ">
      <div class="row">
        <div class="container-form col-lg-6 col-md-6 col-sm-12">
          <div class="form-cont">
            <p class="page-feature-text">
              Please complete the form below detailing your request and a member of our support staff will respond  as soon as possible.
            </p>
            <?php echo do_shortcode( '[contact-form-7 id="157" title="contact-form-om"]' ); ?>
          </div>
        </div>
        <div class="container-info col-lg-6 col-md-6 col-sm-12">
          <div class="form-cont">
            <div class="logo-mob">
              <img class="logo_toggle" src="http://localhost/optionmetrics/wp-content/themes/omtheme/assets/logo_toggle_menu.png" alt="optionmetrics logo" id="header-logo" width="160px">
            </div>
            <br>
            <br>
            <address>
              OptionMetrics LLC<br>
              1776 Broadway, Suite 1800<br>
              New Yord, NY 10019<br>
            </address>

            <address>
              <strong>Phone: </strong>(212) 707-8370<br>
              <strong>Fax: </strong>(212) 707-8495<br>
            </address>

            <address>
              <strong>DayTime support -</strong> 8:00 AM to 6:00 PM ET (New York)<br>
              (212) 707-8370<br>
            </address>

            <address>
              <strong>After-hours support -</strong> ungent issues only<br>
              (800) 269-9192<br>
            </address>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <!-- /Contact page -->

  <!-- Get qualification -->
  <?php if( is_page( 'qualification-process') ) : ?>
  <div class="container">
    <div class="row">
      <div class="position-relative page-wrapper-up pt-5 form-cont">
        <div class="form-cont">
          <div class="col-12 px-5">
          <?php echo do_shortcode( '[contact-form-7 id="188" title="qualification-process-form"]' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
  <!-- /Get qualification -->

  <!-- Research page -->
  <?php if( is_page( 'research' ) ) : ?>
  <div class="container">
    <div class="position-relative page-wrapper-up">
      <div class="row">
        <div class="col-12 p-4 text-center">
          <p class="section-title text-blue">Research</p>
          <p class="text-blue o-50 lato-regular h6 mx-auto" style="max-width:880px;">OptionMetrics data is an essential component of many studies performed by both academics and practitioners. Below is a partial list of academic papers that used OptionMetrics data:</p>
        </div>
        <div class="col-12 px-4 pb-5 text-center hide-show-more d-md-none">
          <?php get_template_part( 'partials/research', 'mobile' ); ?>
        </div>
        <div class="col-12 px-4 d-none d-md-block hide-show-more text-center">
          <?php get_template_part( 'partials/research', 'featured' ); ?>
        </div>
        <div class="col-sm-7 d-none d-md-block hide-show-more">
          <?php get_template_part( 'partials/research', 'desktop' ); ?>
        </div>
        <div class="col-sm-5">
          <?php get_template_part( 'partials/research', 'papers' ); ?>
          <?php get_template_part( 'partials/research', 'years' ); ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <!-- /Research page -->

 <!-- Privacy Policy Page-->
  <?php if( is_page( 'privacy-policy') ) : ?>
 <div class="container">
    <?php get_template_part('privacy', 'policy-page')?>
  </div>
  <?php endif; ?>

  <!-- /Privacy Policy Page -->

<?php get_footer(); ?>
