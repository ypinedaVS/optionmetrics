<div class="row d-flex align-items-center">
  <div class="col-md-5 col-xl-7 mb-5">
    <img src="<?php gtdu('/assets/us_map.png'); ?>" alt="Map" class="img-fluid map us">
    <img src="<?php gtdu('/assets/canada_map.png'); ?>" alt="Map" class="img-fluid map canada d-none">
    <img src="<?php gtdu('/assets/europe_map.png'); ?>" alt="Map" class="img-fluid map europe d-none">
    <img src="<?php gtdu('/assets/asia_map.png'); ?>" alt="Map" class="img-fluid map asia d-none">
    <img src="<?php gtdu('/assets/Map_Global.png'); ?>" alt="Map" class="img-fluid map global d-none">
  </div>
  <div class="col-md-7 col-xl-5">
    <nav>
      <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist" style="margin-bottom: 20px;">
        <a class="nav-item nav-link active" id="nav-tab-ivydb" data-toggle="tab" href="#nav-ivydb" role="tab" aria-controls="nav-ivydb" aria-selected="true" name="ivy">IvyDB</a>
        <a class="nav-item nav-link" id="nav-tab-optigraph" data-toggle="tab" href="#nav-optigraph" role="tab" aria-controls="nav-optigraph" aria-selected="false" name="optigraph">OptiGraph</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-ivydb" role="tabpanel" aria-labelledby="nav-ivydb-tab">
        <nav>
          <div class="nav nav-tabs justify-content-between" id="nav-tab-country" role="tablist" style="border:none!important;margin-bottom:30px;">
            <a class="nav-item nav-link active nav-item-country US-button" id="nav-tab-country-us" data-toggle="tab" data-country="us" href="#nav-us" role="tab" aria-controls="nav-us" aria-selected="true">US</a>

            <a class="nav-item nav-link nav-item-country US-button" id="nav-tab-country-canada" data-toggle="tab" data-country="canada" href="#nav-canada" role="tab" aria-controls="nav-canada" aria-selected="false">Canada</a>

            <a class="nav-item nav-link nav-item-country US-button" id="nav-tab-country-europe" data-toggle="tab" data-country="europe" href="#nav-europe" role="tab" aria-controls="nav-europe" aria-selected="true">Europe</a>

            <a class="nav-item nav-link nav-item-country US-button" id="nav-tab-country-asia" data-toggle="tab" data-country="asia" href="#nav-asia" role="tab" aria-controls="nav-asia" aria-selected="false">Asia</a>

            <a class="nav-item nav-link nav-item-country US-button" id="nav-tab-country-global" data-toggle="tab" data-country="global" href="#nav-global" role="tab" aria-controls="nav-global" aria-selected="false">Global</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tab-countryContent">
          <div class="tab-pane show active" id="nav-us" role="tabpanel">
            <p class="section-text lato-regular text-md-left">Since its launch in 2002, the IvyDB database has been the industry standard for historical option prices and implied volatility data. Used by over 300 institutions, IvyDB contains accurate end-of-day prices for options along with their correctly calculated implied volatilities and greeks. With IvyDB, you’ll be able to evaluate risk models, test trading strategies, and perform sophisticated research on all aspects of the options markets.</p>
          </div>
          <div class="tab-pane show" id="nav-canada" role="tabpanel">
            <p class="section-text lato-regular text-md-left">IvyDB Canada was launched in 2011, following the successes of its regional counterparts, IvyDB US, Europe, and Asia. Used by over 300 institutions, OptionMetrics’ IvyDB products contain accurate end-of-day prices for options along with their correctly calculated implied volatilities and greeks. With IvyDB, you’ll be able to evaluate risk models, test trading strategies, and perform sophisticated research on all aspects of the options markets.</p>
          </div>
          <div class="tab-pane show" id="nav-europe" role="tabpanel">
            <p class="section-text lato-regular text-md-left">Following the success of its US counterpart, IvyDB Europe was launched in 2008. It has since become the industry standard for historical option prices and implied volatility data in the European markets. Used by over 300 institutions, IvyDB contains accurate end-of-day prices for options along with their correctly calculated implied volatilities and greeks. With IvyDB, you’ll be able to evaluate risk models, test trading strategies, and perform sophisticated research on all aspects of the options markets.</p>
          </div>
          <div class="tab-pane show" id="nav-asia" role="tabpanel">
            <p class="section-text lato-regular text-md-left">Since its launch in 2010, IvyDB Asia has brought much-needed transparency of option prices and implied volatility data in the Asian markets. Used by over 300 institutions, OptionMetrics’ IvyDB products contain accurate end-of-day prices for options along with their correctly calculated implied volatilities and greeks. With IvyDB, you’ll be able to evaluate risk models, test trading strategies, and perform sophisticated research on all aspects of the options markets.</p>
          </div>
          <div class="tab-pane show" id="nav-global" role="tabpanel">
            <p class="section-text lato-regular text-md-left">Following the success of its regional counterparts (IvyDB US, Europe, Asia, and Canada), IvyDB Global Indices was launched in 2011. Used by over 300 institutions, OptionMetrics’ IvyDB products contain accurate end-of-day prices for options along with their correctly calculated implied volatilities and greeks. With IvyDB, you’ll be able to evaluate risk models, test trading strategies, and perform sophisticated research on all aspects of the options markets.</p>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-optigraph" role="tabpanel" aria-labelledby="nav-optigraph-tab">
        <p class="section-text lato-regular text-md-left">Optigraph is a flexible and fast charting tool for graphing realized and implied volatility data on all US optionable securities, including indices. Users can quickly view volatility patterns going as far back as 1996 and compare vols across securities.<br/><br/>
        With OptiGraph you can also calculate correlations between volatilities, analyze which vols are cheap or rich across underlying securities or different maturities, view skew patterns, trading volume, and more.<br/><br/>
        Currently, OptiGraph is used by professional options traders at major investment banks, prop trading shops, and hedge funds. Traditional money managers also use OptiGraph to quickly assess implied volatility levels for the stocks and indices they trade.<br/><br/>
        OptiGraph is powered by IvyDB, the high-quality historical option price and implied volatility database from OptionMetrics.</p>
      </div>
    </div>
    <?php if( !is_page( 'data-products' ) ) : ?>
    <div class="text-center text-md-left">
      <a href="/data-products/" class="btn btn-link text-uppercase pl-md-0 text-blue mt-4 mb-5 montserrat-medium">
        learn more
        <span class="fa fa-angle-double-right"></span>
      </a>
    </div>
  <?php endif; ?>
  </div>
</div>
