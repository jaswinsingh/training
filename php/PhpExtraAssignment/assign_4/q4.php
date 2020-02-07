<?php
include 'session.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,700&display=swap" rel="stylesheet">
    <script src="java.js?v=1"></script>
    <title></title>
  </head>
  <body>
      <?php include 'heading.html'; ?>
      <div class="formcontent">
        <div class="form">
    <form name="form1" method="post" action="" class="">
      <label>Enter Phone No. [+91xxxxxxxxxx]</label>
      <input type="text" id="pno" name="phone" value="" maxlength="13" placeholder="Enter Ph-no "onchange="CountryCode(),checkerror(document.getElementById('Ph-no'))" required>
      <p id="Ph-no">*Invalid phone number</p>
      <input type="submit" name="upload" >
    </form>
  </div>
  <div class="displayPHP">
    <?php include 'p4.php'; ?>
  </div>
  </div>
  <?php
    include 'pager.php';
    include 'querrString.php';
   ?>
  </body>
</html>
