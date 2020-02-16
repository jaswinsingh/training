<?php

require 'vendor/autoload.php';
use temp\player as player;
use temp\ludoFunction as ludoFunction;
include 'data.php';

$game=[];
$player=[];
$currentPlayer="yogita";

/**
* creating object of player in creat_ob().
* initialises player_name and player_token values.
*
*
*/
function create_ob(){
  global $details, $game, $player;
  foreach ($details as $key => $value) {
    $obj= new player($value['pname'], $value['position']);
    $game[]=$obj;
    $player[$value['pname']]=0;

  }
}

create_ob();

$client=new GuzzleHttp\Client();
$res = $client->request('GET', 'http://learning.architbohra.com/ludo_json.php', ['headers' => ['User-Agent', 'myreader']]);
$j=json_decode($res->getBody(),true);

$ob=new ludoFunction();
foreach ($j as $key => $value) {
  $ob->dice_values($key, $value);
}
echo ("The Probability Of Yogita Winning The Game is ". ($player['yogita']/$key)*100). "%";


 ?>
