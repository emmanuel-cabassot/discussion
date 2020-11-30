<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/commentaire.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprimaire</title>
</head>
<body>
<header>
  <?php require('header.php') ?>
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
          <img src="../images/livre_1.jpg" class="card-img-top" style="height: 250px;" alt="couverture de livre">
          <div class="card-body">
            <h5 class="card-title">Livre de TAI-CHI</h5>
            <p class="card-text">Cet ouvrage propose à votre enfant de s'initier au taï chi chuan, un art martial issu de la sagesse chinoise, qui combine mouvements et respiration</p>
            <a href="#" class="btn btn-primary w-100">Ajouter</a>
          </div>
        </div>
      </section>
      <section class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
        <div class="card mr-auto ml-auto" style="width: 18rem;">
          <img src="../images/livre_2.jpg" class="card-img-top" style="height: 250px;" alt="couverture de livre">
          <div class="card-body">
            <h5 class="card-title">Histroire de drabon</h5>
            <p class="card-text">Chaque enfant a son propre dragon. Plus l'enfant est désobéissant, plus son dragon est beau et fort</p>
            <a href="#" class="btn btn-primary w-100">Ajouter</a>
          </div>
        </div>
      </section>
      <section class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
        <div class="card mr-auto ml-auto" style="width: 18rem;">
          <img src="../images/livre_3.jpg" class="card-img-top"  style="height: 250px;" alt="couverture de livre">
          <div class="card-body">
            <h5 class="card-title">La colère de Paul</h5>
            <p class="card-text">Paul est confronté à plusieurs contrariétés au cours de sa journée d'école, et lorsque sa maman vient le chercher, c'est l'explosion.</p>
            <a href="#" class="btn btn-primary w-100">Ajouter</a>
          </div>
        </div>
      </section>
      <section class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
        <div class="card mr-auto ml-auto" style="width: 18rem;">
          <img src="../images/livre_4.jpg" class="card-img-top" style="height: 250px;" alt="couverture de livre">
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
  <?php require('footer.php') ?>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>   
</body>
</html>



