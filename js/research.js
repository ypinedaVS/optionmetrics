(function($) {
  $.ajax({
    url: research_vars.ajaxurl,
    type: 'post',
    data: {
      action: 'do_research_ajax',
      year: 2018
    },
    success: function(data) {
      console.log(JSON.parse(data));
    }
  });
})(jQuery);
