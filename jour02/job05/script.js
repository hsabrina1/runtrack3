// Fonction pour calculer le pourcentage de scroll et mettre à jour la couleur du footer
function updateFooterColor() {
    // Hauteur totale du document (la taille de la page entière)
    const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;

    // Position actuelle du scroll par rapport au haut de la page
    const scrollTop = window.scrollY;

    // Calculer le pourcentage de scrolling
    const scrollPercent = (scrollTop / scrollHeight) * 100;

    // Mettre à jour le texte du footer avec le pourcentage de scrolling
    const footer = document.getElementById("footer");
    footer.innerText = `Footer : ${Math.round(scrollPercent)}%`;

    // Mettre à jour la couleur du footer en fonction du pourcentage
    footer.style.backgroundColor = `rgb(${scrollPercent * 2.55}, 128, ${255 - scrollPercent * 2.55})`;
}

// Écouter l'événement de scrolling pour mettre à jour le footer
window.addEventListener("scroll", updateFooterColor);
