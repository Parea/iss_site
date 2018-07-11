<?php 

$header="MIME-Version: 1.0\r\n";
$header.= 'From:"Paretz-Support"<test.paretz@gmail.com>'."\n";
$header.='Content-Type:text\html, charset="utf-8"'."\n";
$header.='Content-Transfert-Encoding: 8bit';

$to="taie.taataparea1@gmail.com";
$subject="Test support ISS";
$message='
<html lang="fr">
  <head>
    <title>ISS-Support</title>
  </head>
  <body>
    <div align="center">
      J\'ai envoyer ce mail avec PHP !
      <br/>
      ceci est un test
    </div>
  </body>
</html>
';
if (mail($to, $subject, $message, $header)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ISS | Contact</title>

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

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
                <div class="carousel-item active" style="background-image: url('../img/CONTACT-US.png')">
                </div>
              </div>
            </div>
          </header>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1>Contact</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <p><i class="fas fa-home fa-lg"> Immeuble Heitiare, Pirae, Tahiti </i></p>
          <p><i class="fas fa-phone-volume fa-lg">+689 49 43 43 43 </i></p>
          <p><i class="fas fa-envelope fa-lg"> name@example.com</i></p>
          <i class="fas fa-clock fa-lg"> Lundi - Vendredi: 7:30 à 17h00</i>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 col-sm-8 offset-lg-2 mb-4">
          <h3>Envoyer-nous un mail</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Nom</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Prénom</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-success pull-right" id="sendMessageButton"><i class="fas fa-paper-plane"> Envoyer message</i></button>
          </form>
        </div>

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

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>

</html>
