<?php

  if(isset($_GET["q"]))
  {
    $x=$_GET["q"];
    switch($x)
    {
      case 1:
        header("Location: q1.php");
        break;

      case 2:
        header("Location: q2.php");
        break;

      case 3:
        header("Location: q3.php");
        break;

      case 4:
        header("Location: q4.php");
        break;

      case 5:
        header("Location: q5.php");
        break;

      default: header("Location: login.php");
    }
  }

 ?>
