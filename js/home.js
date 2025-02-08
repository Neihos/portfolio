// =================================================================================================================
//                                              Javascript de la page d'accueil
// =================================================================================================================

document.addEventListener("DOMContentLoaded", () => {
  if (document.querySelector(".main-container")) {
    
    //-----> Animations des cercles des skills <-----

    function skillup() {
      const skillElements = [
        document.querySelector("#myHtml"),
        document.querySelector("#myWordpress"),
        document.querySelector("#myCss"),
        document.querySelector("#sql"),
        document.querySelector("#myJavascript"),
        document.querySelector("#myPhp"),
      ];

      const observerOptions = {
        root: null,
        threshold: 0.5, // 90% du cercle visible
        rootMargin: "0px 0px -5% 0px",
      };

      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const skillElement = entry.target;

            // Lancer l'animation pour le cercle visible
            const circle = skillElement.querySelector("circle");
            circle.classList.add("load");

            const targetNumber = skillElement.querySelector("#number");

            if (skillElement.id === "myHtml") {
              animateCounter(targetNumber, 90, 15);
            } else if (skillElement.id === "myWordpress") {
              animateCounter(targetNumber, 85, 15);
            } else if (skillElement.id === "myCss") {
              animateCounter(targetNumber, 75, 17);
            } else if (skillElement.id === "sql") {
              animateCounter(targetNumber, 45, 35);
            } else if (skillElement.id === "myJavascript") {
              animateCounter(targetNumber, 60, 25);
            } else if (skillElement.id === "myPhp") {
              animateCounter(targetNumber, 55, 27);
            }

            observer.unobserve(skillElement); // Stopper l'observation après le déclenchement
          }
        });
      }, observerOptions);

      // Observer chaque élément de compétence
      skillElements.forEach((circle) => {
        observer.observe(circle);
      });

      // Fonction générique pour animer les compteurs
      function animateCounter(targetElement, maxValue, intervalTime) {
        let counter = 0;

        if (!targetElement) {
          console.error("Élément introuvable pour l'animation.");
          return;
        }

        const interval = setInterval(() => {
          if (counter >= maxValue) {
            clearInterval(interval);
          } else {
            counter++;
            targetElement.innerHTML = counter + "%";
          }
        }, intervalTime);
      }
    }

    skillup();

    // Gestion des textes des skills selon le responsive

    function toggleDetailsOnResize() {
      const detailsElements = document.querySelectorAll("details"); // Sélectionne tous les éléments <details>

      if (window.innerWidth > 1024) {
        detailsElements.forEach((details) => {
          details.setAttribute("open", ""); // Ajoute l'attribut open
        });
      } else {
        detailsElements.forEach((details) => {
          details.removeAttribute("open"); // Retire l'attribut open si la largeur est inférieure ou égale à 1024px
        });
      }
    }

    // Exécute la fonction au chargement de la page
    toggleDetailsOnResize();

    // Écoute les changements de taille de la fenêtre
    window.addEventListener("resize", toggleDetailsOnResize);


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
