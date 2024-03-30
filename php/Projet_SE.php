<style>
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  background-color: #f4f4f4;
}

header {
  background-color: #333;
  color: #fff;
  padding: 10px;
  text-align: center;
}

section {
  display: flex;
  justify-content: space-around;
  padding: 20px;
}

.user-section,
.admin-section {
  background-color: #fff;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 8px;
  width: 45%;
}

h2 {
  text-align: center;
}

label {
  display: block;
  margin-bottom: 8px;
}

input {
  width: 100%;
  padding: 8px;
  margin-bottom: 16px;
  box-sizing: border-box;
}

button {
  background-color: #333;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\Projet_SE.css">
  <title>Accueil</title>
</head>
<body>

  <header>
    <h1>FITNESS LIFE</h1>
  </header>

  <section>
    <div class="Utilisateur">
      <h2>UTILISATEUR</h2>
      <form method="post" action="veriflogin.php">
        <label for="username">NOM UTILISATEUR :</label>
        <input type="text" id="NOM_UTILISATEUR" name="NOM_UTILISATEUR" placeholder="ENTRER NOM UTILISATEUR">

        <label for="MOT_DE_PASSE">MOT DE PASSE:</label>
        <input type="password" id="MOT_DE_PASSE" name="MOT_DE_PASSE" placeholder="ENTRER MOT DE PASSE">

        <label for="type_utilisateur">Type d'utilisateur:</label>
        <select id="type_utilisateur" name="type_utilisateur">
          <option value="utilisateur">Utilisateur</option>
          <option value="administrateur">Administrateur</option>
        </select>

        <button type="submit">CONNEXION</button>
      </form>
      <p>Pas encore de compte ? <a href="php\Projet_SE1.php">Creer un compte</a></p>
    </div>
  </section>

</body> 
</html>
