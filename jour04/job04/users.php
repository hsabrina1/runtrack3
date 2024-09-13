<?php
$host = 'localhost'; 
$dbname = 'utilisateurs'; 
$username = 'root';
$password = ''; 

// Essayer de se connecter à la base de données
try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configurer PDO pour qu'il lève des exceptions en cas d'erreur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparer et exécuter la requête pour récupérer tous les utilisateurs
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs");
    $stmt->execute();

    // Récupérer tous les utilisateurs sous forme de tableau associatif
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Afficher les données au format JSON
    header('Content-Type: application/json');
    echo json_encode($users);

} catch (PDOException $e) {
    // Si une erreur se produit, afficher le message d'erreur
    echo 'Erreur de connexion : ' . $e->getMessage();
}
?>
