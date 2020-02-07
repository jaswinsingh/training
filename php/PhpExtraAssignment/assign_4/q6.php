<?php
  session_start();
  if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true)
  {
    header("Location: login.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <?php
      if (!isset($_SESSION['image'])||!isset($_SESSION['fname']) || !isset($_SESSION['marks']) || !isset($_SESSION['phn']) || !isset($_SESSION['email']))
        {
          echo "<script> alert(\"Enter every data\");</script>";
          header("Location: q1.php");
        }
    ?>
  <div class="content">
    <div class="conatiner">
      <?php
       if (isset($_SESSION['image']))
        echo "<img class=\"img\" src=".$_SESSION["image"]."> ".nl2br("\r\n") ;
      ?>
    </div>
    <div class="conatiner">
    <?php
      if (isset($_SESSION['fname']))
        echo "Name :".$_SESSION['fname'],' ',$_SESSION['lname'].nl2br("\r\n");
     ?>
  </div>
  <?php
    if (isset($_SESSION['marks']))
    {
      $ids2=($_SESSION['marks']);
      $Length=count($_SESSION['marks']);
      echo "<table class=\"tab\">";
      echo "<tr> <th>Subjects</th><th>Marks</th><tr>";
      for ($i = 0; $i < $Length; $i++) //DISPLAY ARRAY IN HTML TABLE FORM
       {
         echo "<tr>";
         foreach($ids2[$i] as $value)
          {
            echo "<td>";
            echo $value;
            echo "</td>";
          }
         echo "</tr>";
       }
       echo "</table>";
    }
  ?>
  <div class="container">
  <?php
    if (isset($_SESSION['phn']))
      echo "Contact-no : ".$_SESSION['phn'].nl2br("\r\n");

    if (isset($_SESSION['email']))
      echo "Email : ".$_SESSION['email'].nl2br("\r\n");
  ?>
  </div>
  </div>
  <a class="link download"href="p6.php">Download</a>
  <?php
    include 'pager.php';
    include 'querrString.php';
   ?>

  </body>
</html>
