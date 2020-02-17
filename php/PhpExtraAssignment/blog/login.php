<?php
require_once 'SqlConnection.php';
if (isset($_POST['submit'])) {
  $userName=$_POST['userName'];
  $password=$_POST['password'];
  $loginQuerry='select password from User_Login where user_id ="'.$userName.'"';
  // $conn->query($loginQuerry);
  $result = mysqli_query($conn, $loginQuerry);
  $row = mysqli_num_rows($result);
  if ($row==0) {
    echo "User ID not found !! ";
  }
  else {
    $row= mysqli_fetch_assoc($result);
    if ($password == $row['password']){
      echo "succes login";
    }
    else {
      echo "wrong password";
    }
  }
}

 ?>
