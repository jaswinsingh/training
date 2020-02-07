<?php
$match=array(
'match1'=>array('india'=>array('rohit'=>0,'dhawan'=>29,'virat'=>0,'kl_rahul'=>51,'shryas'=>61),'aus'=>array('tim'=>55,'warner'=>1,'smith'=>92,'mike'=>44,'starc'=>25))
,'match2'=>array('india'=>array('rohit'=>11,'dhawan'=>45,'virat'=>60,'kl_rahul'=>81,'shryas'=>54),'newzealand'=>array('guptill'=>55,'nicholls'=>18,'blundell'=>97,'taylor'=>64,'latham'=>2))
,'match3'=>array('india'=>array('rohit'=>208,'dhawan'=>68,'virat'=>10,'kl_rahul'=>0,'shryas'=>74),'england'=>array('vince'=>19,'bairstrow'=>95,'morgon'=>31,'stroke'=>81,'buttler'=>24))
,'match4'=>array('newzealand'=>array('guptill'=>32,'nicholls'=>78,'blundell'=>9,'taylor'=>109,'latham'=>69),'aus'=>array('tim'=>179,'warner'=>75,'smith'=>57,'mike'=>12,'starc'=>6))
,'match5'=>array('aus'=>array('tim'=>77,'warner'=>81,'smith'=>24,'mike'=>34,'starc'=>47),'england'=>array('vince'=>45,'bairstrow'=>27,'morgon'=>90,'stroke'=>0,'buttler'=>4))
,'match6'=>array('newzealand'=>array('guptill'=>122,'nicholls'=>45,'blundell'=>37,'taylor'=>87,'latham'=>15),'england'=>array('vince'=>34,'bairstrow'=>124,'morgon'=>78,'stroke'=>0,'buttler'=>0))
);

$run1=array();
$team1=array();
$tournament=array();
function intialize($match)
{
  global $run1,$team1,$tournament;
  foreach ($match as $match => $team)
  {
    foreach ($team as $team => $player)
    {
      $team1[$team]=0;
      $tournament[$team]=0;
      foreach ($player as $player=>$run)
          $run1[$player]=0;
    }

  }
}
function resetteam(){
  global $team1,$match;
  foreach ($match as $match1 => $team)
  {
    foreach ($team as $team => $player)
    {
      $team1[$team]=0;
    }
  }
}

function max_run($match)
{
  global $run1;
  foreach ($match as $match => $team)
  {
    foreach ($team as $team => $player)
    {
      foreach ($player as $player=>$run)
          $run1[$player]+=$run;
    }

  }
}

function winner($match,$num)
{
  global $run1,$team1,$tournament;

  foreach ($match as $match => $team)
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
    resetteam();
     $result="Max Run in ".$num." ".$max;
     return $result;


    }

  }

// resetteam($match);
}

intialize($match);
max_run($match);
$b= array_keys($run1,max($run1));
echo "Max Run in whole tournament by ".$b[0]." ".max($run1)."<br>" ;
echo winner($match,'match1')."<br>";
echo winner($match,'match2')."<br>";
echo winner($match,'match3')."<br>";
echo winner($match,'match4')."<br>";
echo winner($match,'match5')."<br>";
echo winner($match,'match6')."<br>";

$b= array_keys($tournament,max($tournament));
echo "Tournament won by ".$b[0]."<br>" ;




// print_r($run1);
 // print_r($team1);
 print_r($tournament);
// foreach ($run1
// foreach ($run1 as $key => $value) {
//   echo "<br>".$key." ".$value;
// }
// echo max($run1)."<br>";

 ?>
