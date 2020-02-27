<?php
session_start();
if($_SESSION['user_id']==''){
  header("Location:http://www.jaswinsingh.com/str/login");
}
 ?>
