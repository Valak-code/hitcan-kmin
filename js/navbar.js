$(document).ready(function() {
  $(".sidenav").sidenav();
  $(".collapsible").collapsible();

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

  console.log(
    "%cPhi Khanh đẹp trai thanh lịch vô địch vũ trụ",
    "color: #1AB374; font-weight: bold; font-size: 3rem; text-shadow: 0 0 5px rgba(0, 0, 0, 0.2);"
  );

  console.log(
    "%cvô đây kím info bạn Khanh đẹp trai phải hong :)))",
    "color: #B055FA; font-weight: bold; font-size: 1.7rem; text-shadow: 0 0 5px rgba(0, 0, 0, 0.2);"
  );

  console.log(
    "%cKhông cho đâu Ahihi :))))",
    "color: #ff0000; font-weight: bold; font-size: 1.3rem; text-shadow: 0 0 5px rgba(0, 0, 0, 0.2);"
  );
});
