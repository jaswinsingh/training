<?php

class student {
  public $id,$name,$DoB,$grade;
  public $mark=[];

  function __construct($id,$name,$DoB,$grade,$x)
  {
    $this->id=$id;
    $this->name=$name;
    $this->DoB=$DoB;
    $this->grade=$grade;
    $this->mark=[$x];
  }
}


?>
