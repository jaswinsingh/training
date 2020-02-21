<?php
// require_once 'SqlConnection.php';
session_start();
require '../vendor/autoload.php';
use model\user;
if (isset($_POST['submit'])) {
  $userName = $_POST['userName'];
  $password = $_POST['password'];

  if (preg_match("/^[a-zA-Z0-9_]{1,10}$/",$userName) &&  preg_match("/^[a-zA-Z0-9_]{1,10}$/",$userName)){
    $login = new user();
    $conn=$login->openConnection();
    $msg=$login->checkUser($userName,$password,$conn);
    if (isset($_SESSION['user_id']))
    echo $_SESSION['user_id'];
    echo $msg;
    session_destroy();



  }
}

 ?>
