<?php
echo "ertyuiuyty";

include "connexion.php";
session_start();
if(isset($_POST['nom']) && isset($_POST['prenom'])) {
    $nom = $_POST['nom'];
    $genre = $_POST['genre'];
    $prenom = $_POST['prenom'];
    $sport_pratique = $_POST['sport'];
    $Taille = $_POST['Taille'];
    $Poids = $_POST['Poids'];
    $ADRESSE_EMAIL = $_POST['ADRESSE_EMAIL'];
    $MOT_DE_PASSE = $_POST['MOT_DE_PASSE'];

    try {
        
        $requete = $pdo->prepare('INSERT INTO `utilisateur` (`nom`, `genre`, `prenom`, `sport_pratique`, `Taille`, `Poids`, `email`, `MOT_DE_PASSE`) VALUES (:nom, :genre, :prenom, :sport_pratique,  :Taille, :Poids, :email, :MOT_DE_PASSE)');
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':genre', $genre);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':sport_pratique', $sport_pratique);

        $requete->bindParam(':Taille', $Taille);
        $requete->bindParam(':Poids', $Poids);
        $requete->bindParam(':email', $ADRESSE_EMAIL);
        $requete->bindParam(':MOT_DE_PASSE', $MOT_DE_PASSE);

        $requete->execute();
        if($requete) {
            header('location:P_Acceuil.php');
            exit();
        }
    } catch (PDOException $e) {
        echo "Erreur lors de l'insertion : " . $e->getMessage();
    }
    $requete->closeCursor();
}
