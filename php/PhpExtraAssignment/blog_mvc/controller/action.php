<?php
session_start();
  $_SESSION['BID']=$_POST['temp'];
if ((isset($_POST['readme'])) && ($_SERVER["REQUEST_METHOD"]=="POST")) {
        header( "Location: http://www.jaswinsingh.com/internship/php/PhpExtraAssignment/blog_mvc/main.php/displayContent");
  }

if ((isset($_POST['edit'])) && ($_SERVER["REQUEST_METHOD"]=="POST")){
          header( "Location: http://www.jaswinsingh.com/internship/php/PhpExtraAssignment/blog_mvc/main.php/editblog");
}

if ((isset($_POST['delete'])) && ($_SERVER["REQUEST_METHOD"]=="POST")){
  header("Location:http://www.jaswinsingh.com/internship/php/PhpExtraAssignment/blog_mvc/main.php/delete");
 } ?>
