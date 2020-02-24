<?php
require 'sessionCheck.php';
require '../vendor/autoload.php';
use model\blog;
$ob= new blog();

if ($ob->delete($_SESSION['BID'])){
  echo "delete succesfully";
  header( "Refresh:0.5; url='../view/myblog.php'");
}
else {
  echo "error";
}
 ?>
