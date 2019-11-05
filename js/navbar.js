$(document).ready(function() {
  $(".sidenav").sidenav();

  let prevScrollpos = $(window).scrollTop();
  $(window).scroll(() => {
    let currentScrollPos = $(window).scrollTop();
    if (prevScrollpos > currentScrollPos) {
      $(".navbar-fixed").css("top", "0");
    } else {
      $(".navbar-fixed").css("top", "-64px");
    }
    prevScrollpos = currentScrollPos;
  });
});
