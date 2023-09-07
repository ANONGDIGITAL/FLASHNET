// Attendre que le contenu du DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
  // Obtenir la navbar
  var navbar = document.getElementById('myNavbar');

  // Fonction pour gérer l'effet de fixation lente de la navbar
  function handleScroll() {
    // Obtenir la position de défilement verticale
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Déterminer si la navbar devrait être fixe ou pas
    if (scrollTop > 50) {
      navbar.classList.add('sticky'); // Ajouter la classe 'sticky'
      navbar.style.position = 'fixed';
      navbar.style.top = '0';
    } else {
      navbar.classList.remove('sticky'); // Supprimer la classe 'sticky'
      navbar.style.position = 'absolute';
      navbar.style.top = 'auto';
    }
  }

  // Écouter l'événement de défilement et appeler la fonction handleScroll
  window.addEventListener('scroll', handleScroll);
});
