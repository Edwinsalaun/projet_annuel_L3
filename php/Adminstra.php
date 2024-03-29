<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'administration</title>
	  <link rel="stylesheet" href="C:\Users\Edwin\Documents\projet annuel\css\Administra.css">
</head>
<body>
    <h1>Page d'administration</h1>

    <form action="administration.php" method="get">
        <label for="recherche">Rechercher un utilisateur :</label>
        <input type="text" id="recherche" name="recherche" placeholder="Entrez le prénom ou le nom">
        <button type="submit">Rechercher</button>
    </form>

    <h2>Résultats de la recherche :</h2>
    <table>
        <thead>
            <tr>
                <th>Prénom</th>
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
// Vérifier si l'utilisateur est connecté (vous devrez implémenter cette partie)
session_start();


// Connexion à la base de données
include "connexion.php";

if ($connexion->connect_error) {
    die("Échec de la connexion à la base de données : " . $connexion->connect_error);
}

// Récupérer l'identifiant de l'utilisateur connecté
$id_utilisateur = $_SESSION['id_utilisateur'];
    // Requête SQL pour récupérer les données de l'utilisateur
$sql = "SELECT * FROM evolution_utilisateur WHERE id_utilisateur = $id_utilisateur";
$resultat = $connexion->query($sql);?>
            <!-- Insérez ici le code PHP pour afficher les résultats de la recherche -->
        </body>
    </table>
</body>
</html>
