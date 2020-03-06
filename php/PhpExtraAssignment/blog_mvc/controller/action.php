<?php
session_start();
if ((isset($_POST['readme'])) && ($_SERVER["REQUEST_METHOD"]=="POST")) {
    $_SESSION['RID'] = $_POST['temp'];
        header( "Location: http://www.jaswinsingh.com/str/displayContent");

  }

if ((isset($_POST['edit'])) && ($_SERVER["REQUEST_METHOD"]=="POST")){
    $_SESSION['EID'] = $_POST['temp'];
          header( "Location: http://www.jaswinsingh.com/str/editblog");

}

if ((isset($_POST['delete'])) && ($_SERVER["REQUEST_METHOD"]=="POST")){
  $_SESSION['DID'] = $_POST['temp'];
  header("Location:http://www.jaswinsingh.com/str/delete");

 } ?>
