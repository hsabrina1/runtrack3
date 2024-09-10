// Sélectionner le textarea avec l'ID "keylogger"
const textarea = document.getElementById("keylogger");

// Fonction pour ajouter une lettre dans le textarea
function logKey(e) {
    // Vérifier si la touche pressée est une lettre (a-z)
    if (e.key.length === 1 && e.key.match(/[a-z]/i)) {
        // Si le focus est dans le textarea, ajouter deux fois la lettre
        if (document.activeElement === textarea) {
            textarea.value += e.key + e.key;
        } else {
            // Sinon, ajouter la lettre une seule fois
            textarea.value += e.key;
        }
    }
}

// Attacher l'événement keypress à l'ensemble du document
document.addEventListener("keypress", logKey);

