function snackbar() {
  var snack = document.getElementById("snackbar");

  snack.className = "show";
  setTimeout(function(){ snack.className = snack.className.replace("show", ""); }, 3000);
}

var match = document.getElementsByClassName("match-icon")[0];
var trash = document.getElementsByClassName("trash-icon")[0];

function matchClick() {
  if (match.classList.contains("choice-made")) {
    match.classList.remove("choice-made");
    trash.classList.remove("choice-made");
  } else {
    match.classList.add("choice-made");
    trash.classList.remove ("choice-made")
    snackbar();
  }
}

function trashClick() {
  if (trash.classList.contains("choice-made")) {
    trash.classList.remove("choice-made");
    match.classList.remove("choice-made");
  } else {
    trash.classList.add("choice-made");
    match.classList.remove ("choice-made")
    location.href = "trash-vergeet-me-verzoek.php";
  }
}

function trashSnackbar() {
  snackbar();
}
