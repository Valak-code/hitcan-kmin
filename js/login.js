$(document).ready(function() {
  $("#facebook-login").on("click", () => {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
      console.log(response);
    });
  });
});
