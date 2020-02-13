<?php
include 'Data.php';
// include 'match.php';
// include 'player.php';
include 'vendor/autoload.php';
use match\match;
use player\player;


$player_runs=[];
$match_dt=[];
$tournament=[];

foreach ($matches as $key => $value) {
  $obj=new match($key);
  $match_dt[]=$obj;
  foreach ($value as $k => $v) {
    $tournament[$k]=0;
    $run=0;
    foreach ($v as $k1 => $v1)
    {
      $run+=$v1;
      $obj1=new player($k1);
      $player_runs[$k1]=$obj1;
  // individual_run($k1,$v1);
    }
    totalRun($key,$k,$run);
    // echo $key.$k;
 }
}

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

foreach ($matches as $key => $value) {
  foreach ($value as $ke => $va) {
    foreach ($va as $k => $v) {
      individual_run($k,$v);
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

tournament_winner();
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

echo "Highest scorer in Tournament ".highest_scorer()."<br>";
echo "Highest runs in scored in Tournament ".max_score();
echo"<pre>";
// print_r($match_dt);
// print_r($matches);
// print_r($tournament);
// print_r($player_runs);
echo"</pre>";
 ?>
