<?php
// Informations de connexion à la base de données
$host = 'localhost';
$dbname = 'contact_db';
$username = 'root';  // Remplacer par votre nom d'utilisateur MySQL
$password = '';  // Remplacer par votre mot de passe MySQL

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Préparer la requête SQL pour insérer les données
        $sql = "INSERT INTO messages (email, message) VALUES (:email, :message)";
        $stmt = $pdo->prepare($sql);

        // Lier les paramètres
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        // Exécuter la requête
        if ($stmt->execute()) {
            echo "Message envoyé avec succès.";
        } else {
            echo "Erreur lors de l'envoi du message.";
        }
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>