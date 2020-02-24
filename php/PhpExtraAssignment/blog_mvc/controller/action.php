<?php
session_start();
  $_SESSION['BID']=$_POST['temp'];
if ((isset($_POST['readme'])) && ($_SERVER["REQUEST_METHOD"]=="POST")) {
        header( "Location: displayContent.php");
  }

if ((isset($_POST['edit'])) && ($_SERVER["REQUEST_METHOD"]=="POST")){
          header( "Location: ../view/editBlog.php");
}

if ((isset($_POST['delete'])) && ($_SERVER["REQUEST_METHOD"]=="POST")){
  header("Location: delete.php");
 } ?>
