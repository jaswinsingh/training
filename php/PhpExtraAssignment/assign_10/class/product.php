<?php
namespace detail;
class product{
  public $pd;
  public $sp;
  public $sd;
  public $ct;

  function __construct($pd,$sp,$sd,$ct){
    $this->pd=$pd;
    $this->sp=$sp;
    $this->sd=$sd;
    $this->ct=$ct;
  }
}
?>
