<?php
if(isset($_POST['signin'])){
    $login = $_POST['login'];
    $password = $_POST['pwd'];

    // Connexion à la base de données avec requête préparée
    $pdo = new PDO("mysql:host=localhost;dbname=test", 'root', '');
    $stmt = $pdo->prepare("SELECT * FROM user WHERE login=:login AND password=:password");
    $stmt->execute(['login' => $login, 'password' => $password]);

    // Vérification des résultats
    $count = $stmt->rowCount();
    if($count != 0){
        echo 'Connexion réussie';
    } else {
        echo 'Identifiants incorrects. Veuillez réessayer.';
    }
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page de connexion avec arrière-plan bleu">
    <title>Page de connexion</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #3498db; /* Couleur bleue */
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #ffffff; /* Couleur de fond du conteneur */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre */
        }

        h1 {
            text-align: center;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .button:hover {
            background-color: #042a44;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Connexion</h1>
        <form method="post" action="#">
            <div class="input-group">
                <label for="login">Login :</label>
                <input type="text" id="login" name="login">
            </div>
            <div class="input-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="pwd" name="pwd">
            </div>
            <button type="submit" name=signin >Se connecter</button>
        </form>
        <p>'OR 1=1 OR 1='</p>
    </div> 
</body>
</html>

<?php

if(isset($_POST["signin"])){
    
    
    echo('hello world');  
}
?>
