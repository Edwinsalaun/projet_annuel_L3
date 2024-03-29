<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement</title>
    <style>
        /* Styles généraux */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Formulaire de Paiement</h2>

        <form action="http://projet-011.l3.geniephy.net/Paiement.php" method="GET">
            <label for="nom">Nom sur la carte:</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="numero_carte">Numéro de carte:</label>
            <input type="text" id="numero_carte" name="numero_carte" required><br>

            <label for="date_expiration">Date d'expiration (MM/YY):</label>
            <input type="text" id="date_expiration" name="date_expiration" placeholder="MM/YY" required><br>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" maxlength="4" required><br>

            <label for="montant">Montant à payer:</label>
            <input type="text" id="montant" name="montant" required><br>

            <input type="submit" value="Payer">
        </form>
    </div>

</body>
</html>
