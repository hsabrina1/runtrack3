// Fonction qui récupère le contenu de l'élément "citation" et l'affiche dans la console
function citation() {
    // Récupérer le texte de l'élément avec l'ID "citation"
    const citationText = document.getElementById("citation").innerText;
    
    console.log(citationText);
}

// Ajout d'un événement "click" au bouton avec l'ID "button"
document.getElementById("button").addEventListener("click", citation);
