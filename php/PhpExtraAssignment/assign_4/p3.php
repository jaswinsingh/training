
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    /* styling of content */


    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    // DISPLAY SUBJECT MARKS IN FORM OF TABLE
    if (isset($_POST['comments'])&& $_POST['comments']!="")
    {
      if (preg_match_all("/[a-zA-Z]+\|[0-9]+[\r\n]+/",$_POST["comments"]))
      {
        $x=$_POST['comments'];
        $x=preg_replace('/[\r\n ]+$/', "", $x); //REGULAR EXPRESSION USED TO ELIMINATE LAST LINE BREAKS AND EXTRA SPACE
        $x=preg_replace('/[\r\n ]+/', "\n", $x); //REGULAR EXPRESSION USED TO ELIMINATE EXTRA LINE BREAKS AND EXTRA SPACE
        // $y='/[a-zA-Z]+\|[0-9]+/g';

        // echo var_dump($t1);
        $ids = explode("\n",$x);//DIVINDING INPUT STRING INTO ARRAY

        $ids2=array();
        foreach ($ids as $dat)
          {
            $ids2[] = explode("|", $dat);//DIVINDING INPUT STRING INTO 2D ARRAY
          }
          $_SESSION['marks']=$ids2;
        $arrayLength = count($ids2);

        echo "<table>";
        echo "<tr> <th>Subjects</th><th>Marks</th><tr>";
        for ($i = 0; $i < $arrayLength; $i++) //DISPLAY ARRAY IN HTML TABLE FORM
         {
           echo "<tr>";
            foreach($ids2[$i] as $value)
            {
              echo "<td>";
              echo $value;
              echo "</td>";
            }
           echo "</tr>";
         }
         echo "</table>";
       }
       else {
         echo "wrong format";
       }
    }
  
  ?>
</body>
</html>
