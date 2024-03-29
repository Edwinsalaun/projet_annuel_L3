<?php
// Informations de connexion à la base de données
$dbname  = "localhost";
$utilisateur = "esalau01";
$motDePasse = "22302676";
$nomBaseDeDonnees = "dbsport";

// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];

// Requête SQL pour insérer les données dans la base de données
$sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES ('$nom', '$email', '$mot_de_passe')";

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Erreur de connexion à la base de données : " . $connexion->connect_error);
} else {
    echo "Connexion à la base de données réussie";
}
?>
