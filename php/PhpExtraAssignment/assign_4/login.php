<?php

session_start();

  include 'mysql.php';
  if (isset($_POST['upload'] )) {
    $user=$_POST["username"];
    $password=$_POST["password"];

    $checkuser='select password as pass from loginuser where userid ="'.$user.'"';
    $result = mysqli_query($conn, $checkuser);
    $row= mysqli_fetch_assoc($result);
    if($password==$row['pass']){
    echo "welcome ".$user;
    $_SESSION["login"] = true;
    header("Location: q1.php");
    }
    else {
      echo "sorry try again";
    }
  }

include 'querrString.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <?php include 'heading.html'; ?>
    <div class="logincontent">
      <div class="login">

    <form class="form loginform" action="" method="post">
      <label>Enter Username</label>
      <input type="text" name="username" value="" placeholder="USERNAME">
      <label>Enter Password</label>
      <input type="password" name="password" value="" placeholder="PASSWORD">
      <input type="submit" name="upload" value="Login">
      <a href="forgothtml.php">Forgot password</a>
    </form>

  </div>
  </div>
  </body>
</html>
