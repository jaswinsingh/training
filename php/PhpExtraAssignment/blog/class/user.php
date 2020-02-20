<?php
namespace blog;
class user{
  private $fullName;
  private $userName;
  private $password;
  private $email;
  private $phoneNo;

  function __construct($fullName,$userName,$password,$email,$phoneNo){
    $this->fullName=$fullName;
    $this->userName=$userName;
    $this->password=$password;
    $this->email=$email;
    $this->phoneNo=$phoneNo;
  }

  function getName(){
    return $this->fullName;
  }

  function getuserName(){
    return $this->userName;
  }

  function getPassword(){
    return $this->password;
  }

  function getEmail(){
    return $this->email;
  }

  function getPhoneNo(){
    return $this->phoneNo;
  }
}


 ?>
