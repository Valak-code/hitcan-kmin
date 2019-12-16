$(window).on("load", function() {
  $(".loader-wrapper").fadeOut("slow");
  $("body").removeClass("overflow-hidden");
  $(".parallax").parallax();
  $(".modal").modal();
  $(".dropdown-trigger").dropdown();
});
