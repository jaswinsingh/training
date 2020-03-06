<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/internship/php/PhpExtraAssignment/blog_mvc/view/index.css?v=3">
    <title></title>
  </head>
  <body>
  <?php
  if (!isset($_SESSION['DID'])){
    header("Location:http://www.jaswinsingh.com/str/index");
  }
  require 'controller/sessionCheck.php';
  require 'vendor/autoload.php';
  use model\blog;
  $ob= new blog();

  if ($ob->delete($_SESSION['DID'])){
    ?>
    <div class="updateMsg">
  <?php
   echo "delete succesfully";
   // unset($_SESSION['BID']);
   unset($_SESSION['DID']);

   ?>
  </div>
  <?php
    header( "Refresh:0.5; url='http://www.jaswinsingh.com/str/myblog'");
  }
   ?>
</body>
</html>
