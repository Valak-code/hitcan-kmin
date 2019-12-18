$(document).ready(() => {
  let mediumRegex = new RegExp("((?=.*[a-z])(?=.*[0-9])(?=.{6,}))");
  let strongPassword = new RegExp("((?=.*[a-z])(?=.*[0-9])(?=.{8,}))");

  let flag, continue_value, inputPass;

  $("#password").on("input", () => {
    inputPass = $("#password").val();
    if (strongPassword.exec(inputPass)) {
      $("#password").addClass("valid");
      $("#password").removeClass("invalid");
      $("#helper-password").removeClass("medium");
      flag = true;
    } else if (mediumRegex.exec(inputPass)) {
      $("#password").addClass("invalid");
      $("#helper-password").addClass("medium");
      $("#helper-password").attr("data-error", "medium password");
      flag = true;
    } else {
      $("#password").removeClass("validate");
      $("#password").addClass("invalid");
      $("#helper-password").removeClass("medium");
      $("#helper-password").attr("data-error", "weak password");
      flag = false;
    }
  });

  $("#confirm-password").on("input", () => {
    let confirmPass;
    if (flag == true && confirmPass == inputPass) {
      console.log("alo");
      $("#confirm-password").removeClass("invalid");
      $("#confirm-password").addClass("valid");
      continue_value = true;
    } else {
      console.log("not match");
      $("#confirm-password").addClass("invalid");
      $("#confirm-password").removeClass("validate");
      continue_value = false;
    }
  });
});
