<?php
require '../vendor/autoload.php';
use model\user;

if (!empty($_POST["username"])) {
  if (!preg_match("/[\"*():;+><,%!?\\=\'\/]+/",$_POST["username"])){
    if (strlen($_POST["username"]) >= 4){
        $ob = new user();
        $user_count=$ob->check($_POST["username"]);
          if($user_count>0) {
              echo "NOT AVAILABLE";
          }else{
             echo "AVAILABLE";
          }
    }
    else {
      echo "MINIMUM 4 CHARACTERS";
    }
  }
  else {
    echo "INVALID CHARACTERS";
  }
}

if(isset($_POST["fname"])) {
if (!preg_match("/^[a-zA-Z]+(\ [a-zA-Z]+)?$/",$_POST["fname"])){
        echo "INVALID FULL NAME";
}
}


if(isset($_POST["email"])) {
if (!preg_match("/^([a-z\d\.-_]+)@([a-z\d-]+)\.([a-z]{2,5})([\.a-z]{2,5})?$/",$_POST['email'])){
    echo "INVALID EMAIL";
}
}


if( isset($_POST["phone"])) {
  if(!preg_match("/^[\d]{10}$/",$_POST['phone']))
    echo "INVALID PHONE-NO.";


   }



?>
