<?php

/**
 * Class Player has various characteristics of player.
 * @var player_name representes player name.
 * @var token_pos representes remaining point require to win current game.
 *
 * initialise class variable in __construct().
 * @param string $player_name.
 * @param array $position.
*/

namespace temp;
class player {
  public $player_name;
  public $token_pos=[];

  function __construct($player_name,$position) {
    $this->player_name=$player_name;
    $this->token_pos=$position;
  }
}

 ?>
