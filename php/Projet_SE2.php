<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
    color: #333;
}

form {
    max-width: 400px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
}

input,
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}



</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Fitness Life Classic </title>
    <link rel="stylesheet" href="C:\Users\Edwin\Documents\projet annuel\css\Projet_SE2.css">
</head>
<body>

    <h2>Inscription - Fitness Life Classic</h2>

    <form action="ins.php" method="post">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="genre">Genre:</label>
        <select id="genre" name="genre" required>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
            <option value="autres">Autres</option>
        </select><br>

        <label for="sport">Sport pratiqué:</label>
        <select id="sport" name="sport" required>
            <option value="course">Course à pied</option>
            <option value="natation">Natation</option>
            <option value="musculation">Musculation</option>
        </select><br>

        <label for="TAILLE">TAILLE:</label> 
        <input type="text" id="TAILLE" name="Taille" required><br>
        <label for="POIDS">POIDS (KG):</label>
        <input type="text" id="POIDS" name="Poids" required><br>
        <label for="ADRESSE_EMAIL">ADRESSE E-MAIL:</label>
        <input type="text" id="ADRESSE_EMAIL" name="ADRESSE_EMAIL" required><br>
        <label for="MOT_DE_PASSE">MOT DE PASSE :</label>
        <input type="text" id="MOT_DE_PASSE" name="MOT_DE_PASSE" required><br>

    

        <input type="submit" value="S'inscrire">
    </form>

</body>
</html>
