jQuery(document).ready(function($) {
  $(".navbar-toggler").on("click", function() {
    if ($("#menu-bars").hasClass("d-none")) {
      $("#menu-bars").removeClass("d-none")
      $("#menu-times").addClass("d-none")
    } else {
      $("#menu-bars").addClass("d-none")
      $("#menu-times").removeClass("d-none")
    }
  })
})
