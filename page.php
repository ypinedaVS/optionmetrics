<?php get_template_part( 'partials/page', 'hero' ); ?>

  <!-- About page -->
  <?php if( is_page( 'about-us') ) :
    get_template_part( 'partials/page', 'about-us' );
  endif; ?>
  <!-- /About page -->

  <!-- Data Products page -->
  <?php if( is_page( 'data-products') ) : ?>
  <div class="container">
    <div class="position-relative page-wrapper-up py-3 p-lg-5">
      <div class="row d-md-none">
        <div class="col-12 text-center">
          <p class="section-title text-blue montserrat-regular">Data Analysis Products</p>
        </div>
      </div>

      <?php get_template_part( 'partials/maps' ); ?>

      <!-- US -->
      <div class="row d-flex align-items-center mb-5 pt-5 mx-0 CO-body" >
        <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 col-xl-6 d-sm-none d-none d-lg-block d-xl-block d-md-block">
          <div id="accordion">
            <div class="card content-nav-graph">
              <div id="headingOne" class="orange1">
                <a class="nav-graph-link switch-png" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <img src="<?php gtdu('/assets/Commprensive_icon.png'); ?>" alt="icon">
                  <p>Comprehensive Coverage</p>
                </a>
              </div>
              <div id="collapseOne" class="collapse show orange1" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body align-t">
                  IvyDB contains a complete historical record of end-of-day data on all US exchange-traded equity and index options (including options on ETF’s and ADR’s) from January 1996 onward. The data includes both daily option pricing information (symbol, date, closing bid and ask quote, volume, and open interest) as well as high, low, and closing prices for the underlying equity or index. IvyDB also provides all interest rate, dividend, and corporate action information for each security, so you can correlate your own option pricing models with calculations.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingTwo" class="green2">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <img src="<?php gtdu('/assets/Accumulate_icon.png'); ?>" alt="icon">
                  <p>Accurate Calculations</p>
                </a>
              </div>

              <div id="collapseTwo" class="collapse green2" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body align-t">
                  For each option price, we calculate an accurate implied volatility and store it along with the option sensitivities (delta, gamma, vega, and theta). Both European and American models are used as appropriate, with dividend/split adjustments correctly incorporated.

                  In addition, a standardized constant-maturity volatility surface is calculated for each security every day, including interpolated implied volatilities over a wide range of expirations and moneyness (by delta). You can use our volatility surface to create your own volatility trading strategies, whether simple or complex.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingThree" class="ping3">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <img src="<?php gtdu('/assets/Continuos_icon.png'); ?>" alt="icon">
                  <p>Continuos Time Series</p>
                </a>
              </div>

              <div id="collapseThree" class="collapse ping3" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body align-t">
                  Our database handles underlying symbol changes, dividend payments, and split/spinoff adjustments for you automatically. A permanent ID is associated with each instrument (equity, index, or option) to allow it to be easily tracked over time even when the option symbol, strike price or deliverables change. We also include a record of underlying security name and ticker changes, to allow you to easily search for options on securities either no longer trade or trade under a new ticker symbol.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingFour" class="blue4">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <img src="<?php gtdu('/assets/Daily_icon.png'); ?>" alt="icon">
                  <p>Daily Updates</p>
                </a>
              </div>

              <div id="collapseFour" class="collapse blue4" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body align-t">
                  IvyDB US is updated daily to incorporate new end-of-day prices in all the equity and option exchanges we follow. A daily patch file is also provided which contains corrections to previous prices or calculations when needed. Your IvyDB database is always current and ready to use.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingFive" class="purple5">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <img src="<?php gtdu('/assets/Customer_icon.png'); ?>" alt="icon">
                  <p>Customer Support</p>
                </a>
              </div>

              <div id="collapseFive" class="collapse purple5" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body align-t">
                  As an OptionMetrics customer, you will receive dedicated support and expert guidance from day one. We provide you with step-by-step manuals for installation, and in-depth Reference Manuals for your day-to-day use. Should you have any questions, our support team is available Monday through Friday, 8AM to 6PM (EST); for urgent issues, assistance is available 24/7.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5 col-xl-6 tab-content d-sm-none d-none d-lg-block d-xl-block d-md-block">
          <img src="<?php gtdu('/assets/Comprehensive_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane active comprehensive" id="comprehensive" role="tabpanel" aria-labelledby="comprehensive-tab">

          <img src="<?php gtdu('/assets/Accurate_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane accurate" id="accurate" role="tabpanel" aria-labelledby="accurate-tab">

          <img src="<?php gtdu('/assets/Continouos_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane continouos" id="continouos" role="tabpanel" aria-labelledby="continouos-tab">

          <img src="<?php gtdu('/assets/Daily_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane daily" id="daily" role="tabpanel" aria-labelledby="daily-tab">

          <img src="<?php gtdu('/assets/Customer_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane customer" id="customer" role="tabpanel" aria-labelledby="customer-tab">
        </div>

        <!-- vista responsive -->
        <!-- <div class="col-sm-12 accordion d-md-none d-xl-none d-lg-none d-block d-sm-block" id="accordionExample">
          <div class="card">
            <div class="heading" id="headingOne">
              <a class="nav-item active" id="comprehensive-tab" href="#comprehensive" role="tab"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                <img src="<?php gtdu('/assets/Commprensive_icon.png'); ?>" alt="icon">
                <p>Comprehensive Illustration</p>
              </a>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body text-body1 align-t">
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
              <div class="card-body text-body2 align-t">
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
              <div class="card-body text-body3 align-t">
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
              <div class="card-body text-body4 align-t">
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
              <div class="card-body text-body5 align-t">
                IvyDB contains a complete historical record of end-of-day data on all US exchange-traded equity and index options (including options on ETF's and ADR's) from January 1996 onward. The data includes both daily option pricing information (symbol, date, closing, bid and ask quote, volume, and open interest) as well as high, low, and closing prices for the underlying equity or index. IvyDB also provides all interest rate, dividend, and corporate action information for each security, so you can correlate your own option pricing models with calculations.
              </div>
            </div>
          </div>
        </div> -->
      </div>

      <!-- CANADA -->
      <div class="row d-flex align-items-center mb-5 pt-5 mx-0 CO-body" >
        <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 col-xl-6 d-sm-none d-none d-lg-block d-xl-block d-md-block">
          <div id="accordion">
            <div class="card content-nav-graph">
              <div id="headingSix" class="orange1">
                <a class="nav-graph-link switch-png" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                  <img src="<?php gtdu('/assets/Commprensive_icon.png'); ?>" alt="icon">
                  <p>Comprehensive Coverage</p>
                </a>
              </div>
              <div id="collapseSix" class="collapse show orange1" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body align-t">
                  IvyDB Canada covers over 200 optionable securities (equities, indices, and ETFs) from Canadian exchanges. Historical data and daily updates are available for most securities since March 2007. The data includes daily option pricing information (settlement prices), our own dividend projections, and all historical distributions and corporate actions, such as splits, mergers, and name changes.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingSeven" class=" green2">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  <img src="<?php gtdu('/assets/Accumulate_icon.png'); ?>" alt="icon">
                  <p>Accurate Calculations</p>
                </a>
              </div>

              <div id="collapseSeven" class="collapse green2" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body align-t">
                  For each option price, we calculate an accurate implied volatility and store it along with the option sensitivities (delta, gamma, vega , and theta). Both European and American models are used as appropriate, with dividend/split adjustments correctly incorporated. In addition, a standardized constant-maturity volatility surface is calculated for each security every day, including interpolated implied volatilities over a wide range of expirations and moneyness (by delta). You can use our volatility surface to create your own volatility trading strategies, whether simple or complex.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingEight" class=" ping3">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  <img src="<?php gtdu('/assets/Continuos_icon.png'); ?>" alt="icon">
                  <p>Continuos Time Series</p>
                </a>
              </div>

              <div id="collapseEight" class="collapse ping3" aria-labelledby="headingEight" data-parent="#accordion">
                <div class="card-body align-t">
                  Our database handles underlying symbol changes, dividend payments, and split/spinoff adjustments for you automatically. A permanent ID is associated with each instrument (equity, index, or option) to allow it to be easily tracked over time even when the option symbol, strike price or deliverables change. We also include a record of underlying security name and ticker changes, to allow you to easily search for options on securities either no longer trade or trade under a new ticker symbol.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingNine" class="blue4">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                  <img src="<?php gtdu('/assets/Daily_icon.png'); ?>" alt="icon">
                  <p>Daily Updates</p>
                </a>
              </div>

              <div id="collapseNine" class="collapse blue4" aria-labelledby="headingNine" data-parent="#accordion">
                <div class="card-body align-t">
                  IvyDB Canada is updated daily to incorporate new end-of-day prices in all the equity and option exchanges we follow. A daily patch file is also provided which contains corrections to previous prices or calculations when needed. Your IvyDB database is always current and ready to use.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingTen" class="purple5">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                  <img src="<?php gtdu('/assets/Customer_icon.png'); ?>" alt="icon">
                  <p>Customer Support</p>
                </a>
              </div>

              <div id="collapseTen" class="collapse purple5" aria-labelledby="headingTen" data-parent="#accordion">
                <div class="card-body align-t">
                  As an OptionMetrics customer, you will receive dedicated support and expert guidance from day one. We provide you with step-by-step manuals for installation, and in-depth Reference Manuals for your day-to-day use. Should you have any questions, our support team is available Monday through Friday, 8AM to 6PM (EST); for urgent issues, assistance is available 24/7.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5 col-xl-6 tab-content d-sm-none d-none d-lg-block d-xl-block d-md-block">
          <img src="<?php gtdu('/assets/Comprehensive_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane active comprehensive" id="comprehensive" role="tabpanel" aria-labelledby="comprehensive-tab">
          <img src="<?php gtdu('/assets/Accurate_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane accurate" id="accurate" role="tabpanel" aria-labelledby="accurate-tab">
          <img src="<?php gtdu('/assets/Continouos_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane continouos" id="continouos" role="tabpanel" aria-labelledby="continouos-tab">
          <img src="<?php gtdu('/assets/Daily_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane daily" id="daily" role="tabpanel" aria-labelledby="daily-tab">
          <img src="<?php gtdu('/assets/Customer_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane customer" id="customer" role="tabpanel" aria-labelledby="customer-tab">
        </div>

        <!-- vista responsive -->
        <!-- <div class="col-sm-12 accordion d-md-none d-xl-none d-lg-none d-block d-sm-block" id="accordionExample">
          <div class="card">
            <div class="heading" id="headingOne">
              <a class="nav-item active" id="comprehensive-tab" href="#comprehensive" role="tab"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                <img src="<?php gtdu('/assets/Commprensive_icon.png'); ?>" alt="icon">
                <p>Comprehensive Illustration</p>
              </a>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body text-body1 align-t">
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
              <div class="card-body text-body2 align-t">
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
              <div class="card-body text-body3 align-t">
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
              <div class="card-body text-body4 align-t">
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
              <div class="card-body text-body5 align-t">
                IvyDB contains a complete historical record of end-of-day data on all US exchange-traded equity and index options (including options on ETF's and ADR's) from January 1996 onward. The data includes both daily option pricing information (symbol, date, closing, bid and ask quote, volume, and open interest) as well as high, low, and closing prices for the underlying equity or index. IvyDB also provides all interest rate, dividend, and corporate action information for each security, so you can correlate your own option pricing models with calculations.
              </div>
            </div>
          </div>
        </div> -->
      </div>

      <!-- EUROPE -->
      <div class="row d-flex align-items-center mb-5 pt-5 mx-0 CO-body" >
        <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 col-xl-6 d-sm-none d-none d-lg-block d-xl-block d-md-block">
          <div id="accordion">
            <div class="card content-nav-graph">
              <div id="headingEleven" class="orange1">
                <a class="nav-graph-link switch-png" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                  <img src="<?php gtdu('/assets/Commprensive_icon.png'); ?>" alt="icon">
                  <p>Comprehensive Coverage</p>
                </a>
              </div>
              <div id="collapseEleven" class="collapse show orange1" aria-labelledby="headingEleven" data-parent="#accordion">
                <div class="card-body align-t">
                  IvyDB Europe covers over 900 optionable securities (equities and indices), from all major European exchanges, including the UK, France, Germany, Switzerland, Netherlands, Belgium, Spain, and Italy. Historical data and daily updates are available for most securities since January 2002. The data includes daily option pricing information (settlement prices), our own dividend projections, and all historical distributions and corporate actions, such as splits, mergers, and name changes.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingTwelve" class="green2">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                  <img src="<?php gtdu('/assets/Accumulate_icon.png'); ?>" alt="icon">
                  <p>Accurate Calculations</p>
                </a>
              </div>

              <div id="collapseTwelve" class="collapse green2" aria-labelledby="headingTwelve" data-parent="#accordion">
                <div class="card-body align-t">
                  We match each option price with the security price for accurate implied volatility and greeks calculations along with the option sensitivities (delta, gamma, vega , and theta). In addition, a standardized constant-maturity volatility surface is calculated for each security every day, including interpolated implied volatilities over a wide range of expirations and moneyness (by delta). You can use our volatility surface to create your own volatility trading strategies, whether simple or complex.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingThirteen" class=" ping3">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                  <img src="<?php gtdu('/assets/Continuos_icon.png'); ?>" alt="icon">
                  <p>Continuos Time Series</p>
                </a>
              </div>

              <div id="collapseThirteen" class="collapse ping3" aria-labelledby="headingThirteen" data-parent="#accordion">
                <div class="card-body align-t">
                  Our database handles underlying symbol changes, dividend payments, and split/spinoff adjustments for you automatically. A permanent ID is associated with each instrument (equity, index, or option) to allow it to be easily tracked over time even when the option symbol, strike price or deliverables change. We also include a record of underlying security name and ticker changes, to allow you to easily search for options on securities either no longer trade or trade under a new ticker symbol.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingFourteen" class=" blue4">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                  <img src="<?php gtdu('/assets/Daily_icon.png'); ?>" alt="icon">
                  <p>Daily Updates</p>
                </a>
              </div>

              <div id="collapseFourteen" class="collapse blue4" aria-labelledby="headingFourteen" data-parent="#accordion">
                <div class="card-body align-t">
                  IvyDB Europe is updated daily to incorporate new end-of-day prices in all the equity and option exchanges we follow. A daily patch file is also provided which contains corrections to previous prices or calculations when needed. Your IvyDB database is always current and ready to use.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingFifteen" class=" purple5">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                  <img src="<?php gtdu('/assets/Customer_icon.png'); ?>" alt="icon">
                  <p>Customer Support</p>
                </a>
              </div>

              <div id="collapseFifteen" class="collapse purple5" aria-labelledby="headingFifteen" data-parent="#accordion">
                <div class="card-body align-t">
                  As an OptionMetrics customer, you will receive dedicated support and expert guidance from day one. We provide you with step-by-step manuals for installation, and in-depth Reference Manuals for your day-to-day use. Should you have any questions, our support team is available Monday through Friday, 8AM to 6PM (EST); for urgent issues, assistance is available 24/7.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5 col-xl-6 tab-content d-sm-none d-none d-lg-block d-xl-block d-md-block">
          <img src="<?php gtdu('/assets/Comprehensive_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane active comprehensive" id="comprehensive" role="tabpanel" aria-labelledby="comprehensive-tab">
          <img src="<?php gtdu('/assets/Accurate_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane accurate" id="accurate" role="tabpanel" aria-labelledby="accurate-tab">
          <img src="<?php gtdu('/assets/Continouos_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane continouos" id="continouos" role="tabpanel" aria-labelledby="continouos-tab">
          <img src="<?php gtdu('/assets/Daily_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane daily" id="daily" role="tabpanel" aria-labelledby="daily-tab">
          <img src="<?php gtdu('/assets/Customer_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane customer" id="customer" role="tabpanel" aria-labelledby="customer-tab">
        </div>

        <!-- vista responsive -->
        <!-- <div class="col-sm-12 accordion d-md-none d-xl-none d-lg-none d-block d-sm-block" id="accordionExample">
          <div class="card">
            <div class="heading" id="headingOne">
              <a class="nav-item active" id="comprehensive-tab" href="#comprehensive" role="tab"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                <img src="<?php gtdu('/assets/Commprensive_icon.png'); ?>" alt="icon">
                <p>Comprehensive Illustration</p>
              </a>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body text-body1 align-t">
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
              <div class="card-body text-body2 align-t">
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
              <div class="card-body text-body3 align-t">
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
              <div class="card-body text-body4 align-t">
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
              <div class="card-body text-body5 align-t">
                IvyDB contains a complete historical record of end-of-day data on all US exchange-traded equity and index options (including options on ETF's and ADR's) from January 1996 onward. The data includes both daily option pricing information (symbol, date, closing, bid and ask quote, volume, and open interest) as well as high, low, and closing prices for the underlying equity or index. IvyDB also provides all interest rate, dividend, and corporate action information for each security, so you can correlate your own option pricing models with calculations.
              </div>
            </div>
          </div>
        </div> -->
      </div>

      <!-- ASIA -->
      <div class="row d-flex align-items-center mb-5 pt-5 mx-0 CO-body">
        <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 col-xl-6 d-sm-none d-none d-lg-block d-xl-block d-md-block">
          <div id="accordion">
            <div class="card content-nav-graph">
              <div id="headingSixteen" class="orange1">
                <a class="nav-graph-link switch-png" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                  <img src="<?php gtdu('/assets/Commprensive_icon.png'); ?>" alt="icon">
                  <p>Comprehensive Coverage</p>
                </a>
              </div>
              <div id="collapseSixteen" class="collapse show orange1" aria-labelledby="headingSixteen" data-parent="#accordion">
                <div class="card-body align-t">
                  IvyDB Asia covers over 500 optionable securities (equities and indices), from all major Asian-Pacific exchanges, including Hong Kong, Japan, Taiwan, Korea, and Australia. Historical data and daily updates are available for most securities since January 2006. The data includes daily option pricing information (settlement prices), our own dividend projections, and all historical distributions and corporate actions, such as splits, mergers, and name changes.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingSeventeen" class="green2">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                  <img src="<?php gtdu('/assets/Accumulate_icon.png'); ?>" alt="icon">
                  <p>Accurate Calculations</p>
                </a>
              </div>

              <div id="collapseSeventeen" class="collapse green2" aria-labelledby="headingSeventeen" data-parent="#accordion">
                <div class="card-body align-t">
                  We match each option price with the security price for accurate implied volatility and greeks calculations along with the option sensitivities (delta, gamma, vega , and theta). In addition, a standardized constant-maturity volatility surface is calculated for each security every day, including interpolated implied volatilities over a wide range of expirations and moneyness (by delta). You can use our volatility surface to create your own volatility trading strategies, whether simple or complex.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingEighteen" class="ping3">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                  <img src="<?php gtdu('/assets/Continuos_icon.png'); ?>" alt="icon">
                  <p>Continuos Time Series</p>
                </a>
              </div>

              <div id="collapseEighteen" class="collapse ping3" aria-labelledby="headingEighteen" data-parent="#accordion">
                <div class="card-body align-t">
                  Our database handles underlying symbol changes, dividend payments, and split/spinoff adjustments for you automatically. A permanent ID is associated with each instrument (equity, index, or option) to allow it to be easily tracked over time even when the option symbol, strike price or deliverables change. We also include a record of underlying security name and ticker changes, to allow you to easily search for options on securities either no longer trade or trade under a new ticker symbol.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingNineteen" class="blue4">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                  <img src="<?php gtdu('/assets/Daily_icon.png'); ?>" alt="icon">
                  <p>Daily Updates</p>
                </a>
              </div>

              <div id="collapseNineteen" class="collapse blue4" aria-labelledby="headingNineteen" data-parent="#accordion">
                <div class="card-body align-t">
                  IvyDB Asia is updated daily to incorporate new end-of-day prices in all the equity and option exchanges we follow. A daily patch file is also provided which contains corrections to previous prices or calculations when needed. Your IvyDB database is always current and ready to use.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingTwenty" class="purple5">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                  <img src="<?php gtdu('/assets/Customer_icon.png'); ?>" alt="icon">
                  <p>Customer Support</p>
                </a>
              </div>

              <div id="collapseTwenty" class="collapse purple5" aria-labelledby="headingTwenty" data-parent="#accordion">
                <div class="card-body align-t">
                  As an OptionMetrics customer, you will receive dedicated support and expert guidance from day one. We provide you with step-by-step manuals for installation, and in-depth Reference Manuals for your day-to-day use. Should you have any questions, our support team is available Monday through Friday, 8AM to 6PM (EST); for urgent issues, assistance is available 24/7.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5 col-xl-6 tab-content d-sm-none d-none d-lg-block d-xl-block d-md-block">
          <img src="<?php gtdu('/assets/Comprehensive_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane active comprehensive" id="comprehensive" role="tabpanel" aria-labelledby="comprehensive-tab">
          <img src="<?php gtdu('/assets/Accurate_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane accurate" id="accurate" role="tabpanel" aria-labelledby="accurate-tab">
          <img src="<?php gtdu('/assets/Continouos_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane continouos" id="continouos" role="tabpanel" aria-labelledby="continouos-tab">
          <img src="<?php gtdu('/assets/Daily_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane daily" id="daily" role="tabpanel" aria-labelledby="daily-tab">
          <img src="<?php gtdu('/assets/Customer_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane customer" id="customer" role="tabpanel" aria-labelledby="customer-tab">
        </div>

        <!-- vista responsive -->
        <!-- <div class="col-sm-12 accordion d-md-none d-xl-none d-lg-none d-block d-sm-block" id="accordionExample">
          <div class="card">
            <div class="heading" id="headingOne">
              <a class="nav-item active" id="comprehensive-tab" href="#comprehensive" role="tab"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                <img src="<?php gtdu('/assets/Commprensive_icon.png'); ?>" alt="icon">
                <p>Comprehensive Illustration</p>
              </a>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body text-body1 align-t">
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
              <div class="card-body text-body2 align-t">
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
              <div class="card-body text-body3 align-t">
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
              <div class="card-body text-body4 align-t">
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
              <div class="card-body text-body5 align-t">
                IvyDB contains a complete historical record of end-of-day data on all US exchange-traded equity and index options (including options on ETF's and ADR's) from January 1996 onward. The data includes both daily option pricing information (symbol, date, closing, bid and ask quote, volume, and open interest) as well as high, low, and closing prices for the underlying equity or index. IvyDB also provides all interest rate, dividend, and corporate action information for each security, so you can correlate your own option pricing models with calculations.
              </div>
            </div>
          </div>
        </div> -->
      </div>

      <!-- GLOBAL -->
      <div class="row d-flex align-items-center mb-5 pt-5 mx-0 CO-body" >
        <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 col-xl-6 d-sm-none d-none d-lg-block d-xl-block d-md-block">
          <div id="accordion">
            <div class="card content-nav-graph">
              <div id="headingTwentyone" class="orange1">
                <a class="nav-graph-link switch-png" data-toggle="collapse" data-target="#collapseTwentyone" aria-expanded="true" aria-controls="collapseTwentyone">
                  <img src="<?php gtdu('/assets/Commprensive_icon.png'); ?>" alt="icon">
                  <p>Comprehensive Coverage</p>
                </a>
              </div>
              <div id="collapseTwentyone" class="collapse show orange1" aria-labelledby="headingTwentyone" data-parent="#accordion">
                <div class="card-body align-t">
                  IvyDB Global Indices covers 29 major indices from exchanges in the US, Europe, Asia, and Canada. Historical data and daily updates are available for most securities since 1996 for the US, 2002 for Europe, and 2006 for Asia and Canada. The data includes daily option pricing information (settlement prices), our own dividend projections, and all historical distributions and corporate actions, such as splits, mergers, and name changes.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingTwentytwo" class="green2">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseTwentytwo" aria-expanded="false" aria-controls="collapseTwentytwo">
                  <img src="<?php gtdu('/assets/Accumulate_icon.png'); ?>" alt="icon">
                  <p>Accurate Calculations</p>
                </a>
              </div>

              <div id="collapseTwentytwo" class="collapse green2" aria-labelledby="headingTwentytwo" data-parent="#accordion">
                <div class="card-body align-t">
                  We match each option price with the security price for accurate implied volatility and greeks calculations, along with the option sensitivities (delta, gamma, vega, and theta). Both European and American models are used as appropriate, with dividend/split adjustments correctly incorporated. In addition, a standardized constant-maturity volatility surface is calculated for each security every day, including interpolated implied volatilities over a wide range of expirations and moneyness (by delta). You can use our volatility surface to create your own volatility trading strategies, whether simple or complex.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingTwentythree" class="ping3">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseTwentythree" aria-expanded="false" aria-controls="collapseTwentythree">
                  <img src="<?php gtdu('/assets/Continuos_icon.png'); ?>" alt="icon">
                  <p>Continuos Time Series</p>
                </a>
              </div>

              <div id="collapseTwentythree" class="collapse ping3" aria-labelledby="headingTwentythree" data-parent="#accordion">
                <div class="card-body align-t">
                  Our database handles underlying symbol changes, dividend payments, and split/spinoff adjustments for you automatically. A permanent ID is associated with each instrument (equity, index, or option) to allow it to be easily tracked over time even when the option symbol, strike price or deliverables change. We also include a record of underlying security name and ticker changes, to allow you to easily search for options on securities either no longer trade or trade under a new ticker symbol.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingTwentyfour" class="blue4">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseTwentyfour" aria-expanded="false" aria-controls="collapseTwentyfour">
                  <img src="<?php gtdu('/assets/Daily_icon.png'); ?>" alt="icon">
                  <p>Daily Updates</p>
                </a>
              </div>

              <div id="collapseTwentyfour" class="collapse blue4" aria-labelledby="headingTwentyfour" data-parent="#accordion">
                <div class="card-body align-t">
                  IvyDB Global Indices is updated daily to incorporate new end-of-day prices in all the equity and option exchanges we follow. A daily patch file is also provided which contains corrections to previous prices or calculations when needed. Your IvyDB database is always current and ready to use.
                </div>
              </div>
            </div>

            <div class="card content-nav-graph">
              <div id="headingTwentyfive" class="purple5">
                <a class="nav-graph-link collapsed switch-png" data-toggle="collapse" data-target="#collapseTwentyfive" aria-expanded="false" aria-controls="collapseTwentyfive">
                  <img src="<?php gtdu('/assets/Customer_icon.png'); ?>" alt="icon">
                  <p>Customer Support</p>
                </a>
              </div>

              <div id="collapseTwentyfive" class="collapse purple5" aria-labelledby="headingTwentyfive" data-parent="#accordion">
                <div class="card-body align-t">
                  As an OptionMetrics customer, you will receive dedicated support and expert guidance from day one. We provide you with step-by-step manuals for installation, and in-depth Reference Manuals for your day-to-day use. Should you have any questions, our support team is available Monday through Friday, 8AM to 6PM (EST); for urgent issues, assistance is available 24/7.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5 col-xl-6 tab-content d-sm-none d-none d-lg-block d-xl-block d-md-block">
          <img src="<?php gtdu('/assets/Comprehensive_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane active comprehensive" id="comprehensive" role="tabpanel" aria-labelledby="comprehensive-tab">
          <img src="<?php gtdu('/assets/Accurate_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane accurate" id="accurate" role="tabpanel" aria-labelledby="accurate-tab">
          <img src="<?php gtdu('/assets/Continouos_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane continouos" id="continouos" role="tabpanel" aria-labelledby="continouos-tab">
          <img src="<?php gtdu('/assets/Daily_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane daily" id="daily" role="tabpanel" aria-labelledby="daily-tab">
          <img src="<?php gtdu('/assets/Customer_illustration.PNG'); ?>" alt="Graph" class="img-fluid tab-pane customer" id="customer" role="tabpanel" aria-labelledby="customer-tab">
        </div>

        <!-- vista responsive -->
        <!-- <div class="col-sm-12 accordion d-md-none d-xl-none d-lg-none d-block d-sm-block" id="accordionExample">
          <div class="card">
            <div class="heading" id="headingOne">
              <a class="nav-item active" id="comprehensive-tab" href="#comprehensive" role="tab"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                <img src="<?php gtdu('/assets/Commprensive_icon.png'); ?>" alt="icon">
                <p>Comprehensive Illustration</p>
              </a>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body text-body1 align-t">
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
              <div class="card-body text-body2 align-t">
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
              <div class="card-body text-body3 align-t">
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
              <div class="card-body text-body4 align-t">
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
              <div class="card-body text-body5 align-t">
                IvyDB contains a complete historical record of end-of-day data on all US exchange-traded equity and index options (including options on ETF's and ADR's) from January 1996 onward. The data includes both daily option pricing information (symbol, date, closing, bid and ask quote, volume, and open interest) as well as high, low, and closing prices for the underlying equity or index. IvyDB also provides all interest rate, dividend, and corporate action information for each security, so you can correlate your own option pricing models with calculations.
              </div>
            </div>
          </div>
        </div> -->
      </div>

      <div class="row d-flex align-items-center mb-5 pt-5 mx-0">
        <div class="col-sm-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 wuo-img">
          <img src="<?php gtdu('/assets/Data_illustration.png'); ?>" alt="">
        </div>
        <div class="col-sm-12 col-md-5 col-xl-6 tab-content">
          <p class="section-title montserrat-medium mt-4">Why Use OptionMetrics Historical Options Data</p>
          <p class="text-grey lato-light h5 mb-5">Using the tool for graphing realized nd implied volatility data.</p>
          <a class="btn btn-warning mb-3 btn-main-slider montserrat-medium" href="/qualification-process/">Get Started</a>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <!-- /Data Products page -->

  <!-- News & Events page -->
  <?php if ( is_page( 'news-events') ) : ?>
  <div class="container">
    <div class="position-relative page-wrapper-up pt-5">
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
    <div class="position-relative page-wrapper-up pt-5">
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
              <img class="logo_toggle" src="<?php gtdu('/assets/logo_final/logo_white_back.png'); ?>" alt="optionmetrics logo" id="header-logo" width="160px">
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
    <div class="position-relative page-wrapper-up pt-5">
      <div class="row">
        <div class="container-form col-lg-12 col-md-12 col-sm-12 col-xs-12 px-3">
          <div class=" form-cont form-cont-gq">
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
          <p class="section-title text-blue d-md-none">Research</p>
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

