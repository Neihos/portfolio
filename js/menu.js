// Garde la couleur du lien actif de la navbar

document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll("#menu-header .menu-item a"); // Sélectionne tous les liens dans le menu
  const currentUrl = window.location.pathname; // Récupère le chemin relatif de l'URL actuelle

  links.forEach((link) => {
    const linkUrl = new URL(link.href); // Crée un objet URL pour le lien
    const linkPath = linkUrl.pathname; // Récupère le chemin relatif du lien

    // Si le chemin du lien correspond au chemin de la page actuelle, ajoute la classe 'active'
    if (linkPath === currentUrl || (currentUrl === "/" && linkPath === "/")) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });
});