const burgerIcon = document.querySelector(".burgerIcon");
const crossIcon = document.querySelector(".crossIcon");
const mobileContent = document.querySelector(".mobileContent");
const menuLinks = document.querySelectorAll(".mobileContent a");

// Ouverture du menu mobile
burgerIcon.addEventListener("click", () => {
  mobileContent.classList.add("open");
  burgerIcon.classList.add("hiddenNow");
  crossIcon.classList.remove("hiddenNow");
});

// Fermeture du menu mobile
crossIcon.addEventListener("click", () => {
  mobileContent.classList.remove("open");
  burgerIcon.classList.remove("hiddenNow");
  crossIcon.classList.add("hiddenNow");
});

// Ajoute un événement de clic sur les liens du menu burger
menuLinks.forEach((link) => {
  link.addEventListener("click", () => {
    mobileContent.classList.remove("open");
    burgerIcon.classList.remove("hiddenNow");
    crossIcon.classList.add("hiddenNow");
  });
});
