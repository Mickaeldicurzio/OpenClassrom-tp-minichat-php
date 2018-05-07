
<!--definition de la base de donnée-->

<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tpminichat;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}



$query = 'SELECT user, message, DATE_FORMAT(date, \' Créer le %d %b %Y à %Hh%i\') AS date FROM `content`  ORDER BY `date` DESC LIMIT 0, 10';
$query = $bdd->query($query);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>mon test html</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>

<body>

<div class="container" style="margin-top:100px">
    <h1>Mini Chat</h1>

    <p>Bienvenu sur le mini chat pour le cours du site openclassroom</p>

    <div class="container-form" style="margin-top:50px">

        <div class="">

<!--            Formulaire-->

            <form action="index_traitement.php" method="post" id="form">
                    <input type="text" name="user" placeholder="nom d'utilisateur"
                        <?php if($_COOKIE["username"] != null){ echo 'value="'.$_COOKIE["username"].'"';} ?>
                    />
                    <input type="submit" value="submit" />
            </form>

            <textarea form="form" rows="4" cols="50" name="message" style="margin-top: 20px" placeholder="entrez votre message"></textarea>
        </div>

    </div>


<!--    Affichage des données-->

        <?php


        while ($donnees = $query->fetch())
        {
            echo '<p>'. htmlspecialchars($donnees['date']).' par <strong>' . htmlspecialchars($donnees['user']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
        }

        $query->closeCursor();

        ?>

</body>
</html>
