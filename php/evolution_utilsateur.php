<?php
// Vérifier si l'utilisateur est connecté (vous devrez implémenter cette partie)
session_start();
if (!isset($_SESSION['id_utilisateur'])) {
    // Rediriger l'utilisateur s'il n'est pas connecté
    header("Location: Projet_SE.php");
    exit();
}

// Connexion à la base de données
include "connexion.php";

if ($connexion->connect_error) {
    die("Échec de la connexion à la base de données : " . $connexion->connect_error);
}

// Récupérer l'identifiant de l'utilisateur connecté
$id_utilisateur = $_SESSION['id_utilisateur'];

// Requête SQL pour récupérer les données de l'utilisateur
$sql = "SELECT * FROM evolution_utilisateur WHERE id_utilisateur = $id_utilisateur";
$resultat = $connexion->query($sql);

if ($resultat->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Date</th><th>Taille</th><th>Poids</th></tr>";
    // Afficher les données dans un tableau
    while($row = $resultat->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["taille"] . "</td>";
        echo "<td>" . $row["poids"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Aucune donnée trouvée.";
}

// Fermer la connexion à la base de données
$connexion->close();
?>
