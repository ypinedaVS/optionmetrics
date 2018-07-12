jQuery(document).ready(function($) {
  $('#nav-tab-country a').on('click', function() {
    $('img.map').addClass('d-none')
    $('img.map.'+$(this).data('country')).removeClass('d-none')
  })
})
