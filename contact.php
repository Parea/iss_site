<?php
// Check for empty fields
if(isset($_POST['sendEmailButton'])) {
  
  /////////////////////////////////////Création et envoie du message//////////////////////////////////////////
  $mailSupport='test.paretz@gmail.com';
  $boundary = "-----=   Message envoyer automatiquement ne pas répondre direct dessus ce mail =----";
  $passage_line = "\n";
  $messageHtml='
  <html>
    <body>
      <div>
        <h3>Vous avez reçu un messsage depuis le formulaire de contact voici les details:</h3><br/>
      </div>
      <div>
        <p>Nom: '.$_POST['lastname'].'<br/>
        Prénom: '.$_POST['firstname'].'<br/>
        Email: '.$_POST['email'].'<br/>
        Message: '.$_POST['message'].'<br/></p>
      </div>
    </body>
  </html>
  ';

  //------------Création du header-----------------//
  $subject='Formulaire de contact du site ISS';
  $header = "MIME-Version: 1.0".$passage_line;
  $header.= 'From: Prise de contact-ISS'.$passage_line;
  $header.= 'CC: taie.taataparea1@gmail.com'.$passage_line;
  $header.="Content-Type:text/html;charset=UTF-8".$passage_line." boudary=\"$boundary\"".$passage_line;
  $header.="Content-Transfert-Encoding: 8bits".$passage_line;
  $header .= "X-Priority: 1".$passage_line;

  //--------------Création du message--------------//
  $message = $passage_line."-----------------".$boundary."-----------------".$passage_line;
  $message.=$messageHtml.$passage_line;
  $message.= $passage_line."-----------------".$boundary."-----------------".$passage_line;

  //---------Encodage et envoie du mail--------------//
  mail($mailSupport, $subject, $message, $header);
  $msg = "Votre message a bien été envoyé!";

} else {
  $msg = "Votre message n'a pas été envoyé";
}

// // Création et envoie du message
// $to='test.paretz@gmail.com';
// $subject='Formulaire de contact du site ISS';
// $header = "MIME-Version: 1.0" . "\r\n";
// $header.= 'From: Prise de contact-ISS'."\n";
// $header.= 'CC: taie.taataparea1@gmail.com'."\n";
// $header.="Content-type:text/html;charset=UTF-8"."\n";
// $message='
// <html>
//   <head>
//     <title>Demande de reseignement</title>
//   </head>
//   <body>
//     <div align="center">
//       <h3>Vous avez reçu un messsage depuis le formulaire de contact voici les details:</h3><br/>
//     </div>
//     <div>
//       <p>Nom:' .$_POST['lastname'].'<br/>
//       Prénom:' .$_POST['firstname'].'<br/>
//       Email:' .$_POST['email'].'<br/>
//       Message:' .$_POST['message'].'<br/></p>
//     </div>
//   </body>
// </html>
// ';
// if(mail($to, $subject, $message, $header)){
//   $msg = "Votre message a bien été envoyé!";
// } else {
//   $msg = "Votre message n'a pas été envoyé";
// }
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
          <i class="fas fa-clock fa-lg"> Lundi - Vendredi: 7h30 à 17h00</i>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <div class="row">
        <div id="contact" class="col-lg-6 col-sm-10 mb-4">
          <h3 align="center">Envoyer-nous un mail</h3>
          <?php if(isset($_POST['sendEmailButton'])) { echo $msg; }// Permet d'afficher le message si le mail a bien était envoyer ou pas ?>
          <form method="POST">
            <div class="control-group form-group">
              <div class="controls">
                <label>Nom</label>
                <input required type="text" class="form-control" name="lastname" id="lastname" >
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Prénom</label>
                <input required type="text" class="form-control" name="firstname" id="firstname">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email</label>
                <input required type="email" class="form-control" name="email" id="email">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message</label>
                <textarea required rows="10" cols="100" class="form-control" name="message" id="message" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-success pull-right" name="sendEmailButton" id="sendEmailButton"><i class="fas fa-paper-plane"> Envoyer message</i></button>
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
</html>
