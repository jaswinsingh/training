<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/internship/php/PhpExtraAssignment/blog_mvc/view/index.css?v=6">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/internship/php/PhpExtraAssignment/blog_mvc/view/login.css?v=9">
    <script src="/internship/php/PhpExtraAssignment/blog_mvc/view/jquery.js?v=4" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Malar:200,400,700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title></title>
  </head>
  <body>
    <?php require 'view/navbar_NL.php'; ?>
    <div class="wrapper">
      <div class="loginForm">
        <form class="login" action="" method="post">
            <label for="userName">USERNAME</label><sup class="required"> * </sup>
            <div class="input">
                  <input type="text" name="userName" value="" placeholder="Robert" required>
            </div>

            <label for="password">PASSWORD</label><sup class="required"> * </sup>
            <div class="input">
              <input type="password" id="password-field" name="password" value="" placeholder="PASSWORD" required>
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>

            <!-- <div class="g-recaptcha" data-sitekey="6LdE0NwUAAAAADlW_4jIUaZCVcCf760M21KPzJ5K"></div> -->
            <input type="submit" name="submit" value="SUBMIT">
            <div id="formFooter">
              <a class="underlineHover" href="http://www.jaswinsingh.com/str/register">REGISTER</a>
            </div>
            <div class="message">
              <?php
              if (isset($_POST['submit'])) {
                echo $msg.nl2br("\r\n");
                echo $cap;
              }
              ?>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
