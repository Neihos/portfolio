const burgerIcon = document.querySelector(".burgerIcon");
const crossIcon = document.querySelector(".crossIcon");
const mobileContent = document.querySelector(".mobileContent");
const menuLinks = document.querySelectorAll(".mobileContent a");
const burgerMenuButton = document.querySelector(".burgerMenu");

// Fonction pour vérifier la taille de la fenêtre et retirer la classe "open" si la largeur dépasse 767px
function burgerMenuMobile() {
  function checkWindowSize() {
    if (window.innerWidth > 767) {
      mobileContent.classList.remove("open");
      burgerIcon.classList.remove("hiddenNow");
      crossIcon.classList.add("hiddenNow");
      document.body.style.overflow = "auto";
    }
  }

  // Vérifie et observe la taille de la fenêtre
  checkWindowSize();
  window.addEventListener("resize", checkWindowSize);

  // Ajoute un événement de clic sur le bouton du menu burger
  burgerMenuButton.addEventListener("click", () => {
    mobileContent.classList.toggle("open");
    const isOpen = mobileContent.classList.contains("open");

    // Met à jour l'affichage des icônes
    if (isOpen) {
      burgerIcon.classList.add("hiddenNow");
      crossIcon.classList.remove("hiddenNow");
    } else {
      burgerIcon.classList.remove("hiddenNow");
      crossIcon.classList.add("hiddenNow");
    }

    // Désactive le défilement du corps de la page si le menu est ouvert
    document.body.style.overflow = isOpen ? "hidden" : "auto";
  });

  // Ajoute un événement de clic sur les liens du menu burger
  menuLinks.forEach((link) => {
    link.addEventListener("click", () => {
      mobileContent.classList.remove("open");
      burgerIcon.classList.remove("hiddenNow");
      crossIcon.classList.add("hiddenNow");

      // Réactive le défilement du corps de la page à la fermeture du menu
      document.body.style.overflow = "auto";
    });
  });
}

burgerMenuMobile();