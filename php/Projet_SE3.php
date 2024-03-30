<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Fitness Life Pro</title>
    <link rel="stylesheet" href="Projet_SE2.css">
</head>
<body>

    <h2>Inscription - Fitness Life Pro</h2>

    <form action="systeme_payement.php" method="post" enctype="multipart/form-data">
        <label for="prenom">Prenom:</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="genre">Genre:</label>
        <select id="genre" name="genre" required>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
            <option value="autres">Autres</option>
        </select><br>

        <!-- Autres champs du formulaire (adresse mail, mot de passe, etc.) -->

        <label for="sport">Sport pratique:</label>
        <select id="sport" name="sport" required>
            <option value="course">Course a pied</option>
            <option value="natation">Natation</option>
            <option value="musculation">Musculation</option>
        </select><br>

        <label for="TAILLE">TAILLE:</label> 
        <input type="text" id="TAILLE" name="TAILLE" required><br>

        <label for="POIDS">POIDS (KG):</label>
        <input type="text" id="POIDS" name="POIDS" required><br>

        <label for="abonnement">Type d'abonnement:</label>
        <select id="abonnement" name="abonnement" required>
            <option value="mensuel">Mensuel (12.99€/mois)</option>
            <option value="annuel">Annuel (119.99€/an)</option>
        </select><br>

        <label for="ADRESSE_EMAIL">ADRESSE E-MAIL:</label>
        <input type="text" id="ADRESSE_EMAIL" name="ADRESSE_EMAIL" required><br>

        <label for="MOT_DE_PASSE">MOT DE PASSE :</label>
        <input type="password" id="MOT_DE_PASSE" name="MOT_DE_PASSE" required><br>

        <label for="photo">Photo de l'utilisateur (facultatif):</label>
        <input type="file" id="photo" name="photo"><br>

        

        <!-- Ajoutez d'autres champs necessaires pour les fonctionnalites demandees -->

        <input type="submit" value="S'inscrire">
    </form>

</body>
</html>
