<?php
include "connexion.php";
session_start();

if(isset($_POST['NOM_UTILISATEUR']) && isset($_POST['MOT_DE_PASSE'])) {
    $num = $_POST['NOM_UTILISATEUR'];
    $mdp = $_POST['MOT_DE_PASSE'];
    
    // Requete preparee pour eviter les injections SQL
    $stmt = $connexion->prepare("SELECT `Id_U`, `nom`, `prenom`, `Taille`, `Poids`, `abonnement`, `sport_pratique`, `genre`, `email`, `Mot_de_passe`, `photo`, `Role`, 'Banni' FROM `users` WHERE email = ?");
    $stmt->bind_param("s", $num);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) { // Verification si un utilisateur correspondant a ete trouve
        $row = $result->fetch_assoc();

        $user = new Users($row['Id_U'], $row['nom'], $row['prenom'], $row['Taille'], $row['Poids'], $row['abonnement'], $row['sport_pratique'], $row['genre'], $row['email'], $row['Mot_de_passe'], $row['photo'], $row['role'], $row['banni']);
        
        // Verification du mot de passe
        if (password_verify($mdp, $user->Mot_de_passe)) {

            // Verification des role
            if ($user->Role == 'administrateur') {
                // Redirection vers la page d'administration si les identifiants sont valides
                $_SESSION['role'] = 'administrateur'; // Enregistrement du role dans la session
                header("Location: Adminstra.php");
                exit();
            } elseif ($user->Role == 'utilisateur') {
                // Redirection vers la page d'accueil en tant qu'utilisateur standard
                $_SESSION['role'] = 'utilisateur'; // Enregistrement du role dans la session
                header("Location: P_Acceuil.php");
                exit();
            } else {
                echo "Role non defini pour l'utilisateur";
            }
        } else {
            // Mot de passe incorrect
            echo "Mot de passe incorrect";
        }
    } else {
        // Utilisateur non trouve
        echo "Utilisateur non trouve";
    }
} else {
    // Les champs du formulaire ne sont pas tous remplis
    echo "Veuillez remplir tous les champs";
}
