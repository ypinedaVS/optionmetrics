jQuery(document).ready(function($) {
  $(window).on('scroll resize', function(e) {
    const scrollValue = $(window).scrollTop()

    if (scrollValue > 50) {
      $('.navbar').addClass('affix')
      $('.navbar-toggler').addClass('text-blue').removeClass('text-white')
      $('#navbarResponsive ul li a').addClass('text-blue').removeClass('text-white')
    } else {
      if ($('.navbar-toggler').hasClass('collapsed')) {
        $('.navbar').removeClass('affix')
        $('.navbar-toggler').removeClass('text-blue').addClass('text-white')
        $('#navbarResponsive ul li a').removeClass('text-blue').addClass('text-white')
      }
    }
  })

  $('.navbar-toggler').on('click', function() {
    const scrollValue = $(window).scrollTop()

    $('html, body').animate({ scrollTop: scrollValue <= 50 ? 51 : scrollValue === 51 ? 0 : scrollValue })
  })

  $(window).on('load resize', function(e) {
    const widthClient = $(this).innerWidth()

    if (widthClient >= 768) {
      $('#nav-tab').removeClass('justify-content-center')
    } else {
      $('#nav-tab').addClass('justify-content-center')
    }
  })
})
