function estPremier(n) {
    // Vérifie si un nombre est premier
    if (n <= 1) return false;
    for (let i = 2; i <= Math.sqrt(n); i++) {
        if (n % i === 0) return false;
    }
    return true;
}

function sommenombrespremiers(a, b) {
    // Retourne la somme de a et b si ce sont des nombres premiers, sinon false
    if (estPremier(a) && estPremier(b)) {
        return a + b;
    } else {
        return false;
    }
}

// Exemple d'utilisation
console.log(sommenombrespremiers(7, 11)); // Retourne 18
console.log(sommenombrespremiers(4, 11)); // Retourne false
