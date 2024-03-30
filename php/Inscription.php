<?php

include "connexion.php";
session_start();

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['ADRESSE_EMAIL']) && isset($_POST['MOT_DE_PASSE']) && isset($_POST['abonnement']) && isset($_POST['sport'])) {
    $nom = $_POST['nom'];
    $genre = $_POST['genre'];
    $prenom = $_POST['prenom'];
    $sport_pratique = $_POST['sport']; // Remplacer par l'id du sport sélectionné
    $Taille = $_POST['Taille'];
    $Poids = $_POST['Poids'];
    $abonnement = $_POST['abonnement']; // Remplacer par l'id de l'abonnement sélectionné
    $ADRESSE_EMAIL = $_POST['ADRESSE_EMAIL'];
    $MOT_DE_PASSE = password_hash($_POST['MOT_DE_PASSE'], PASSWORD_DEFAULT); // Hachage du mot de passe
    $role = 'utilisateur';
    $photo = $_POST['photo'];
    $banni = 0;

    try {   
        $requete = $pdo->prepare('INSERT INTO `users`(`email`, `Mot_de_passe`, `nom`, `prenom`, `abonnement`, `sport_pratique`, `Taille`, `Poids`, `genre`, `photo`, `Role`, `banni`) VALUES (:email, :MOT_DE_PASSE,:nom,:prenom,:abonnement,:sport_pratique,:Taille,:Poids,:genre,:photo,:role,:banni)');
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':genre', $genre);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':sport_pratique', $sport_pratique);
        $requete->bindParam(':Taille', $Taille);
        $requete->bindParam(':Poids', $Poids);
        $requete->bindParam(':abonnement', $abonnement);
        $requete->bindParam(':email', $ADRESSE_EMAIL);
        $requete->bindParam(':MOT_DE_PASSE', $MOT_DE_PASSE);
        $requete->bindParam(':photo', $photo);
        $requete->bindParam(':role', $role);
        $requete->bindParam(':banni', $banni);

        $requete->execute();
        if($requete) {
            header('location:P_acceuil.php');
            exit();
        }
    } catch (PDOException $e) {
        echo "Erreur lors de l'insertion : " . $e->getMessage();
    }
    $requete->closeCursor();
}
