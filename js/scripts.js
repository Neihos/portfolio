// =================================================================================================================
//                                              JavaScript global
// =================================================================================================================

/******* Chargement de la bibliothéque Skrollr *******/

document.addEventListener("DOMContentLoaded", function () {
  if (typeof skrollr !== "undefined") {
    var s = skrollr.init();
  } else {
    console.error("Skrollr n'est pas chargé.");
  }
});
