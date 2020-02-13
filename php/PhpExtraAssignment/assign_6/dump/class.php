<?php

$run1=array();
$team1=array();
$tournament=array();

class match
{
  public $matchno;
  public $team1,$team2;
  function __construct($matchno,$team1,$team2) {
      $this->matchno = $matchno;
      $this->team1 = $team1;
      $this->team2 = $team2;
    }

  function getmatch(){
  return $this->matchno;
  }

  function getteam1(){
  return $this->team1;
  }

  function getteam2(){
  return $this->team2;
  }
}

// class team {
// public  $teamName;
// function setteam($teamName) {
//     $this->teamName = $teamName;
//   }
//
// function getteam() {
//   return $this->teamName;
//     }
// }


class player {
public $name;
public $run;

function __construct($name,$run) {
  $this->name = $name;
  $this->run = $run;
  }

  function getname() {
    return $this->name;
    }
  function getrun() {
    return $this->run;
      }
}



//
// $team1=new team();
// $team1->setteam("India");
$player1 = new player("Virat",90);
$player2 = new player("Rohit",120);
$player3= new player("KL Rahul",33);
$player4= new player("Shreyas",0);


$player5 = new player("Warner",505);
$player6 = new player("smith",78);
$player7= new player("starc",6);
$player8= new player("pointing",45);

// print_r($player);
$match1=new match("match1","india","australia");
$match2=new match("match2","india","newzealand");
// $match3=new match("match3","india","england");
// $match4=new match("match4","australia","newzealand");
// $match5=new match("match5","australia","england");
// $match6=new match("match6","newzealand","england");

// echo $team1->getteam();
$matchArray=array($match1->getmatch()=>array($match1->getteam1()=>array($player1->getname()=>$player1->getrun(),$player2->getname()=>$player2->getrun(),$player3->getname()=>$player3->getrun(),$player4->getname()=>$player4->getrun()),$match1->getteam2()=>
  array($player5->getname()=>$player5->getrun(),$player6->getname()=>$player6->getrun(),$player7->getname()=>$player7->getrun(),$player8->getname()=>$player8->getrun())),
  $match2->getmatch()=>array($match2->getteam1()=>array($player1->getname()=>$player1->getrun(),$player2->getname()=>$player2->getrun(),$player3->getname()=>$player3->getrun(),$player4->getname()=>$player4->getrun()),$match2->getteam2()=>
  array($player5->getname()=>$player5->getrun(),$player6->getname()=>$player6->getrun(),$player7->getname()=>$player7->getrun(),$player8->getname()=>$player8->getrun())));

// print_r($match);
class tounament
{
  function intialize()
  {
    global $run1,$team1,$tournament,$matchArray;

    foreach ($matchArray as $match=>$team)
    {
      foreach ($team as $team => $player)
      {
        $team1[$team]=0;
        $tournament[$team]=0;
        foreach ($player as $player=>$run)
            {
              $run1[$player]=0;
            // echo $player;
            }
      }
    }
  }

  function resetteam(){
    global $run1,$team1,$tournament,$matchArray;
    foreach ($matchArray as $match1 => $team)
    {
      foreach ($team as $team => $player)
      {
        $team1[$team]=0;
      }
    }
  }

  function max_run()
  {
    global $run1,$team1,$tournament,$matchArray;
    foreach ($matchArray as $match => $team)
    {
      foreach ($team as $team => $player)
      {
        foreach ($player as $player=>$run)
            $run1[$player]+=$run;
      }

    }
  }


  function winner($num)
  {
    global $run1,$team1,$tournament,$matchArray;

    foreach ($matchArray as $match => $team)
    { if ($num==$match) {
      $max=0;
      foreach ($team as $team => $player)
      {
        foreach ($player as $player=>$run)
          {  $team1[$team]+=$run;
              if($run>$max)
              $max=$run;
          }
      }
      $b= array_keys($team1,max($team1));
      $tournament[$b[0]]+=1;
      $this->resetteam();
       $result="Max Run in ".$num." ".$max;
       return $result;
      }
    }
  }


}

$res=new tounament();
$res->intialize();
$res->max_run();
// print_r($run1);
$b= array_keys($run1,max($run1));
echo "Max Run in whole tournament by ".$b[0]." ".max($run1)."<br>" ;
echo $res->winner('match1')."<br>";
echo $res->winner('match2')."<br>";
$b= array_keys($tournament,max($tournament));
echo "Tournament won by ".$b[0]."<br>" ;
// print_r($team1);
// print_r($tournament);

 ?>
