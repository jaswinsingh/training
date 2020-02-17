 <?php
require_once 'validateUserData.php';

  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="registerForm" action="" method="post">
      <label>FULL NAME</label>
      <input type="text" name="fname" value="" required><span><?php echo $errorFname ?></span>
      <label>USERNAME</label>
      <input type="text" name="username" value="" required>
      <label>PASSWORD</label>
      <input type="password" name="password" value="" required>
      <label>EMAIL</label>
      <input type="text" name="email" value=""><span><?php echo $errorEmail ?></span>
      <label>PHONE-NO.</label>
      <input type="tel" name="phone" value=""><span><?php echo $errorPhone?></span>
      <input type="submit" name="submit" value="SUBMIT">

    </form>
  </body>
</html>
