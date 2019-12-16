// TODO hàm render ra những bài tập dễ
const renderExercisesEasy = exercisesObj => {
  let x;
  for (x in exercisesObj) {
    if (exercisesObj[x].level_code == 1) {
      $("#exercises-challenge").append(`<div class="card easy">
      <div class="card-content w-50">
        <h4 class="card-title grey-text text-darken-4">
          ${exercisesObj[x].name}
        </h4>
        <p class="cyan-text darken-4">${exercisesObj[x].level}</p>
      </div>
      <a
        class="btn btn-large waves-effect waves-light btn-challenge black-text"
        href="${exercisesObj[x].url}"
        >hit challenge</a
      >
    </div>`);
    }
  }
};

// TODO hàm render ra những bài tập bình thường
const renderExercisesNormal = exercisesObj => {
  let x;
  for (x in exercisesObj) {
    if (exercisesObj[x].level_code == 2) {
      $("#exercises-challenge").append(`<div class="card normal">
      <div class="card-content w-50">
        <h4 class="card-title grey-text text-darken-4">
          ${exercisesObj[x].name}
        </h4>
        <p class="green-text darken-4">${exercisesObj[x].level}</p>
      </div>
      <a
        class="btn btn-large waves-effect waves-light btn-challenge black-text"
        href="${exercisesObj[x].url}"
        >hit challenge</a
      >
    </div>`);
    }
  }
};

// TODO hàm render ra những bài tập Khó
const renderExercisesHard = exercisesObj => {
  let x;
  for (x in exercisesObj) {
    if (exercisesObj[x].level_code == 3) {
      $("#exercises-challenge").append(`<div class="card hard">
      <div class="card-content w-50">
        <h4 class="card-title grey-text text-darken-4">
          ${exercisesObj[x].name}
        </h4>
        <p class="orange-text darken-4">${exercisesObj[x].level}</p>
      </div>
      <a
        class="btn btn-large waves-effect waves-light btn-challenge black-text"
        href="${exercisesObj[x].url}"
        >hit challenge</a
      >
    </div>`);
    }
  }
};

// TODO hàm render ra những bài tập cực khó
const renderExercisesExtreme = exercisesObj => {
  let x;
  for (x in exercisesObj) {
    if (exercisesObj[x].level_code == 4) {
      $("#exercises-challenge").append(`<div class="card extreme">
      <div class="card-content w-50">
        <h4 class="card-title grey-text text-darken-4">
          ${exercisesObj[x].name}
        </h4>
        <p class="red-text darken-4">${exercisesObj[x].level}</p>
      </div>
      <a
        class="btn btn-large waves-effect waves-light btn-challenge black-text"
        href="${exercisesObj[x].url}"
        >hit challenge</a
      >
    </div>`);
    }
  }
};

// TODO hàm render ra full bài tập
const renderExercisesAll = exercisesObj => {
  let x;
  for (x in exercisesObj) {
    if (exercisesObj[x].level_code == 1) {
      $("#exercises-challenge").append(`<div class="card easy">
      <div class="card-content w-50">
        <h4 class="card-title grey-text text-darken-4">
          ${exercisesObj[x].name}
        </h4>
        <p class="cyan-text darken-4">${exercisesObj[x].level}</p>
      </div>
      <a
        class="btn btn-large waves-effect waves-light btn-challenge black-text"
        href="${exercisesObj[x].url}"
        >hit challenge</a
      >
    </div>`);
    } else if (exercisesObj[x].level_code == 2) {
      $("#exercises-challenge").append(`<div class="card normal">
      <div class="card-content w-50">
        <h4 class="card-title grey-text text-darken-4">
          ${exercisesObj[x].name}
        </h4>
        <p class="green-text darken-4">${exercisesObj[x].level}</p>
      </div>
      <a
        class="btn btn-large waves-effect waves-light btn-challenge black-text"
        href="${exercisesObj[x].url}"
        >hit challenge</a
      >
    </div>`);
    } else if (exercisesObj[x].level_code == 3) {
      $("#exercises-challenge").append(`<div class="card hard">
      <div class="card-content w-50">
        <h4 class="card-title grey-text text-darken-4">
          ${exercisesObj[x].name}
        </h4>
        <p class="orange-text darken-4">${exercisesObj[x].level}</p>
      </div>
      <a
        class="btn btn-large waves-effect waves-light btn-challenge black-text"
        href="${exercisesObj[x].url}"
        >hit challenge</a
      >
    </div>`);
    } else if (exercisesObj[x].level_code == 4) {
      $("#exercises-challenge").append(`<div class="card extreme">
      <div class="card-content w-50">
        <h4 class="card-title grey-text text-darken-4">
          ${exercisesObj[x].name}
        </h4>
        <p class="red-text darken-4">${exercisesObj[x].level}</p>
      </div>
      <a
        class="btn btn-large waves-effect waves-light btn-challenge black-text"
        href="${exercisesObj[x].url}"
        >hit challenge</a
      >
    </div>`);
    }
  }
};

