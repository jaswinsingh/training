<?php require '../controller/sessionCheck.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css?v=1">
    <link rel="stylesheet" href="login.css?v=1">
      <link href="https://fonts.googleapis.com/css?family=Mukta+Malar:200,400,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
  <?php
    require_once '../controller/navbarSession.php';
  ?>
  <div class="wrapper">
  <div class="loginForm">
  <form class="login" action="../controller/addBlog.php" method="post" enctype = "multipart/form-data">

  <input type="text" name="bTitle" value="" placeholder="Blog Title" required>

  <input type="file" name="bImage" value=""placeholder="Upload Image">

  <textarea name="bContent" rows="15" cols="40" required></textarea>
  <input type="submit" name="upload" value="Submit">
</form>
</div>
</div>
  </body>
</html>
