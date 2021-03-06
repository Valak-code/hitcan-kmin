$(document).ready(function() {
  //login by google
  function onSignIn(googleUser) {
    let profile = googleUser.getBasicProfile();
    console.log("ID: " + profile.getId()); // Don't send this directly to your server!
    console.log("Full Name: " + profile.getName());
    console.log("Given Name: " + profile.getGivenName());
    console.log("Family Name: " + profile.getFamilyName());
    console.log("Image URL: " + profile.getImageUrl());
    console.log("Email: " + profile.getEmail());

    let id_token = googleUser.getAuthResponse().id_token;
    console.log("ID Token: " + id_token);
  }
  function onSuccess(googleUser) {
    console.log("Logged in as: " + googleUser.getBasicProfile().getName());
  }
  function onFailure(error) {
    console.log(error);
  }

  function renderButton() {
    gapi.signin2.render("my-signin2", {
      scope: "profile email",
      width: 210,
      height: 28,
      onsuccess: onSuccess,
      onfailure: onFailure
    });
  }
  renderButton();

  $("#forget-password-button").on("click", () => {
    $("#get-email-tab").css("display", "block");
    $("#get-id-code").css("display", "none");
  });

  $("#get-email").on("click", () => {
    if ($("#email-forget-pass").hasClass("valid")) {
      $("#get-email-tab").css("display", "none");
      $("#get-id-code").css("display", "block");
    }
  });
});
