<?php
 namespace demo;
  class connect{
    function connection(){
        $server = "localhost";
        $user = "root";
        $pass = "12345";
        $db = "blogdb";
        $conn = new mysqli($server,$user,$pass,$db);
        if(!$conn){
          die("connection failed:".$conn->connect_error);
        }
        else{
          return $conn;
        }
      }
  }
?>
