<Style>
    * {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.navbar {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  display: flex;
  justify-content: space-between; /* Aligner les éléments horizontalement */
  align-items: center;
}

.navbar .logo img {
  height: 100px; /* Ajuster la taille de l'image selon vos besoins */
}

.navbar nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex; /* Utilisation de flexbox */
}

.navbar nav ul li {
  margin-right: 60px;
}

.navbar nav ul li:last-child {
  margin-right: 0;
}

.navbar nav ul li a {
  color: #fff;
  text-decoration: none; 
}/* la couleur de different element en lien acceuil etc  */

.navbar nav ul li a:hover {
  color: #ccc; /* Changer la couleur au survol selon vos préférences */
}

h2 {
  margin-bottom: 70px;
}

.rectangle {
  background-color: #f2f2f2;
  border: 1px solid #ddd;
  border-radius: 100px;
  padding: 20px;
  margin-right: 20px;
  width: calc((100% - 40px) / 3); /* Répartir en 3 colonnes avec marges */
  display: inline-block;
  vertical-align: top;
}

.rectangle h2 {
  margin-bottom: 10px;
}

.rectangle p {
  margin-bottom: 0;
}
.rectangle {
  background-color: #f2f2f2;
  border: 1px solid #ddd;
  border-radius: 10px; /* Ajuster le rayon de la bordure selon vos préférences */
  padding: 20px;
  margin-right: 20px;
  margin-bottom: 20px; /* Espacement entre les rectangles */
  width: calc((100% - 40px - 40px) / 3); /* Répartir en 3 colonnes avec marges */
  display: inline-block;
  vertical-align: top;
}

.rectangle:last-child {
  margin-right: 0; /* Aucun espacement à droite pour le dernier rectangle */
}
.navbar nav ul li a {
    color: #fff; /* Couleur des liens en blanc */
    text-decoration: none;
	  padding: 10px 20px; /* Espacement intérieur */
 
}


body {body, html {
  margin: 0;
  padding: 0;
  height: 100%;
  overflow: hidden;
}

#background-video {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -1;
}

.content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
}

   
  </Style>
  <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="C:\Users\Edwin\Documents\projet annuel\css\projet_SEAC.css">
  <title>Page d'accueil</title>
</head>
<body>
<video autoplay muted loop id="background-video">
    <source src="Videoac.mp4" type="video/mp4">
  </video>
  
  

  <header class="navbar">
    <div class="logo">
      <a href="#"><img src="data:image/png;base64,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" alt="FITNESS LIFE"></a>
    </div>
	
	
    <nav>
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="C:\Users\Edwin\Documents\projet annuel\css\Projet_SE.php">Mon Compte </a></li>
		<li><a href="C:\Users\Edwin\Documents\projet annuel\css\Projet_SEACTU.php">Actualités </a></li>
        <li><a href="C:\Users\Edwin\Documents\projet annuel\css\Projet_SEcont.php">Contact</a></li>
      </ul>
    </nav>    
  </header>
  <div class="container">
    <h2>Un Acceuil Chaleureux 
	Ce qui est bien commencé est a moitié fait . Etes-vous pret(e) a faire du fitness votre essentiel ? 
	Consultez  cette pages de conseils et d'astuces pour vous préparer a entamer votre aventure de ftness en toutes 
	coniance.</h2>
    <div class="rectangle">
      <h2>Profil</h2>
	  <li><a href="">Description du profil</a></li>
      <p>
	  	  </p>
    </div>
    <div class="rectangle">
      <h2>Plan d'entraînement</h2>
      <p><li><a href="">Description du Plan d'entraînement </a></li>
	   - Consomer 20 %
      - EXERCICE 20 %
      - RESTANTE 60 %</p>
    </div>
    <div class="rectangle">
      <h2>Nutrition</h2>
	  <p><li><a href="">Description de la Nutrition </a></li>
      <p></p>
    </div>
	 <div class="rectangle">
      <h2>Amis</h2>
	  <li><a href="">Amis  </a></li>
      <p>Envie de discuter avec des amis tout en faisant du sport ? Notre salle est l'endroit parfait pour ça ! Venez profiter de moments conviviaux et motivants ensemble !"</p>
    </div>
  </div>

  <!-- Contenu de la page -->

</body>
</html>