$(document).ready(() => {
  // gọi API em sẽ nhận được 1 file json như này;
  // TODO cái này là json bài tập mà em nhận được khi gọi tới API của anh
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

  $(".modal").modal();

  renderExercisesAll(value.exercises);
  let count = 0;

  $("#easy").on("change", () => {
    if ($("#easy").is(":checked")) {
      $("#easy-mobile").attr("checked", true);
      if (count == 0) {
        $("#exercises-challenge").empty();
      }
      renderExercisesEasy(value.exercises);
      count++;
    } else {
      $("#easy-mobile").attr("checked", false);
      $(".easy").remove();
      count--;
    }
    if (count == 0) {
      renderExercisesAll(value.exercises);
    }
  });

  $("#easy-mobile").on("change", () => {
    if ($("#easy-mobile").is(":checked")) {
      $("#easy").attr("checked", true);
      if (count == 0) {
        $("#exercises-challenge").empty();
      }
      renderExercisesEasy(value.exercises);
      count++;
    } else {
      $("#easy").attr("checked", false);
      $(".easy").remove();
      count--;
    }
    if (count == 0) {
      renderExercisesAll(value.exercises);
    }
  });

  $("#normal").on("change", () => {
    if ($("#normal").is(":checked")) {
      $("#normal-mobile").attr("checked", true);
      if (count == 0) {
        $("#exercises-challenge").empty();
      }
      renderExercisesNormal(value.exercises);
      count++;
    } else {
      $("#normal-mobile").attr("checked", false);
      $(".normal").remove();
      count--;
    }
    if (count == 0) {
      renderExercisesAll(value.exercises);
    }
  });

  $("#normal-mobile").on("change", () => {
    if ($("#normal-mobile").is(":checked")) {
      $("#normal").attr("checked", true);
      if (count == 0) {
        $("#exercises-challenge").empty();
      }
      renderExercisesNormal(value.exercises);
      count++;
    } else {
      $("#normal").attr("checked", false);
      $(".normal").remove();
      count--;
    }
    if (count == 0) {
      renderExercisesAll(value.exercises);
    }
  });

  $("#hard").on("change", () => {
    if ($("#hard").is(":checked")) {
      $("#hard-mobile").attr("checked", true);
      if (count == 0) {
        $("#exercises-challenge").empty();
      }
      renderExercisesHard(value.exercises);
      count++;
    } else {
      $("#hard-mobile").attr("checked", false);
      $(".hard").remove();
      count--;
    }
    if (count == 0) {
      renderExercisesAll(value.exercises);
    }
  });

  $("#hard-mobile").on("change", () => {
    if ($("#hard-mobile").is(":checked")) {
      $("#hard").attr("checked", true);
      if (count == 0) {
        $("#exercises-challenge").empty();
      }
      renderExercisesHard(value.exercises);
      count++;
    } else {
      $("#hard").attr("checked", false);
      $(".hard").remove();
      count--;
    }
    if (count == 0) {
      renderExercisesAll(value.exercises);
    }
  });

  $("#extreme").on("change", () => {
    if ($("#extreme").is(":checked")) {
      $("#extreme-mobile").attr("checked", true);
      if (count == 0) {
        $("#exercises-challenge").empty();
      }
      renderExercisesExtreme(value.exercises);
      count++;
    } else {
      $("#extreme-mobile").attr("checked", false);
      $(".extreme").remove();
      count--;
    }
    if (count == 0) {
      renderExercisesAll(value.exercises);
    }
  });

  $("#extreme-mobile").on("change", () => {
    if ($("#extreme-mobile").is(":checked")) {
      $("#extreme").attr("checked", true);
      if (count == 0) {
        $("#exercises-challenge").empty();
      }
      renderExercisesExtreme(value.exercises);
      count++;
    } else {
      $("#extreme").attr("checked", false);
      $(".extreme").remove();
      count--;
    }
    if (count == 0) {
      renderExercisesAll(value.exercises);
    }
  });
});
