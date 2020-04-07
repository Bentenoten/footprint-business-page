function snackbar() {
  var snack = document.getElementById("snackbar");

  snack.className = "show";
  setTimeout(function(){ snack.className = snack.className.replace("show", ""); }, 5000);
}

function dataVisualisation1() {
  var data1 = document.getElementById("data-visualisation-1");

  data1.className = "show";
  setTimeout(function(){ data1.className = data1.className.replace("show", ""); }, 5000);
}

function dataVisualisation2() {
  var data2 = document.getElementById("data-visualisation-2");

  data2.className = "show";
  setTimeout(function(){ data2.className = data2.className.replace("show", ""); }, 5000);
}

function dataVisualisation3() {
  var data3 = document.getElementById("data-visualisation-3");

  data3.className = "show";
  setTimeout(function(){ data3.className = data3.className.replace("show", ""); }, 5000);
}

function dataVisualisation4() {
  var data4 = document.getElementById("data-visualisation-4");

  data4.className = "show";
  setTimeout(function(){ data4.className = data4.className.replace("show", ""); }, 5000);
}

var match = document.getElementsByClassName("match-icon")[0];
var trash = document.getElementsByClassName("trash-icon")[0];

function matchClick() {
  if (!match.classList.contains("choice-made") && trash.classList.contains("choice-made") ) {
    console.log("test");
    match.classList.remove("choice-made");
    trash.classList.remove("choice-made");
  } else if (match.classList.contains("choice-made") && !trash.classList.contains("choice-made") ){
    match.classList.remove("choice-made");
    trash.classList.remove("choice-made");
  } else {
    match.classList.remove("choice-made");
    trash.classList.add("choice-made")
    snackbar();
  }
}

function trashClick() {
  if (!trash.classList.contains("choice-made") && match.classList.contains("choice-made") ) {
    console.log("test");
    trash.classList.remove("choice-made");
    match.classList.remove("choice-made");
  } else if (trash.classList.contains("choice-made") && !match.classList.contains("choice-made") ){
    trash.classList.remove("choice-made");
    match.classList.remove("choice-made");
  } else {
    trash.classList.remove("choice-made");
    match.classList.add("choice-made")
    location.href = "trash-vergeet-me-verzoek.php";
  }
}

function trashSnackbar() {
  snackbar();
}
