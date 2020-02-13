<?php
include 'test.php';
include 'Data.php';
include 'match.php';
include 'player.php';

class test
{

  function totalRun($x,$y,$z)
  {
      global $match_dt;
      foreach ($match_dt as $key => $value) {
      if($value->match_no==$x){
      $value->match_run[$y]=$z;
      // $value->match_details[]=$z;
      }
  }
  }


  function individual_run($player,$run)
  {
    global $player_runs;
  // echo $player."  ".$run ."<br>";
    foreach ($player_runs as $key1 => $value)
    {
      if($key1==$player)
        $value->runs+=$run;
    }
  }


  function max_score()
  {
    global $match_dt;
    $max=0;
    foreach ($match_dt as $key => $value) {
      foreach ($value->match_run as $k => $v) {
        if($max<$v)
        $max=$v;
      }
    }
    return $max;
  }


  function highest_scorer()
  {
    global $player_runs;
    $max=0;
    foreach ($player_runs as $key => $value) {
      if($max<$value->runs)
      $max=$value->runs;
    }
    return $max;
  }


  function tournament_winner()
  {
    global $tournament,$match_dt;
    $max=0;
    $teamWinner;
    foreach ($match_dt as $key => $value) {
        $b= array_keys($value->match_run,max($value->match_run));
        echo $value->match_no." won by ".$b[0]." ".max($value->match_run)."<br>" ;

    $tournament[$b[0]]+=1;
  }
  $b= array_keys($tournament,max($tournament));
  echo "Tournament won by ".$b[0]." <br>" ;

  }

}


 ?>
