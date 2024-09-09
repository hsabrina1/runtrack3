function tri(numbers, order) {
    // Fonction de tri personnalisée en fonction de l'ordre passé ("asc" ou "desc")
    if (order === "asc") {
        numbers.sort((a, b) => a - b);  // Tri croissant
    } else if (order === "desc") {
        numbers.sort((a, b) => b - a);  // Tri décroissant
    } else {
        throw new Error("L'ordre doit être 'asc' ou 'desc'");
    }
    return numbers;
}

// Exemple d'utilisation
let numbers = [5, 2, 9, 1, 7];
console.log(tri(numbers, "asc"));  // Retourne [1, 2, 5, 7, 9]
console.log(tri(numbers, "desc")); // Retourne [9, 7, 5, 2, 1]
