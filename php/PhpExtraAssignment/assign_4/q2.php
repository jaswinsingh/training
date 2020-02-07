<?php
  include 'session.php';
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
    <div class="formcontent">
      <div class="form">
      <form name="form1" method="post" action="" class="" enctype="multipart/form-data">
      <label>Select an image to  upload</label>
      <input type="file" name="file" required>
      <input type="submit" name="upload">
    </form>
  </div>
  <div class="displayPHP">
    <?php include 'p2.php'; ?>
  </div>
  </div>
  <?php
    include 'pager.php';
    include 'querrString.php';
   ?>
  </body>
</html>
