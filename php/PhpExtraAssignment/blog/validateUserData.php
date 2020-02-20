<?php
require_once 'SqlConnection.php';
include 'vendor/autoload.php';
use blog\user as user;
$error=false;
$errorFname="";
$errorEmail="";
$errorPhone="";
if (isset($_POST['submit'])) {
  $userName=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $fName=$_POST['fname'];

  if (!preg_match("/^[a-zA-Z]+(\ [a-zA-Z]+)?$/",$_POST['fname'])){
    $errorFname=" full name ,Wrong format";
    $error=true;
  }
  if (!preg_match("/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,5})([\.a-z]{2,5})?$/",$_POST['email'])){
    $errorEmail=" Email,Wrong format";
    $error=true;
  }
  if (!empty($_POST['phone'])){
    if (!preg_match("/^\+91[0-9]{10}$/",$_POST['phone'])){
      $errorPhone="PHONE-NO ,Wrong format";
      $error=true;
    }
  }
  if(!$error){
    $Hash=$hasedpassword=hash('sha256',$password);

    $ob = new user($fName,$userName,$Hash,$email,$phone);
    // print_r($ob);
    $sqlInsertData="insert into User_Login values('".$ob->getuserName()."','".$ob->getPassword()."','".$ob->getEmail()."','".$ob->getPhoneNo()."','".$ob->getName()."')";
    if ($conn->query($sqlInsertData))
      header("Location:loginHTML.php");
  }
}


 ?>
