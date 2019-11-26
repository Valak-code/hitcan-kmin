$(document).ready(function() {
  $("#email").on("keyup change", () => {
    $("#email-pass").attr("src", "img/email.png");
  });
  $("#password").on("keyup change", () => {
    $("#email-pass").attr("src", "img/pass.jpg");
  });

  window.fbAsyncInit = function() {
    FB.init({
      appId: "415702496037959",
      cookie: true,
      xfbml: true,
      status: true,
      version: "v5.0",
      oauth: true
    });

    FB.AppEvents.logPageView();
  };

  (function(d, s, id) {
    var js,
      fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
      return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  })(document, "script", "facebook-jssdk");

  $("#facebook-login").on("click", () => {
    FB.api("/me", function(response) {
      if (response && !response.error) {
        console.log(response);
      }
    });
  });

  //login by google
  function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log("ID: " + profile.getId()); // Don't send this directly to your server!
    console.log("Full Name: " + profile.getName());
    console.log("Given Name: " + profile.getGivenName());
    console.log("Family Name: " + profile.getFamilyName());
    console.log("Image URL: " + profile.getImageUrl());
    console.log("Email: " + profile.getEmail());

    var id_token = googleUser.getAuthResponse().id_token;
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
});
