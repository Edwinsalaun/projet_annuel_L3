<?php
// Informations de connexion � la base de donn�es
$dbname  = "localhost";
$utilisateur = "esalau01";
$motDePasse = "22302676";
$nomBaseDeDonnees = "dbsport";

// Connexion � la base de donn�es
$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);
// R�cup�rer les donn�es du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];

// Requ�te SQL pour ins�rer les donn�es dans la base de donn�es
$sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES ('$nom', '$email', '$mot_de_passe')";

// V�rifier la connexion
if ($connexion->connect_error) {
    die("Erreur de connexion � la base de donn�es : " . $connexion->connect_error);
} else {
    echo "Connexion � la base de donn�es r�ussie";
}
?>
