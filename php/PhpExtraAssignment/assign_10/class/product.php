<?php
//class product has variable pd as product details,sp as selling price ,sd as selling date,ct as categories

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
