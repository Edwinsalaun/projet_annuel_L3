<?php
// Verifier si l'utilisateur est connecte (vous devrez implementer cette partie)
session_start();
if (!isset($_SESSION['id_utilisateur'])) {
    // Rediriger l'utilisateur s'il n'est pas connecte
    header("Location: Projet_SE.php");
    exit();
}

// Connexion a la base de donnees
include "connexion_bdd.php";

if ($connexion->connect_error) {
    die("echec de la connexion a la base de donnees : " . $connexion->connect_error);
}

// Recuperer l'identifiant de l'utilisateur connecte
$id_utilisateur = $_SESSION['id_utilisateur'];

// Requete SQL pour recuperer les donnees de l'utilisateur
$sql = "SELECT * FROM evolution_utilisateur WHERE id_utilisateur = $id_utilisateur";
$resultat = $connexion->query($sql);

if ($resultat->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Date</th><th>Taille</th><th>Poids</th></tr>";
    // Afficher les donnees dans un tableau
    while($row = $resultat->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["taille"] . "</td>";
        echo "<td>" . $row["poids"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Aucune donnee trouvee.";
}

// Fermer la connexion a la base de donnees
$connexion->close();
