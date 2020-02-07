<?php
  include 'session.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="java.js?v=1" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
      <?php include 'heading.html'; ?>
    <div class="formcontent">
      <div class="form">
        <form name="form1" method="post" action="" class="">
          <label>Enter valid Email Address</label>
          <input type="text" id="mail" name="email" value="" placeholder="Enter E-mail" onchange="checkmail(),checkerror(document.getElementById('Email'))" required>
          <p id="Email">*Invalid email format</p>
          <input type="submit" name="upload" >
        </form>
      </div>
      <div class="displayPHP">
          <?php include 'p5.php'; ?>
      </div>
    </div>
  <?php
    include 'pager.php';
    include 'querrString.php';
  ?>
  </body>
</html>
