<?php
session_start();
if($_SESSION['user_id']==''){
  header("Location:loginHTML.php");
}
 ?>
