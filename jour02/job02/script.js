function showhide() {
    // Vérifier si l'article existe déjà
    const existingArticle = document.getElementById("article");

    if (existingArticle) {
        // Si l'article existe, le retirer
        existingArticle.remove();
    } else {
        // Sinon, le créer et l'ajouter
        const newArticle = document.createElement("article");
        newArticle.id = "article";
        newArticle.innerText = "L'important n'est pas la chute, mais l'atterrissage.";
        document.body.appendChild(newArticle);
    }
}

// Attacher l'événement click au bouton
document.getElementById("button").addEventListener("click", showhide);
