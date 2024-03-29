<?php
session_start();

if(isset($_POST['NOM_UTILISATEUR']) && isset($_POST['MOT_DE_PASSE']) && isset($_POST['type_utilisateur'])) {
    $num = $_POST['NOM_UTILISATEUR'];
    $mdp = $_POST['MOT_DE_PASSE'];
    $profil = $_POST['type_utilisateur'];
    
    // Vérification des identifiants
    if($num == 'sekou' && $mdp == '123458' && $profil == 'administrateur') {
        // Redirection vers la page d'administration si les identifiants sont valides
        $_SESSION['role'] = 'administrateur'; // Enregistrement du rôle dans la session
        header("Location: Adminstra.php");
        exit();
    } else {
        // Redirection vers la page d'accueil en tant qu'utilisateur standard
        $_SESSION['role'] = 'utilisateur'; // Enregistrement du rôle dans la session
        header("Location: P_Acceuil.php");
        exit();
    }
}
?>
