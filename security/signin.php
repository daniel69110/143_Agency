<?php
$pdo = new \PDO('mysql:host=localhost;dbname=fmdh;port=3308;charset=utf8', 'root', 'dwwm_2024', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


if(!empty($_POST)){
    if(
        isset($_POST["email"],$_POST["passwords"])&& !empty($_POST["email"]) && !empty($_POST["passwords"])
        
    ){
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            die("L'adresse email est incorrecte");
        }
        $pass = password_hash($_POST["pass"], PASSWORD_ARGON2ID);
        
        $query = $pdo->prepare("INSERT INTO users (email, passwords ) VALUES (:email, :passwords)");

        $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
        $query->bindValue(":passwords", $_POST["passwords"], PDO::PARAM_STR);
        $query->execute();
        
        var_dump($_POST);
        exit;
    }
        else{
            die ("le formulaire est incomplet");
        }
    
}

?>

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire d'Inscription</title>
    </head>
    <body>
    
    <h2>Inscription</h2>
    <form  method="post" class="inscription-form">
        <div>
            <label for="email">Email :</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div>
            <label for="passwords">Mot de passe :</label>
            <input type="passwords" id="passwords" name="passwords" required>
        </div>
        <div>
            <input type="submit" value="S'inscrire">
        </div>
    </form>
    
    <style>
        .inscription-form {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .inscription-form form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        
        .inscription-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .inscription-form label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        
        .inscription-form input[type="email"],
        .inscription-form input[type="password"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .inscription-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        
        .inscription-form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    
    </body>
    </html>