<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=iss','root','');
$producs = $bdd->query('SELECT * FROM iss_producs ORDER BY date DESC');

//include ('addProducs.php');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ISS | Offres</title>

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
                <div class="carousel-item active" style="background-image: url('../img/shopping-cart.png')">
                </div>
              </div>
            </div>
          </header>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1>Nos offres</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Nos offres produit</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <?php while($row = $producs->fetch()) { ?> 
          <div class="col-lg-4 col-sm-8 mb-3">
            <div class="card card-outline-danger w-90 text-center">
              <h3 class="card-header bg-success text-white"><?= $row['name']?></h3>
              <img style="width: 350px; height: 250px;" class="img-fluid thumbnail" src="../img/producs/<?= $row['picture'] ?> "/>
              <div class="card-body">
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><?= $row['model']?></li>
                <li class="list-group-item"><?= $row['mark']?></li>
                <li class="list-group-item"><?= $row['description']?></li>
                <li class="list-group-item"><?= $row['price']?> Fr</li>
              </ul>
            </div>
          </div>
        <?php } ?>
      </div>
      <!-- /.row -->

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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
