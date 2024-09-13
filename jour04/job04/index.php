<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>

    <!-- Tableau pour afficher les utilisateurs -->
    <table border="1" id="users-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Les lignes de données seront insérées ici -->
        </tbody>
    </table>

    <!-- Bouton pour mettre à jour le tableau -->
    <button id="update-button">Update</button>

    <script>
        // Fonction pour mettre à jour le tableau avec les données des utilisateurs
        function updateTable() {
            // Envoyer une requête GET à users.php pour récupérer les données JSON
            fetch('users.php')
                .then(response => response.json()) // Convertir la réponse en JSON
                .then(data => {
                    // Cibler le body du tableau
                    const tbody = document.querySelector('#users-table tbody');
                    tbody.innerHTML = ''; // Vider le tableau existant

                    // Boucler sur les utilisateurs et ajouter des lignes au tableau
                    data.forEach(user => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${user.id}</td>
                            <td>${user.nom}</td>
                            <td>${user.prenom}</td>
                            <td>${user.email}</td>
                        `;
                        tbody.appendChild(row); // Ajouter la ligne au tableau
                    });
                })
                .catch(error => {
                    console.error('Erreur lors de la récupération des utilisateurs :', error);
                });
        }

        // Attacher un écouteur d'événements au bouton update
        document.getElementById('update-button').addEventListener('click', updateTable);

        // Charger les données des utilisateurs au chargement de la page
        window.onload = updateTable;
    </script>
</body>
</html>
