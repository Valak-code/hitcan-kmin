$(document).ready(function() {
  $(".modal").modal();

  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    items: 1,
    nav: true,
    navText: [
      '<button class="btn btn-small waves-effect waves-light purple accent-2 m-3"><i class="material-icons">chevron_left</i></button>',
      '<button class="btn btn-small waves-effect waves-light purple accent-2 m-3"><i class="material-icons">chevron_right</i></button>'
    ],
    dots: false
  });

  let toastLogin =
    '<span>Hãy chắc chắn là bạn đã hết cách :)))</span><button class="btn-flat toast-action modal-trigger" href="#modal1">OK</button>';

  let toastNoLogin = "<span>Bạn vẫn chưa đăng nhập</span>";

  let login = true;
  $("#need-help").on("click", () => {
    if (login === false) {
      M.toast({ html: toastNoLogin });
    } else {
      M.toast({ html: toastLogin });
    }
  });

  $(".owl-nav").addClass("center");
});
