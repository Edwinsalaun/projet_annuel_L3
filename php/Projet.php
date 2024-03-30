<?php
// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "esalau01";
$motDePasse = "22302676";
$nomBaseDeDonnees = "dbsport";

// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Erreur de connexion à la base de données : " . $connexion->connect_error);
} 

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];

// Hacher le mot de passe
$mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);

// Requête SQL pour insérer les données dans la base de données en utilisant une requête préparée
$stmt = $connexion->prepare("INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nom, $email, $mot_de_passe_hache);

// Exécuter la requête
if ($stmt->execute()) {
    echo "Enregistrement réussi.";
} else {
    echo "Erreur lors de l'enregistrement : " . $stmt->error;
}

// Fermer la connexion
$connexion->close();
