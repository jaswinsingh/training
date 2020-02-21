<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="index.css"> -->
    <!-- <link rel="stylesheet" href="login.css?v=1"> -->
    <link href="https://fonts.googleapis.com/css?family=Mukta+Malar:200,400,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>

    <div class="wrapper">
    <div class="loginForm">
      <form class="login" action="" method="post">
        <input type="text" name="userName" value="" placeholder="USERNAME" required>
        <input type="password" name="password" value="" placeholder="PASSWORD" required>
        <input type="submit" name="submit" value="SUBMIT">
        <div id="formFooter">
            <a class="underlineHover" href="index.php">TEMPORARY LOGIN</a>
          <a class="underlineHover" href="register.php">REGISTER</a>
        </div>
        <div class="message">
          <?php
          require_once '../controller/login.php';
           ?>
        </div>

      </form>
    </div>
    </div>
  </body>
</html>
