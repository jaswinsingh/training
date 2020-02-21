<?php
namespace model;
require '../vendor/autoload.php';
use model\connection;

class user extends connection{
  private $errorString;
  function checkUser($userName,$password,$conn){
    $loginQuerry='select password,fname from User_Login where user_id ="'.$userName.'"';
    // $conn->query($loginQuerry);
    $result = mysqli_query($conn, $loginQuerry);
    $row = mysqli_num_rows($result);

    // $t=$hasedpassword=hash('sha256',$password);
    if ($row==0) {
      $errorString = "User ID not found !! ";
      return $errorString;
    }
    else {
      $row= mysqli_fetch_assoc($result);
      if ($password == $row['password']){
        // $errorString = "correct";
        // session_start();
        $_SESSION['user_id']=$userName;
        $_SESSION['fname']=$row['fname'];
        return;
        // header( "Location: index.php");
        // return $errorString;
      }
      else {
        $errorString = "wrong password";
        return $errorString;
      }
    }
  }
}

 ?>
