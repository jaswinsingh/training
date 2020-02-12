<?php
include 'Data.php';
include 'match.php';
include 'tournament.php';

$match_dt=[];
$tournament=[];
foreach ($matches as $key => $value) {
  $obj=new match($key);
  $match_dt[]=$obj;
  foreach ($value as $k => $v) {
    $run=0;
    foreach ($v as $k1 => $v1) {
      $run+=$v1;// code...
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

$obj1=new tournament();
$tournament[]=$obj1;
foreach ($matches as $key => $value) {
  foreach ($value as $k => $v) {
    $tournament[$team]=0;
  }
}


echo"<pre>";
// print_r($match_dt);
print_r($matches);
print_r($tournament);

echo"</pre>";
 ?>
