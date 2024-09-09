<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tri de Nombres</title>
</head>
<body>
    <h1>Tri de Nombres</h1>

    <form method="POST" action="">
        <label for="numbers">Entrez une liste de nombres séparés par des virgules :</label><br>
        <input type="text" id="numbers" name="numbers" placeholder="Ex: 5,3,8,1,9" required><br><br>

        <label for="order">Sélectionnez l'ordre de tri :</label><br>
        <select id="order" name="order">
            <option value="asc">Ascendant</option>
            <option value="desc">Descendant</option>
        </select><br><br>

        <button type="submit">Trier</button>
    </form>

    <?php
    // Fonction pour trier le tableau en fonction de l'ordre spécifié
    function tri($numbers, $order) {
        if ($order === "asc") {
            sort($numbers);  // Tri ascendant
        } else if ($order === "desc") {
            rsort($numbers); // Tri descendant
        } else {
            throw new Exception("L'ordre doit être 'asc' ou 'desc'.");
        }
        return $numbers;
    }

    // Traitement du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer et nettoyer les données
        $numbers = array_map('intval', explode(',', $_POST["numbers"]));
        $order = $_POST["order"];

        // Trier le tableau
        try {
            $sorted_numbers = tri($numbers, $order);

            // Affichage du résultat
            echo "<p>Tableau trié dans l'ordre $order : " . implode(", ", $sorted_numbers) . "</p>";
        } catch (Exception $e) {
            echo "<p>Erreur : " . $e->getMessage() . "</p>";
        }
    }
    ?>

</body>
</html>
