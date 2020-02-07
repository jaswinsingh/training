<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table,tr,td{
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
  </head>
  <body>
<form class="" action="" method="post">
  <input type="number" name="count" value="" placeholder="enter a number">
  <input type="submit" name="upload" value="Create">
</form>
<table>

<?php

if (isset($_POST['upload']))
{
  $x=$_POST['count'];
  for ($i=1;$i<=$x ; $i++)
  {
    echo "<tr>";
    for ($j=1;$j<=5 ; $j++)
    {
        echo "<td>";
        echo $i."*".$j."=".($i*$j);
        echo "</td>";
    }
    echo "</tr>";
    echo nl2br("\r\n");
  }

}
?>
 </table>
  </body>
  </html>
