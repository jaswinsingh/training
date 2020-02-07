
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
require 'credential.php';

// Instantiation and passing `true` enables exceptions
if (isset($_POST[ "check"]))
{

  $mail = new PHPMailer(true);

  try {
      //Server settings
      $mail->SMTPDebug = 1;                      // Enable verbose debug output
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = "tls://smtp.gmail.com";                    // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = $senderEmail;                     // SMTP username
      $mail->Password   = $pass;                               // SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
      $mail->Port       = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('jaswin.singh@innoraft.com');
      $mail->addAddress($_POST['email']);     // Add a recipient


      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'PHP Mailer';
      $mail->Body    = 'This is first mail from PHP message body <b>in bold!</b>';
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="email" action="" method="post">
      Enter Email :-
      <input type="email" name="email" value="">
      <input type="submit" name="check" value="Submit">
    </form>



  </body>
</html>
