// =================================================================================================================
//                                              JavaScript global
// =================================================================================================================

/******* Chargement de la bibliothéque Skrollr *******/

document.addEventListener("DOMContentLoaded", function () {
  // Vérifier si on est sur un appareil mobile
  var isMobile = /Android|iPhone|iPad|iPod|Windows Phone|webOS/i.test(
    navigator.userAgent
  );

  if (!isMobile && typeof skrollr !== "undefined") {
    var s = skrollr.init();
  }
});
