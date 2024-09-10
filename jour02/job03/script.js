let compteur = 0;

// Fonction qui incrémente le compteur et met à jour l'affichage
function addone() {
    compteur++;
    // Mettre à jour le contenu du paragraphe avec l'id "compteur"
    document.getElementById("compteur").innerText = compteur;
}

// Attacher l'événement "click" au bouton avec l'id "button"
document.getElementById("button").addEventListener("click", addone);
