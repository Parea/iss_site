<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=iss','root','');
$producs = $bdd->query('SELECT * FROM iss_producs ORDER BY date DESC LIMIT 0,4');
$news = $bdd->query('SELECT * FROM iss_news ORDER BY date_publication DESC LIMIT 0,6');

?>
<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ISS Accueil</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <link href="../img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="./css/style.css">

  </head>

  <body>

    <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #52ec90;" "fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">ISS - Tahiti</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="index.php">Accueil</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Société ISS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Nos réalisation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pricing.php">Nos offres produit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.php">Assistance</a>
          </li>
        </ul>
      </div>
    </div> 
  </nav>
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('../img/society.png')">
        </div>
      </div>
    </div>
  </header>
    <!-- Page Content -->
    <div class="container">

      <h1>Les derniers nouveautés produits</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <?php while($row = $producs->fetch()) { ?> 
          <div class="col-lg-3 col-sm-5 mb-4">
            <div class="card h-80  text-center">
              <img style="width: 350px; height: 150px;" class="img-fluid thumbnail" src="../img/producs/<?= $row['picture'] ?> "/>
              <div class="card-footer">
                <p class="card-text" style=""><?= $row['name']?></p>
              </div>
              <div class="card-footer">
                <a href="pricing.php" class="btn btn-primary">Voir l'offre</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h2>Les dernières news</h2>

      <div class="row">
        <?php while($row = $news->fetch()) { ?>
          <div class="col-lg-4 col-sm-7 mb-3 portfolio-item">
            <div class="card w-95 text-center">
              <img class="card-img-top" style="width: 350px; height:200px;" class="img-fluid thumbnail" src="../img/news/<?= $row ['picture'] ?>" >
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?= $row ['title'] ?></a>
                </h4>
                <p class="card-text"><?= $row ['description'] ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <!-- /.row -->

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Modern Business Features</h2>
          <p>The Modern Business template by Start Bootstrap includes:</p>
          <ul>
            <li>
              <strong>Bootstrap v4</strong>
            </li>
            <li>jQuery</li>
            <li>Font Awesome</li>
            <li>Working contact form with validation</li>
            <li>Unstyled page elements for easy customization</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Pour tout renseignement ou commander votre produit n'hésitez a nous contact par mail ou par téléphone au (689) 49 43 43 43</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="contact.php">Veuillez nous contactez</a>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-2" style="background-color: #52ec90;">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; ISS|Tahiti 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
