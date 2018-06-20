jQuery(document).ready(function($) {
  $(window).on('scroll resize', function(e) {
    const scrollValue = $(window).scrollTop()

    if (scrollValue > 50) {
      $('.navbar').addClass('affix')
      $('.navbar-toggler').addClass('text-blue').removeClass('text-white')
      $('#navbarResponsive ul li a').addClass('text-blue').removeClass('text-white')
      $('#header-logo').attr('src', 'wp-content/themes/omtheme/assets/logo_toggle_menu.png')
    } else {
      if ($('.navbar-toggler').hasClass('collapsed')) {
        $('.navbar').removeClass('affix')
        $('.navbar-toggler').removeClass('text-blue').addClass('text-white')
        $('#navbarResponsive ul li a').removeClass('text-blue').addClass('text-white')
        $('#header-logo').attr('src', 'wp-content/themes/omtheme/assets/logo.png')
      }
    }
  })

  $('.navbar-toggler').on('click', function() {
    const scrollValue = $(window).scrollTop()

    $('html, body').animate({ scrollTop: scrollValue <= 50 ? 51 : scrollValue === 51 ? 0 : scrollValue })
    if ($(this).hasClass('collapsed')) {
      $('#search-icon').show()
    } else {
      $('#search-icon').hide()
    }
  })

  $(window).on('load resize', function(e) {
    const widthClient = $(this).innerWidth()

    if (widthClient >= 992) {
      $('ul.navbar-nav > li:first').hide()
      $('ul.navbar-nav > li:last').show()
    } else {
      $('ul.navbar-nav > li:first').show()
      $('ul.navbar-nav > li:last').hide()
    }
    if (widthClient >= 768) {
      $('#nav-tab').removeClass('justify-content-center')
    } else {
      $('#nav-tab').addClass('justify-content-center')
    }

  })

  $(window).on('load', function(e) {
    $('ul.navbar-nav > li:first').append('<span id="search-icon" class="fa fa-search text-blue position-absolute" style="top:97px;right:20px"></span>')
  })
})
