<?php
include "connexion_bdd.php";
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
        
        // Recuperation des roles
        $id_user = $row['Id_U'];

        $sqlRoles = "SELECT `role_id` FROM `user_roles` WHERE user_id = ?";
        $stmtRoles = $connexion->prepare($sqlRoles);
        $stmtRoles->bind_param("i", $id_user);
        $stmtRoles->execute();
        $resultatQueryRoles = $stmtRoles->get_result();

        $roles = array();
        while ($rowRole = $resultatQueryRoles->fetch_assoc()) {
            $roles[] = $rowRole['role_id']; // Utilisation de la colonne correcte
        }

        $user = new Users($row['Id_U'], $row['nom'], $row['prenom'], $row['Taille'], $row['Poids'], $row['abonnement'], $row['sport_pratique'], $row['genre'], $row['email'], $row['Mot_de_passe'], $row['photo'], $roles, $row['banni']);
        
        // Verification du mot de passe
        if (password_verify($mdp, $user->Mot_de_passe)) {

            // Verification des roles
            if (in_array(2, $user->Roles)) {
                // Redirection vers la page d'administration si les identifiants sont valides
                $_SESSION['role'] = 'administrateur'; // Enregistrement du role dans la session
                header("Location: Adminstra.php");
                exit();
            } elseif (in_array(1, $user->Roles)) {
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
