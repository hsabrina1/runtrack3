<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somme Nombres Premiers</title>
</head>
<body>
    <h1>Somme des Nombres Premiers</h1>

    <form method="POST" action="">
        <label for="nombre1">Entrez le premier nombre :</label>
        <input type="number" id="nombre1" name="nombre1" required><br><br>

        <label for="nombre2">Entrez le deuxième nombre :</label>
        <input type="number" id="nombre2" name="nombre2" required><br><br>

        <button type="submit">Calculer la somme</button>
    </form>

    <?php
    // Fonction pour vérifier si un nombre est premier
    function estPremier($n) {
        if ($n <= 1) return false;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) return false;
        }
        return true;
    }

    // Traitement du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = intval($_POST["nombre1"]);
        $b = intval($_POST["nombre2"]);

        if (estPremier($a) && estPremier($b)) {
            $somme = $a + $b;
            echo "<p>La somme des deux nombres premiers est : $somme</p>";
        } else {
            echo "<p>False</p>";
        }
    }
    ?>

</body>
</html>