<script type="text/javascript">
  const $ = window.jQuery;

  // Data Analysis Products by Location

  const buttons = document.getElementsByClassName('US-button');
  const bodies = document.getElementsByClassName('CO-body');

  Object.keys(buttons).map(function (that, i) {
    buttons[that].addEventListener('click', function() {
      dispatchToggle(that);
    })
  });

  const dispatchToggle = function dispatchToggle(i) {
    Object.keys(bodies).map(function (that) {
      if (that === i) {
        bodies[that].style.cssText = 'display:block';
      } else {
        bodies[that].style.cssText = 'display:none !important';
      }
    })
  }

  dispatchToggle('0');

  // Data Analysis Images
  const collapsibles = document.getElementsByClassName('switch-png');
  // const bodies = document.getElementsByClassName('CO-body');

  Object.keys(collapsibles).forEach(function (that) {
    collapsibles[that].addEventListener('click', function() {
      dispatchImage(this);
    })
  });

  const dispatchImage = function dispatchImage(image) {
    const pivot = $(image).data('target');

    switch(pivot) {
      // comprehensive
      case '#collapseOne':
      case '#collapseSix':
      case '#collapseEleven':
      case '#collapseSixteen':
      case '#collapseTwentyone':
        toggleImage('comprehensive');
        break;
      // accurate
      case '#collapseTwo':
      case '#collapseSeven':
      case '#collapseTwelve':
      case '#collapseSeventeen':
      case '#collapseTwentytwo':
        toggleImage('accurate');
        break;
      // continouos
      case '#collapseThree':
      case '#collapseEight':
      case '#collapseThirteen':
      case '#collapseEighteen':
      case '#collapseTwentythree':
        toggleImage('continouos');
        break;
      // daily
      case '#collapseFour':
      case '#collapseNine':
      case '#collapseFourteen':
      case '#collapseNineteen':
      case '#collapseTwentyfour':
        toggleImage('daily');
        break;
      // customer
      case '#collapseFive':
      case '#collapseTen':
      case '#collapseFifteen':
      case '#collapseTwenty':
      case '#collapseTwentyfive':
        toggleImage('customer');
        break;
      default:
        console.log("default")
    }
  }

  function toggleImage(img) {
    const a = ['comprehensive', 'accurate', 'continouos', 'daily', 'customer'];
    a.forEach((image, i) => {
      if (image === img) {
        [0,1,2,3,4].forEach(function (i) { $('.' + img)[i].style.cssText = 'display:block'; });
      } else {
        [0,1,2,3,4].forEach(function (i) { $('.' + image)[i].style.cssText = 'display:none !important'; });
      }
    })
  }
</script>
