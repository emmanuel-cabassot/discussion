<?php session_start(); 

//Intègre la valeur de $_SESSION dans variable
if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
}

// Connexion a la BDD avec descriptif plus clair si il y a une erreur (array) 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=discussion;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
// En cas d'erreur, on affiche un message et on arrête tout
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer

//Requete en joignant deux tableaux INNER JOIN, cela va servir à afficher les messages
$reponse = $bdd->query("SELECT utilisateurs.login, DATE_FORMAT(date, GET_FORMAT(DATE, 'EUR')), message FROM messages INNER JOIN utilisateurs ON utilisateurs.id = messages.id_utilisateur  ORDER BY date DESC LIMIT 5");

// Requete qui va servir à enregistrer de nouveaux messages
if (isset($_POST['message'])) {
    $insert = $bdd->prepare('INSERT INTO `messages`(`message`, `id_utilisateur`, `date`) VALUES (:message, :id, NOW())');
    $insert->execute(array(
    'message' => htmlspecialchars($_POST['message']),
    'id' => $_SESSION['id']
    ));
    //Header pour pouvoir actualiser la page et faire apparaitre le message enregistré
    header('location:discussion.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/commentaire.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprimaire_inscription</title>
</head>
<body>
<header>
    <?php require('header.php') ?>
</header>
<main class="main_inscription justify-content-center">
    <h1 class="col-12 text-center h3  text-primary mt-4">
        Discussion
    </h1>
    <!--  On affiche chaque entrée une à une pour les commentaires -->
    <?php 
    while ($u = $reponse->fetch(PDO::FETCH_ASSOC)) {
    echo '
        <p class="col-12 text-center mb-0">posté le '.$u['DATE_FORMAT(date, GET_FORMAT(DATE, \'EUR\'))'].' par <span>'.$u['login'].'</span></p> 
        <p class="col-12 text-center"><i>'.$u['message'].'</i> </p>
    ';} ?>
    <h2 class="col-12 text-center text-primary h4">
    <?php 
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'].', ajoutez votre commentaire';
        ?>
        <section>
        <form action="" method="post">
        <div>
            <textarea  class="col-9 col-md-6 h6" id="story" name="message" rows="8" cols="39" placeholder="votre message"></textarea>
        </div>
        <button type="submit"  class="btn btn-primary col-9 col-md-6 mb-4">Submit</button>
        </form>
        </section>
        <?php
        }   
        else {
        echo 'Pour ajouter un commentaire, connectez-vous<br><br>
        <a class="btn btn-primary text-light mb-4" href="connexion.php">
            connecter-vous
        </a>';
        }
    ?>  
</main>
<footer>
  <?php require('footer.php') ?>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>   
</body>
</html>