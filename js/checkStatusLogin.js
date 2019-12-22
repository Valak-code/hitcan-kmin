$(document).ready(() => {
  let mediumRegex = new RegExp("((?=.*[a-z])(?=.*[0-9])(?=.{6,}))");
  let strongPassword = new RegExp("((?=.*[a-z])(?=.*[0-9])(?=.{8,}))");

  let flag,
    continue_value = false,
    inputPass;

  $("#password").on("input", () => {
    if (continue_value === true) {
      continue_value = false;
      removeConfirmPass();
    }
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
    let confirmPass = $("#confirm-password").val();
    if (flag == true && confirmPass == inputPass) {
      $("#confirm-password").removeClass("invalid");
      $("#confirm-password").addClass("valid");
      continue_value = true;
    } else {
      $("#confirm-password").addClass("invalid");
      $("#confirm-password").removeClass("validate");
      continue_value = false;
    }
  });

  const removeConfirmPass = () => {
    $("#confirm-password").addClass("invalid");
    $("#confirm-password").removeClass("validate");
  };
});
