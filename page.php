<?php get_template_part( 'partials/page', 'hero' ); ?>

  <!-- About page -->
  <?php if( is_page( 'about-us') ) get_template_part( 'partials/page', 'about-us' ); ?>
  <!-- /About page -->

  <!-- Data Products page -->
  <?php if( is_page( 'data-products') ) get_template_part( 'partials/page', 'data-products' ); ?>
  <!-- /Data Products page -->

  <!-- News & Events page -->
  <?php if ( is_page( 'news-events') ) : ?>
  <div class="container">
    <div class="position-relative page-wrapper-up pt-5">
      <div class="row">
        <div class="col-12 px-5" id="events-offset">
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
          <p class="text-blue o-50 lato-regular h6 mx-auto px-md-5 pt-md-4" style="max-width:880px;">OptionMetrics data is an essential component of many studies performed by both academics and practitioners. Below is a partial list of academic papers that used OptionMetrics data:</p>
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
