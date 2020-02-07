<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <form class="" action="" method="post">
    <input type="radio" name="game" value="Rock">Rock
    <input type="radio" name="game" value="Paper">Paper
    <input type="radio" name="game" value="Scissor">Scissor
    <input type="submit" name="upload" value="Submit">
  </form>
  </body>
</html>
<?php
if (isset($_POST['upload']))
{
  $user=$_POST['game'];


  $rule=['Rock'=>'Scissor',
          'Paper'=>'Rock',
          'Scissor'=>'Paper'
        ];
$comp=array_rand($rule);
echo "A.I -".$comp."<br>  user-".$user;
if ($comp==$user)
  echo "<br> Draw";

elseif ($rule[$comp]==$user)
  echo "<br>A.I wins";
 else
    echo "<br>User wins";


}


 ?>
