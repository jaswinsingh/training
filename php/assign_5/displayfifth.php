<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    /* styling of content */
      table, tr, td,th{
        border: 2px solid black;
         border-collapse: collapse;
         padding: 5px;
         margin:30px;
      }
      img{
        height: 300px;
        width: 300px;
        display: block;
         margin:30px;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
if ( $_FILES['file']['size']>0)
  {
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_tem_loc = $_FILES['file']['tmp_name'];
    $file_store = "upload/".$file_name;
    move_uploaded_file($file_tem_loc,$file_store);
    echo "<img style=\"height:200px;width:200px;\" src =".$file_store.">";
      echo "Hello ".$_POST["fName"]," ",$_POST["lName"];
  }

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
 if (isset($_POST["phone"]))
 {
   if(preg_match("/^\+91[0-9]{10}$/",$_POST["phone"]))
    {
      echo "phone no  ".$_POST["phone"];
      $_SESSION['phn']=$_POST["phone"];
     }
     else {
       echo "enter valid phn-no [+91xxxxxxxxxx]";
     }
 }


   if (isset($_POST['email']))
  {
    $access_key = '8a06741ebfab93a994bdcaa59eebc248';

    // getting email address email
    $email_address = $_POST['email'];
    // Initialize CURL:
    $ch = curl_init('http://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Store the data:
    $json = curl_exec($ch);
    curl_close($ch);
    // echo var_dump($json);

    $validationResult = json_decode($json, true);

    if (($validationResult['format_valid']) && ($validationResult['smtp_check']) && ($validationResult['score'])>0.5)
    {
      echo nl2br("\n Welcome ".$_POST["email"]);
    }
    else
    {
      echo nl2br("\n Hello spam");
     }

  }
  ?>
