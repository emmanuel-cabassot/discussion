<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/commentaire.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprimaire</title>
</head>
<body>
<header>
  <!-- UTILISATION DE BOOTSTRAP -->
<section class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand ml-4 " href="index.php"><svg width="1em" height="1.1em" viewBox="0 2 16 16" class="bi bi-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
            </svg> Apprimaire
        </a>

        <!-- C'est vrai que pour le menu burger ca peut etre sympa bootstrap -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-fill ml-auto">
                <li class="nav-item ml-3 ">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="php/discussion.php">Discussion</a>
                </li>            
                <li class="nav-item ml-3" >
                <?php 
                if (isset($_SESSION['login'])) {
                    echo '<a class="nav-link" href="php/profil.php" >Profil</a>';
                }
                else {
                    echo '<a class="nav-link" href="php/inscription.php" >S\'inscrire</a>';
                }
                ?>
                </li>
                <li class="nav-item ml-3 mr-3">
                    <?php
                if (isset($_SESSION['login'])) {
                    echo '<a class="nav-link" href="php/deconnexion" >Se déconnecter</a>';
                }
                else {
                    echo '<a class="nav-link" href="php/connexion" >Se connecter</a>';
                }
                ?>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--  FIN DU CALVAIRE et retour a un peu de CSS -->
<section class="background">
    <p class="text-center">Partager vos livres pour enfants</p>
</section>
</header>
<main class="main_index">
  <h1 class="col-12 text-center h3  text-primary mt-4">
    <?php
    if (isset($_SESSION['login'])) {
      echo '<p class="col-12 text-center h3 text-primary mt-4 mb-4">Bonjour '.$_SESSION['login'].'</p>';
    }?>
    Apprimaire comment ca marche?
  </h1>
  <p class="col-12 text-center mb-5">
    Vous pouvez prêter des livres à notre collectif. Grâce à cela vous récoltez des points qui vous serviront à emprunter d'autres livres.
  </p>
  <h2 class="col-12 text-center h3 text-primary mb-4 mt-3">Nos livres disponibles</h2>
  <section class="container ">
    <section class="row">
      <section class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
        <div class="card mr-auto ml-auto" style="width: 18rem;">
          <img src="images/livre_1.jpg" class="card-img-top" style="height: 250px;" alt="couverture de livre">
          <div class="card-body">
            <h5 class="card-title">Livre de TAI-CHI</h5>
            <p class="card-text">Cet ouvrage propose à votre enfant de s'initier au taï chi chuan, un art martial issu de la sagesse chinoise, qui combine mouvements et respiration</p>
            <a href="#" class="btn btn-primary w-100">Ajouter</a>
          </div>
        </div>
      </section>
      <section class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
        <div class="card mr-auto ml-auto" style="width: 18rem;">
          <img src="images/livre_2.jpg" class="card-img-top" style="height: 250px;" alt="couverture de livre">
          <div class="card-body">
            <h5 class="card-title">Histroire de drabon</h5>
            <p class="card-text">Chaque enfant a son propre dragon. Plus l'enfant est désobéissant, plus son dragon est beau et fort</p>
            <a href="#" class="btn btn-primary w-100">Ajouter</a>
          </div>
        </div>
      </section>
      <section class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
        <div class="card mr-auto ml-auto" style="width: 18rem;">
          <img src="images/livre_3.jpg" class="card-img-top"  style="height: 250px;" alt="couverture de livre">
          <div class="card-body">
            <h5 class="card-title">La colère de Paul</h5>
            <p class="card-text">Paul est confronté à plusieurs contrariétés au cours de sa journée d'école, et lorsque sa maman vient le chercher, c'est l'explosion.</p>
            <a href="#" class="btn btn-primary w-100">Ajouter</a>
          </div>
        </div>
      </section>
      <section class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
        <div class="card mr-auto ml-auto" style="width: 18rem;">
          <img src="images/livre_4.jpg" class="card-img-top" style="height: 250px;" alt="couverture de livre">
          <div class="card-body">
            <h5 class="card-title">Mizou</h5>
            <p class="card-text">Sur un air d’accordéon, Aimée de La salle raconte et chante les aventures de Mizou le petit chat noir, qui multiplie bêtises et courses avec ses deux frères.</p>
            <a href="#" class="btn btn-primary w-100">Ajouter</a>
          </div>
        </div>
      </section>
  </section>  
</section>
</main>
<footer>
<ul>
    <li class="facebook"><a href="https://fr-fr.facebook.com/" target ="_blank"><img  src="images/facebook.png" alt="logo facebook"></a></li>
    <li><a href="https://twitter.com/?lang=fr" target ="_blank"><img src="images/twitter.png" alt="logo twitter"></a></li>
    <li><a href="https://www.instagram.com/?hl=fr" target ="_blank"><img src="images/instagram.png" alt="logo instagram"></a></li>
</ul>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>   
</body>
</html>



