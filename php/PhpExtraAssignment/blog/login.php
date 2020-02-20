<?php
require_once 'SqlConnection.php';
if (isset($_POST['submit'])) {
  $userName=$_POST['userName'];
  $password=$_POST['password'];
  $loginQuerry='select password,fname from User_Login where user_id ="'.$userName.'"';
  // $conn->query($loginQuerry);
  $result = mysqli_query($conn, $loginQuerry);
  $row = mysqli_num_rows($result);

  $t=$hasedpassword=hash('sha256',$password);
  if ($row==0) {
    echo "User ID not found !! ";
  }
  else {
    $row= mysqli_fetch_assoc($result);
    if ($t == $row['password']){
      session_start();
      $_SESSION['user_id']=$userName;
      $_SESSION['fname']=$row['fname'];
      header( "Location: index.php");
    }
    else {
      echo "wrong password";
    }
  }
}

 ?>
