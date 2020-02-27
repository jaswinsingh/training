<?php
// require_once 'SqlConnection.php';
session_start();
require 'vendor/autoload.php';
use model\user;
if (isset($_POST['submit'])) {


  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
{
      $secret = '6LdE0NwUAAAAAIjDk5haLxu2098QHussjZWIqFld';
      $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
      $responseData = json_decode($verifyResponse);
      if($responseData->success)
      {
          $succMsg = true;
      }
      else
      {
          $msg = 'Robot verification failed, please try again.';
      }
 }



  $userName = $_POST['userName'];
  $password = $_POST['password'];

  if (preg_match("/^[a-zA-Z0-9_]{1,10}$/",$userName) &&  preg_match("/^[a-zA-Z0-9_]{1,10}$/",$userName)){
    $login = new user();
    $conn=$login->openConnection();
    $msg=$login->checkUser($userName,$password,$conn);
    if ($msg){

      session_destroy();

    }
     elseif (isset($_SESSION['user_id']) && isset($succMsg))
      header("Location:http://www.jaswinsingh.com/str/index");

  }
}
require 'view/loginHTML.php';
 ?>
