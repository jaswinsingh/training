<?php
namespace player;
class player{
  public $playerName;
  public $runs;
  function __construct($playername)
  {
    $this->playerName=$playername;
    $this->runs=0;
  }
}

 ?>
