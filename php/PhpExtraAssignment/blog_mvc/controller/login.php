<?php
// require_once 'SqlConnection.php';
session_start();
require 'vendor/autoload.php';
use model\user;
if (isset($_POST['submit'])) {
  $userName = $_POST['userName'];
  $password = $_POST['password'];

  if (preg_match("/^[a-zA-Z0-9_]{1,10}$/",$userName) &&  preg_match("/^[a-zA-Z0-9_]{1,10}$/",$userName)){
    $login = new user();
    $conn=$login->openConnection();
    $msg=$login->checkUser($userName,$password,$conn);
    if ($msg){

      session_destroy();

    }
     elseif (isset($_SESSION['user_id']))
      header("Location:http://www.jaswinsingh.com/internship/php/PhpExtraAssignment/blog_mvc/main.php/index");

  }
}
require 'view/loginHTML.php';
 ?>
