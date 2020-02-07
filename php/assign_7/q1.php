<?php include 'session.php'; ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <script src="java.js?v=1"></script>
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,700&display=swap" rel="stylesheet">
      <title></title>
    </head>
    <body>
      <?php include 'heading.html'; ?>
      <div class="formcontent">
        <div class="form">
        <form name="form1" method="post" action="" class="">
          First Name - <input id="fName" type="text" name="fName" value="" placeholder="First name" onkeyup="checkalpha(document.form1.fName),checkerror(document.getElementById('fname')) ;"required>
          <p id="fname" >*Only alphabet allowed</p>
          Last Name - <input id="lName" type="text" name="lName" value="" placeholder="Last name" onchange="concat();" onkeyup="checkalpha(document.form1.lName),checkerror(document.getElementById('lname'));"required>
          <p id="lname">*Only alphabet allowed</p>
          Full Name - <input  id="full" type="text" name="fullName" value="" disabled>
          <input type="submit" name="submit" >
        </form>
        </div>

      <div class="displayPHP">
        <?php include 'p1.php'; ?>
      </div>
    </div>
    <?php
      include 'pager.php';
      include 'querrString.php';
    ?>

  </body>
  </html>
