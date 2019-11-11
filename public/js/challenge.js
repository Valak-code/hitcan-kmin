$(document).ready(function() {
  $(".modal").modal();

  $("#easy").on("change", () => {
    if ($("#easy").is(":checked")) {
      $("#easy-mobile").attr("checked", true);
    } else {
      $("#easy-mobile").attr("checked", false);
      console.log($("#easy-mobile").is(":checked"));
    }
  });

  $("#easy-mobile").on("change", () => {
    if ($("#easy-mobile").is(":checked")) {
      $("#easy").attr("checked", true);
    } else {
      $("#easy").attr("checked", false);
    }
  });

  $("#normal").on("change", () => {
    if ($("#normal").is(":checked")) {
      $("#normal-mobile").attr("checked", true);
    } else {
      $("#normal-mobile").attr("checked", false);
    }
  });

  $("#normal-mobile").on("change", () => {
    if ($("#normal-mobile").is(":checked")) {
      $("#normal").attr("checked", true);
    } else {
      $("#normal").attr("checked", false);
    }
  });

  $("#hard").on("change", () => {
    if ($("#hard").is(":checked")) {
      $("#hard-mobile").attr("checked", true);
    } else {
      $("#hard-mobile").attr("checked", false);
    }
  });

  $("#hard-mobile").on("change", () => {
    if ($("#hard-mobile").is(":checked")) {
      $("#hard").attr("checked", true);
    } else {
      $("#hard").attr("checked", false);
    }
  });

  $("#extreme").on("change", () => {
    if ($("#extreme").is(":checked")) {
      $("#extreme-mobile").attr("checked", true);
    } else {
      $("#extreme-mobile").attr("checked", false);
    }
  });

  $("#extreme-mobile").on("change", () => {
    if ($("#extreme-mobile").is(":checked")) {
      $("#extreme").attr("checked", true);
    } else {
      $("#extreme").attr("checked", false);
    }
  });
});
