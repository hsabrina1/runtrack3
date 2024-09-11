$(document).ready(function() {
    // Quand on clique sur le bouton "Afficher"
    $('#showButton').click(function() {
        // Afficher la citation
        $('#citation').fadeIn();
        // Afficher le bouton "Cacher"
        $('#hideButton').show();
        // Cacher le bouton "Afficher"
        $('#showButton').hide();
    });

    // Quand on clique sur le bouton "Cacher"
    $('#hideButton').click(function() {
        // Cacher la citation
        $('#citation').fadeOut();
        // Cacher le bouton "Cacher"
        $('#hideButton').hide();
        // Réafficher le bouton "Afficher"
        $('#showButton').show();
    });
});
