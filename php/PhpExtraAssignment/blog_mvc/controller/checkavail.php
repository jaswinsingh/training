<?php
require '../vendor/autoload.php';
use model\user;

if(!empty($_POST["username"])) {
$ob = new user();
$user_count=$ob->check($_POST["username"]);
  if($user_count>0) {
      echo "Username Not Available";
  }else{
      echo "Username Available";
  }
}

if(isset($_POST["fname"])) {
if (!preg_match("/^[a-zA-Z]+(\ [a-zA-Z]+)?$/",$_POST["fname"])){
        echo "Use Correct format";
}
}


if(isset($_POST["email"])) {
if (!preg_match("/^([a-z\d\.-_]+)@([a-z\d-]+)\.([a-z]{2,5})([\.a-z]{2,5})?$/",$_POST['email'])){
    echo "Use Correct format";
}
}


if( isset($_POST["phone"])) {
  if(!preg_match("/^[\d]{10}$/",$_POST['phone']))
    echo "Use Correct format";


   }



?>
