<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="loginForm">
      <form class="login" action="" method="post">
        <label>USERNAME <span>*</span> - </label>
        <input type="text" name="userName" value="" required>
        <label>PASSWORD</label>
        <input type="password" name="password" value="" required>
        <input type="submit" name="submit" value="SUBMIT">
        <a href="register.php">REGISTER</a>
      </form>
    </div>
  </body>
</html>
<?php
require_once 'login.php';

 ?>
