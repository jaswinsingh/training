<?php

// class player{
//   public $playerName;
//   public $tokenLeft=[];
//   function __construct($playerName)
//   {
//     $this->playerName=$playerName;
//     $this->tokenLeft=[];
//   }
// }

class player {
  public $player_name;
  public $token_pos=[];

  function __construct($player_name,$position) {

    $this->player_name=$player_name;
    $this->token_pos=$position;
  }
}



 ?>
