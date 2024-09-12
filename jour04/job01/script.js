document.getElementById("button").addEventListener("click", function() {
    // Utilisation de fetch pour récupérer le fichier expression.txt
    fetch('expression.txt')
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur de récupération du fichier');
            }
            return response.text(); // Convertir la réponse en texte
        })
        .then(data => {
            // Afficher le contenu dans le paragraphe
            document.getElementById('expression').innerText = data;
        })
        .catch(error => {
            console.error('Erreur :', error);
        });
});
