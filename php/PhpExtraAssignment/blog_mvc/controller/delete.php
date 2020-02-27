<?php
require 'controller/sessionCheck.php';
require 'vendor/autoload.php';
use model\blog;
$ob= new blog();

if ($ob->delete($_SESSION['BID'])){
  echo "delete succesfully";
  header( "Refresh:0.5; url='http://www.jaswinsingh.com/str/myblog'");
}
else {
  echo "error";
}
 ?>
