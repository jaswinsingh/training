<?php
session_start();
if($_SESSION['user_id']==''){
  header("Location:http://www.jaswinsingh.com/internship/php/PhpExtraAssignment/blog_mvc/main.php/login");
}
 ?>
