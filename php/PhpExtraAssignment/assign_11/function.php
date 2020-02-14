<?php
include 'data.php';
include 'player.php';
$game=[];
foreach ($details as $key => $value) {
  foreach ($value as $k => $v) {
    $ob=new player($v['pname'],$v['position']);
    $game[$key][]=$ob;
    $player[$v['pname']]=0;
  }
}



$currentPlayer="Yogita";
$currentChance=1;

foreach ($game as $key => $value) {
  
}

echo "<pre>";
print_r($game);
print_r($player);
echo "</pre>";
 ?>
