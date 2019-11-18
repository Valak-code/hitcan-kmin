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

  const value = {
    exercises: [
      {
        id: 1,
        name: "Say hello word!",
        level: "Dễ",
        level_code: 1,
        url: "detail.html"
      },
      {
        id: 2,
        name: "Say hello word!",
        level: "Khó",
        level_code: 3,
        url: "detail.html"
      },
      {
        id: 3,
        name: "Say hello word!",
        level: "Bình Thường",
        level_code: 2,
        url: "detail.html"
      },
      {
        id: 4,
        name: "Say hello word!",
        level: "Cực Khó",
        level_code: 4,
        url: "detail.html"
      },
      {
        id: 5,
        name: "Say hello word!",
        level: "Dễ",
        level_code: 1,
        url: "detail.html"
      },
      {
        id: 6,
        name: "Say hello word!",
        level: "Khó",
        level_code: 3,
        url: "detail.html"
      },
      {
        id: 7,
        name: "Say hello word!",
        level: "Bình Thường",
        level_code: 2,
        url: "detail.html"
      },
      {
        id: 8,
        name: "Say hello word!",
        level: "Cực Khó",
        level_code: 4,
        url: "detail.html"
      }
    ]
  };

  const renderExercises = () => {
    let exercisesObj = value.exercises,
      x;
    for (x in exercisesObj) {
      if (exercisesObj[x].level_code == 1) {
        $("#exercises-challenge").append(`<div class="card">
        <div class="card-content w-50">
          <h4 class="card-title grey-text text-darken-4">
            ${exercisesObj[x].name}
          </h4>
          <p class="cyan-text darken-4">${exercisesObj[x].level}</p>
        </div>
        <a
          class="btn btn-large waves-effect waves-light btn-challenge"
          href="${exercisesObj[x].url}"
          >hit challenge</a
        >
      </div>`);
      } else if (exercisesObj[x].level_code == 2) {
        $("#exercises-challenge").append(`<div class="card">
        <div class="card-content w-50">
          <h4 class="card-title grey-text text-darken-4">
            ${exercisesObj[x].name}
          </h4>
          <p class="green-text darken-4">${exercisesObj[x].level}</p>
        </div>
        <a
          class="btn btn-large waves-effect waves-light btn-challenge"
          href="${exercisesObj[x].url}"
          >hit challenge</a
        >
      </div>`);
      } else if (exercisesObj[x].level_code == 3) {
        $("#exercises-challenge").append(`<div class="card">
        <div class="card-content w-50">
          <h4 class="card-title grey-text text-darken-4">
            ${exercisesObj[x].name}
          </h4>
          <p class="orange-text darken-4">${exercisesObj[x].level}</p>
        </div>
        <a
          class="btn btn-large waves-effect waves-light btn-challenge"
          href="${exercisesObj[x].url}"
          >hit challenge</a
        >
      </div>`);
      } else if (exercisesObj[x].level_code == 4) {
        $("#exercises-challenge").append(`<div class="card">
        <div class="card-content w-50">
          <h4 class="card-title grey-text text-darken-4">
            ${exercisesObj[x].name}
          </h4>
          <p class="red-text darken-4">${exercisesObj[x].level}</p>
        </div>
        <a
          class="btn btn-large waves-effect waves-light btn-challenge"
          href="${exercisesObj[x].url}"
          >hit challenge</a
        >
      </div>`);
      }
    }
  };

  renderExercises();
});
