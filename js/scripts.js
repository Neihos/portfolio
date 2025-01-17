/******* Chargement de la bibliothéque Skrollr *******/

document.addEventListener("DOMContentLoaded", function () {
  if (typeof skrollr !== "undefined") {
    var s = skrollr.init();
  } else {
    console.error("Skrollr n'est pas chargé.");
  }
});

/******* Animations des pourcentages des skills *******/

// HTML

function updateCircleHtml() {
  let counter = 0;
  let interval = setInterval(() => {
    if (counter === 90) {
      clearInterval(interval);
    } else {
      counter += 1;
      document.querySelector("#myHtml .skillBox #number").innerHTML =
        counter + "%";
    }
  }, 15);
}
updateCircleHtml();

// Wordpress

function updateCircleWp() {
  let counter = 0;
  let interval = setInterval(() => {
    if (counter === 85) {
      clearInterval(interval);
    } else {
      counter += 1;
      document.querySelector("#myWordpress .skillBox #number").innerHTML =
        counter + "%";
    }
  }, 15);
}
updateCircleWp();

// CSS

function updateCircleCss() {
  let counter = 0;
  let interval = setInterval(() => {
    if (counter === 75) {
      clearInterval(interval);
    } else {
      counter += 1;
      document.querySelector("#myCss .skillBox #number").innerHTML =
        counter + "%";
    }
  }, 17);
}
updateCircleCss();

// SQL

function updateCircleSql() {
  let counter = 0;
  let interval = setInterval(() => {
    if (counter === 45) {
      clearInterval(interval);
    } else {
      counter += 1;
      document.querySelector("#mySql #number").innerHTML = counter + "%";
    }
  }, 35);
}
updateCircleSql();

// Javascript

function updateCircleJs() {
  let counter = 0;
  let interval = setInterval(() => {
    if (counter === 60) {
      clearInterval(interval);
    } else {
      counter += 1;
      document.querySelector("#myJavascript #number").innerHTML = counter + "%";
    }
  }, 25);
}
updateCircleJs();

// PHP

function updateCirclePhp() {
  let counter = 0;
  let interval = setInterval(() => {
    if (counter === 55) {
      clearInterval(interval);
    } else {
      counter += 1;
      document.querySelector("#myPhp #number").innerHTML = counter + "%";
    }
  }, 27);
}
updateCirclePhp();