<?php


include "connexion.php";
session_start();
if(isset($_POST['nom']) && isset($_POST['prenom'])) {
    $nom = $_POST['nom'];
    $genre = $_POST['genre'];
    $prenom = $_POST['prenom'];
    $sport_pratique = $_POST['sport'];
    $Taille = $_POST['Taille'];
    $Poids = $_POST['Poids'];
    $abonnement = $_POST['abonnement'];
    $ADRESSE_EMAIL = $_POST['ADRESSE_EMAIL'];
    $MOT_DE_PASSE = $_POST['MOT_DE_PASSE'];
    $photo = $_POST['photo'];

    try {
        
        $requete = $pdo->prepare('INSERT INTO `utilisateur_pro` (`nom`, `genre`, `prenom`, `sport_pratique`, `Taille`, `Poids`,`abonnement`, `email`, `MOT_DE_PASSE`, `photo`) VALUES (:nom, :genre, :prenom, :sport_pratique,  :Taille, :Poids,:abonnement, :email, :MOT_DE_PASSE,:photo)');
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
?>
