// =================================================================================================================
//                                              Javascript de la page d'accueil
// =================================================================================================================

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

jQuery(document).ready(function ($) {
  let currentPage = 1;

  // -----> Action avec le bouton Charger plus <-----

  $("#loadMoreSites").on("click", function () {
    currentPage++; // Incrémentation de la page
    loadSites(false); // Charge les sites sans réinitialiser le conteneur
  });

  function loadSites(resetContainer) {
    $.ajax({
      url: novaneos_js.ajax_url,
      type: "POST",
      data: {
        action: "load_more_sites",
        page: currentPage,
        security: novaneos_js.nonce,
      },
      success: function (response) {
        if (resetContainer) {
          $(".mySites").html(
            response == 0 ? "<p>fin du portfolio.</p>" : response
          );
        } else {
          if (response == 0) {
            // Pas plus de sites à charger
            $("#loadMoreSites").prop("disabled", true).html("Fin du portfolio");
          } else {
            $(".mySites").append(response); // Ajoute les nouveaux sites à la liste existante
          }
        }
        $(".mySites").removeClass("updating-content"); // Réaffiche le contenu
      },
      error: function () {
        console.error(
          "Une erreur s'est produite lors du chargement des sites."
        );
      },
    });
  }
});
