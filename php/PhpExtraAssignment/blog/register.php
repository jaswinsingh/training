 <?php
require_once 'validateUserData.php';

  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css">
    <title></title>
  </head>
  <body>
    <div class="wrapper">
      <div class="loginForm">
        <form class="registerForm" action="" method="post">
        <!-- <label>FULL NAME</label> -->
        <input type="text" name="fname" value="" required placeholder="FULL NAME"><span><?php echo $errorFname ?></span>
        <!-- <label>USERNAME</label> -->
        <input type="text" name="username" value="" required placeholder="USERNAME">
        <!-- <label>PASSWORD</label> -->
        <input type="password" name="password" value="" required placeholder="PASSWORD">
        <!-- <label>EMAIL</label> -->
        <input type="text" name="email" value="" placeholder="EMAIL"><span><?php echo $errorEmail ?></span>
        <!-- <label>PHONE-NO.</label> -->
        <input type="tel" name="phone" value="" placeholder="PHONE-NO."><span><?php echo $errorPhone?></span>
        <input type="submit" name="submit" value="SUBMIT">

      </form>
    </div>
    </div>
  </body>
</html>
