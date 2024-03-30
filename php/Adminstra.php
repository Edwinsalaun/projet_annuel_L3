<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'administration</title>
	  <link rel="stylesheet" href="Administra.css">
</head>
<body>
    <h1>Page d'administration</h1>

    <form action="administration.php" method="get">
        <label for="recherche">Rechercher un utilisateur :</label>
        <input type="text" id="recherche" name="recherche" placeholder="Entrez le prenom ou le nom">
        <button type="submit">Rechercher</button>
    </form>

    <h2>Resultats de la recherche :</h2>
    <table>
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Genre</th>
                <th>Sport</th>
                <th>Actions</th>
				<th>Taille</th>
				<th>Poids</th>
				<th>Adresse Email</th>
				<th>Mot de passe </th>
            </tr>
        </thead>
        <body>
        <?php
// Verifier si l'utilisateur est connecte (vous devrez implementer cette partie)
session_start();


// Connexion a la base de donnees
include "connexion_bdd.php";

if ($connexion->connect_error) {
    die("echec de la connexion a la base de donnees : " . $connexion->connect_error);
}

// Recuperer l'identifiant de l'utilisateur connecte
$id_utilisateur = $_SESSION['id_utilisateur'];
    // Requete SQL pour recuperer les donnees de l'utilisateur
$sql = "SELECT * FROM evolution_utilisateur WHERE id_utilisateur = $id_utilisateur";
$resultat = $connexion->query($sql);?>
            <!-- Inserez ici le code PHP pour afficher les resultats de la recherche -->
        </body>
    </table>
</body>
</html>
