$(document).ready(function() {
  $("#email").on("keyup change", () => {
    $("#email-pass").attr("src", "img/email.png");
  });
  $("#password").on("keyup change", () => {
    $("#email-pass").attr("src", "img/pass.jpg");
  });
});
