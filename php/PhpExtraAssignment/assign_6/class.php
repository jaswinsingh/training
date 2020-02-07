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

class team {
public  $teamName;
function setteam($teamName) {
    $this->teamName = $teamName;
  }

function getteam() {
  return $this->teamName;
    }
}


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


class


$team1=new team();
$team1->setteam("India");
$player1 = new player("Virat",90);
$player2 = new player("Rohit",120);
$player3= new player("KL Rahul",33);
$player4= new player("Shreyas",0);


$player5 = new player("Warner",105);
$player6 = new player("smith",78);
$player7= new player("starc",6);
$player8= new player("pointing",45);

// print_r($player);
$match1=new match("match1","india","australia");
$match2=new match("match2","india","newzealand");
$match3=new match("match3","india","england");
$match4=new match("match4","australia","newzealand");
$match5=new match("match5","australia","england");
$match6=new match("match6","newzealand","england");

// echo $team1->getteam();
  $match=array($match1->getmatch()=>array($match1->getteam1()=>array($player1->getname()=>$player1->getrun(),$player2->getname()=>$player2->getrun(),$player3->getname()=>$player3->getrun(),$player4->getname()=>$player4->getrun()),$match1->getteam2()=>
  array($player5->getname()=>$player5->getrun(),$player6->getname()=>$player6->getrun(),$player7->getname()=>$player7->getrun(),$player8->getname()=>$player8->getrun())),
  $match2->getmatch()=>array($match2->getteam1()=>array($player1->getname()=>$player1->getrun(),$player2->getname()=>$player2->getrun(),$player3->getname()=>$player3->getrun(),$player4->getname()=>$player4->getrun()),$match2->getteam2()=>array($match1->getteam1()=>
  array($player5->getname()=>$player5->getrun(),$player6->getname()=>$player6->getrun(),$player7->getname()=>$player7->getrun(),$player8->getname()=>$player8->getrun()))));



print_r($match);


 ?>
