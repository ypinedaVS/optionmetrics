jQuery(document).ready(function($) {
  function getQueryVariable(variable) {
    const query = window.location.search.substring(1)
    const vars = query.split("&")

    for (var i=0;i<vars.length;i++) {
      const pair = vars[i].split("=")

      if (pair[0] == variable) { return pair[1] }
    }
    return(false)
  }

  if (getQueryVariable('query_year') != false) {
    const top = $('#research-top').offset().top
    
    $('html, body').stop().animate({ scrollTop: top }, 1000)
  }

  $('.timeline-year').on('click', function(e) {
    const year = $(this).data('year')

    $('.timeline-year').removeClass('active')
    $('.entry').removeClass('active')
    $(this).addClass('active')
    $(this).parent().addClass('active')
    window.location.href = `/research?query_year=${year}`
  })
})
