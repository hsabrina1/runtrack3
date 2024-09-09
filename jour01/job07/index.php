<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification des jours travaillés</title>
    <script src="script.js"></script> <!-- Lien vers le fichier script.js -->
</head>
<body>


    <script>
        // Tableau de plusieurs dates
        var dates = [
            new Date('2020-01-01'),  // Nouvel An
            new Date('2020-05-01'),  // Fête du travail
            new Date('2020-07-14'),  // Fête nationale
            new Date('2020-11-11'),  // Armistice
            new Date('2020-12-25'),  // Noël
            new Date('2020-08-22'),  // Un samedi
            new Date('2020-08-23')   // Un dimanche
        ];

        // Boucle pour vérifier chaque date dans le tableau
        for (var i = 0; i < dates.length; i++) {
            jourtravaille(dates[i]);
        }
    </script>

</body>
</html>

