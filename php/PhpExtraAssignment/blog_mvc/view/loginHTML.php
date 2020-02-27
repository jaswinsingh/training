<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/internship/php/PhpExtraAssignment/blog_mvc/view/index.css?v=1">
    <link rel="stylesheet" href="/internship/php/PhpExtraAssignment/blog_mvc/view/login.css?v=2">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Malar:200,400,700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title></title>
  </head>
  <body>

    <div class="wrapper">
    <div class="loginForm">
      <form class="login" action="" method="post">
        <input type="text" name="userName" value="" placeholder="USERNAME" required>
        <input type="password" name="password" value="" placeholder="PASSWORD" required>
        <div class="g-recaptcha" data-sitekey="6LdE0NwUAAAAADlW_4jIUaZCVcCf760M21KPzJ5K"></div>
        <input type="submit" name="submit" value="SUBMIT">
        <div id="formFooter">
            <a class="underlineHover" href="index.php">TEMPORARY LOGIN</a>
          <a class="underlineHover" href="http://www.jaswinsingh.com/str/register">REGISTER</a>
        </div>
        <div class="message">
          <?php
          // require_once '../controller/login.php';
          if (isset($_POST['submit'])) {
            echo $msg;}
           ?>
        </div>

      </form>
    </div>
    </div>
  </body>
</html>
