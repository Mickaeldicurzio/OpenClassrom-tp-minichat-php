<?php

//    Création du cookie pour le username

    setcookie('username', $_POST['user'], time() + 365*24*3600,null,null,false,true);

    // Connexion à la base de données

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=tpminichat;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    // Insertion du message à l'aide d'une requête préparée

    $req = $bdd->prepare('INSERT INTO content (user, message) VALUES(?, ?)');
    $req->execute(array($_POST['user'], $_POST['message']));

    // redirection sur index.php

    header('Location: index.php');


?>