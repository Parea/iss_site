<?php
// // Check for empty fields
// if(empty($_POST['lastname'])      ||
//    empty($_POST['email'])     ||
//    empty($_POST['firstname'])     ||
//    empty($_POST['message'])   ||
//    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//    {
//    echo "No arguments Provided!";
//    return false;
//    }
   
// $lastname = strip_tags(htmlspecialchars($_POST['lastname']));
// $email_address = strip_tags(htmlspecialchars($_POST['email']));
// $firstname = strip_tags(htmlspecialchars($_POST['firstname']));
// $message = strip_tags(htmlspecialchars($_POST['message']));
   
// // Create the email and send the message
// $to = 'test.paretz@gmail.com'; // Permet d'envoyer le mail vers l'email support
// $email_subject = "Formulaire de contact du site ISS $lastname";
// $headers = 'From: Formulaire de contact'."\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com
// $headers.='Content-Type:text/html; charset="utf-8"'."\n";
// $headers.='Content-Transfert-Encoding: 8bit';
// $headers .= "Repondre à: $email_address"; 
// $email_message = "
// <html>
//   <body>
//     <div align='center>'
//       Vous avez reçu un message du formulaire de contact du site ISS
//       <br/>
//       <p>Voici les details :\n\nNom: $lastname\n\n Prénom: $firstname\n\n Email: $email_address\n\n Message:\n$message</p>
//     </div>
//   </body>
// </html>";

// mail($to,$email_subject,$email_message,$headers);
// $msg = "Votre message a bien été envoyé";
// return true;         
?>