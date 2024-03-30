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
  justify-content: center;
  align-items: center;
  height: 80vh;
}

.subscription-section {
  background-color: #fff;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 8px;
  width: 60%;
  text-align: center;
}

h2 {
  margin-bottom: 16px;
}

p {
  margin-bottom: 24px;
}

.subscription-options button {
  background-color: #333;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin: 0 10px;
}

.subscription-options button:hover {
  background-color: #555;
}


</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\Projet_SE1.css">
  <title>User Dashboard</title>
</head>
<body>

  <header>
    <h1>Bienvenue a vous !</h1>
  </header>

  <section>
    <div class="subscription-section">
      <h2>Choisir votre abonnement</h2>
      <p>Mettez a niveau votre compte !</p>

      <div class="subscription-options">
        <a href="Projet_SE3.php">
          <button id="proSubscription">Pro abonnement</button>
        </a>
        <a href="php\Projet_SE2.php">
          <button id="classicSubscription">Classic abonnement</button>
        </a>
      </div>
    </div>
  </section>

</body>
</html>
