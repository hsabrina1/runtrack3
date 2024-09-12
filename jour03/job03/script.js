// script.js
$(document).ready(function() {
    let videPosition = 9; // Position initiale de la case vide
  
    // Fonction pour mélanger les carreaux au début
    function melanger() {
      let carreaux = $('#plateau .carreau');
      let positions = [...Array(9).keys()].slice(1);
      positions = shuffle(positions);
  
      carreaux.each(function(index) {
        $(this).attr('data-position', positions[index]);
      });
  
      // Remet la case vide à la position 9
      $('.vide').attr('data-position', 9);
      videPosition = 9;
      $('#message').text('');
    }
  
    // Fonction pour vérifier si l'utilisateur a gagné
    function verifierVictoire() {
      let victoire = true;
      $('#plateau .carreau').each(function(index) {
        if ($(this).attr('data-position') != index + 1) {
          victoire = false;
          return false;
        }
      });
  
      if (victoire) {
        $('#message').text('Vous avez gagné !');
        $('#plateau .carreau').off('click'); // Bloque le jeu une fois la victoire atteinte
      }
    }
  
    // Fonction pour mélanger un tableau (algorithme de Fisher-Yates)
    function shuffle(array) {
      for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
      }
      return array;
    }
  
    // Fonction pour déplacer les carreaux
    function deplacerCarreau(carreau) {
      let carreauVide = $('.vide');
      let carreauPosition = carreau.attr('data-position');
      let videPosition = carreauVide.attr('data-position');
  
      // Échange la position des deux carreaux
      carreau.attr('data-position', videPosition);
      carreauVide.attr('data-position', carreauPosition);
  
      // Échange les éléments dans le DOM
      let carreauHTML = carreau.detach(); // Détache temporairement l'élément cliqué
      carreauVide.before(carreauHTML); // Insère le carreau cliqué avant la case vide
      carreauVide.replaceWith(carreauHTML); // Remplace l'ancienne position par le nouveau carreau
    }
  
    // Fonction de gestion des clics sur les carreaux
    $('#plateau').on('click', '.carreau', function() {
      let carreauPosition = parseInt($(this).attr('data-position'));
      let diff = Math.abs(carreauPosition - videPosition);
  
      if (diff === 1 || diff === 3) { // Vérifie si le carreau est adjacent à la case vide
        deplacerCarreau($(this));
        verifierVictoire();
      }
    });
  
    // Bouton recommencer
    $('#recommencer').on('click', function() {
      melanger();
      $('#plateau .carreau').on('click', function() {
        let carreauPosition = parseInt($(this).attr('data-position'));
        let diff = Math.abs(carreauPosition - videPosition);
  
        if (diff === 1 || diff === 3) {
          deplacerCarreau($(this));
          verifierVictoire();
        }
      });
    });
  
    // Initialisation du jeu
    melanger();
  });
  
  
  
  