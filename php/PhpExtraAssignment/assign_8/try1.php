<?php

class  college
{
  public $id,$name,$details=[];;
  function __contructor($id,$name)
  {
    $this->id=$id;
    $this->name=$name;
    $this->details=[];
  }
  function getid()
  {
    return $this->id;
  }
  function getname()
  {
    return $this->name;
  }
}

class  document
{
  public $doc_name,$doc_type,$doc_college,$sent;
  function __contructor($doc_name,$doc_type,$doc_college,$sent)
  {
    $this->doc_name=$doc_name;
    $this->doc_college=$doc_college;
    $this->doc_type=$doc_type;
    $this->sent=$sent;
  }
  function getname()
       {
           return $this->name;
       }
       function gettype()
       {
           return $this->type;
       }
       function getcollege()
       {
           return $this->college;
       }
       function getsent()
       {
           return $this->sent;
       }
}

$college=array();
for ($i=0; $i < 5; $i++) {
$college[]=$i;
}

 ?>
