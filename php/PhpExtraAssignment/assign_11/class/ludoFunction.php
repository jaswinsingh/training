<?php
namespace temp;

/**
 * Class ludoFunction has various function defined of player.
 *
 *
 * cheching player has won or not in dice_value()
 * @param int $key represent match no.
 * @param int $value represent value when dice is rolled.
 * function dice_value is used to traverse single dice value and check whether any players have won or not.
 * if player won the match print the match no and in how many moves.
 *
 *
 * reducing distance of player's token in to_win().
 * @param int $x represent value of dice
 * to_win takes rolled dice value and reduced current player's token value .
 * token value represent number of step required for particular player to win
 * @return
 * int 5 if current player has won the current game i.e all token are in placed in home.
 *int 1 if current player token value is reduced or not reduced by current dice value to give next player chance.
 *
 *
 *
 * check winner in cuurent match by check_winner()
 * @param array array represent current position of tokens of player
 * check if every token of current player is in home or not.
 * @return
 * int 5 if player has all otoken in home .
 * int -5 if player doesn't have all its token in home.
 *
 *
 *
 * reset the score of all player after the game is over in reset_score().
 *
 *
 *
*/


class ludoFunction{
  public function dice_values($key, $value){
    global $currentPlayer,$player;
      for ($i=0; $i <strlen($value) ; $i++) {
         $r=$this->to_win($value[$i]);
         if ($r == 5){
           $this->reset_score();
           echo $currentPlayer." Won The Game#".($key+1)." In ".($i+1)." Turns<br>";
           $player[$currentPlayer]+=1;
           $currentPlayer="yogita";
           break;
         }
         $this->next_chance($r);
      }
  }


    public function to_win($x){
      global $game,$currentPlayer;
      foreach ($game as $key => $value) {

            if ($value->player_name == $currentPlayer){
              usort($value->token_pos,array($this, "cmp"));
              foreach ($value->token_pos as $k1 => $v1) {
                  if ($v1 != -1 && $v1 >= $x){
                    if( $v1 == $x){
                      $value->token_pos[$k1] = -1;
                      $w=$this->check_winner($value->token_pos);
                      if($w == 5)
                        return 5;
                      return 0;
                    }
                    else {
                      $value->token_pos[$k1] = $v1-$x;
                      return 1;
                  }
              }
            }
            return 1;
        }
      }
   }

    public function check_winner($arr){
      foreach ($arr as $key => $value) {
        if($arr[$key] != -1)
          return -5;
      }
          return 5;
    }


    public function next_chance($r){
      global $currentPlayer;
      if ($r == 1){
        if ($currentPlayer == 'zubin')
          $currentPlayer = 'yogita';
        elseif ($currentPlayer == 'yogita')
            $currentPlayer = 'zubin';
      }
    }

    public function reset_score(){
      global $game,$details;
      foreach ($details as $key => $value) {
        foreach ($game as $k => $v) {
          if ($v->player_name == $value['pname'])
          $v->token_pos=$value['position'];
        }
      }
    }

    function cmp($a,$b) {
      return $a - $b;}

}

 ?>
