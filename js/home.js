document.addEventListener("DOMContentLoaded", () => {
  if (document.querySelector(".main-container")) {
    /******* Animations des pourcentages des skills *******/

    // HTML

    function updateCircleHtml() {
      let counter = 0;
      const targetElement = document.querySelector("#myHtml #number");

      // Vérifiez si l'élément existe
      if (!targetElement) {
        console.error("Élément #myPhp #number introuvable.");
        return;
      }

      let interval = setInterval(() => {
        if (counter === 90) {
          clearInterval(interval);
        } else {
          counter += 1;
          targetElement.innerHTML = counter + "%";
        }
      }, 15);
    }

    updateCircleHtml();

    // Wordpress

    function updateCircleWp() {
      let counter = 0;
      const targetElement = document.querySelector("#myWordpress #number");

      // Vérifiez si l'élément existe
      if (!targetElement) {
        console.error("Élément #myPhp #number introuvable.");
        return;
      }

      let interval = setInterval(() => {
        if (counter === 85) {
          clearInterval(interval);
        } else {
          counter += 1;
          targetElement.innerHTML = counter + "%";
        }
      }, 15);
    }

    updateCircleWp();

    // CSS

    function updateCircleCss() {
      let counter = 0;
      const targetElement = document.querySelector("#myCss #number");

      // Vérifiez si l'élément existe
      if (!targetElement) {
        console.error("Élément #myPhp #number introuvable.");
        return;
      }

      let interval = setInterval(() => {
        if (counter === 75) {
          clearInterval(interval);
        } else {
          counter += 1;
          targetElement.innerHTML = counter + "%";
        }
      }, 17);
    }

    updateCircleCss();

    // SQL

    function updateCircleSql() {
      let counter = 0;
      const targetElement = document.querySelector("#mySql #number");

      // Vérifiez si l'élément existe
      if (!targetElement) {
        console.error("Élément #myPhp #number introuvable.");
        return;
      }

      let interval = setInterval(() => {
        if (counter === 45) {
          clearInterval(interval);
        } else {
          counter += 1;
          targetElement.innerHTML = counter + "%";
        }
      }, 35);
    }

    updateCircleSql();

    // Javascript

    function updateCircleJs() {
      let counter = 0;
      const targetElement = document.querySelector("#myJavascript #number");

      // Vérifiez si l'élément existe
      if (!targetElement) {
        console.error("Élément #myPhp #number introuvable.");
        return;
      }

      let interval = setInterval(() => {
        if (counter === 60) {
          clearInterval(interval);
        } else {
          counter += 1;
          targetElement.innerHTML = counter + "%";
        }
      }, 25);
    }

    updateCircleJs();

    // PHP

    function updateCirclePhp() {
      let counter = 0;
      const targetElement = document.querySelector("#myPhp #number");

      // Vérifiez si l'élément existe
      if (!targetElement) {
        console.error("Élément #myPhp #number introuvable.");
        return;
      }

      let interval = setInterval(() => {
        if (counter === 55) {
          clearInterval(interval);
        } else {
          counter += 1;
          targetElement.innerHTML = counter + "%";
        }
      }, 27);
    }

    updateCirclePhp();
  }
});
