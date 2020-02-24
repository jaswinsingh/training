<?php
namespace model;

class connection{
  protected $serverName;
  protected $userName ;
  protected $password;
  protected $dataBase ;


  function __construct(){
    $this->serverName = "localhost";
    $this->userName = "root";
    $this->password = "Jaswinsingh6326@";
    $this->dataBase = "blog";
  }
  function openConnection(){
    // global $serverName,$userName,$password,$dataBase;
    $conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->dataBase);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        return false;
    }
    else {
      return $conn;
    }
  }
}
 ?>
