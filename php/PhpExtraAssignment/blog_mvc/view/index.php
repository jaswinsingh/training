<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css?v=1">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Malar:200,400,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <?php require '../controller/navbarSession.php'; ?>
    <div class="container">
      <?php require '../controller/displayAllBlog.php'; ?>
    </div>

  </div>
  </body>
</html>