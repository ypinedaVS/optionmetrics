jQuery(document).ready(function($) {
  $('.partner-img').on('hover', function() {
    $(this).addClass('active')
    if ($(this).hasClass('david')) {
      $('.partner-img.robert').removeClass('active')
      $('.partner-img.eran').removeClass('active')
      $('.partner.david').addClass('d-lg-inline-block')
      $('.partner.robert').removeClass('d-lg-inline-block')
      $('.partner.eran').removeClass('d-lg-inline-block')
    }
    if ($(this).hasClass('robert')) {
      $('.partner-img.david').removeClass('active')
      $('.partner-img.eran').removeClass('active')
      $('.partner.david').removeClass('d-lg-inline-block')
      $('.partner.robert').addClass('d-lg-inline-block')
      $('.partner.eran').removeClass('d-lg-inline-block')
    }
    if ($(this).hasClass('eran')) {
      $('.partner-img.david').removeClass('active')
      $('.partner-img.robert').removeClass('active')
      $('.partner.robert').removeClass('d-lg-inline-block')
      $('.partner.david').removeClass('d-lg-inline-block')
      $('.partner.eran').addClass('d-lg-inline-block')
    }
  })
})
