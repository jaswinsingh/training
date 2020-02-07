<?php ob_start(); ?>


<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$phone = $_POST['phone'];
$email = $_POST['email'];

echo "<html>";
echo "<body>";

if (isset($_POST[upload]))
{
  // USED TO DISPLAY IMAGE FROM SERVER
  $file_name = $_FILES['file']['name'];
  $file_type = $_FILES['file']['type'];
  $file_size = $_FILES['file']['size'];
  $file_tem_loc = $_FILES['file']['tmp_name'];
  $file_store = "/var/www/html/upload/".$file_name;
  move_uploaded_file($file_tem_loc,$file_store);
  echo nl2br("<img style=\"height:150px;width:150px;\" src =".$file_store.">\n <hr>" );
}

echo nl2br("Name - ".$fName." ".$lName."\n <hr>");
echo nl2br("Phone no. ".$phone."\n <hr>");
echo nl2br("Email - ".$email."\n <hr>");


if ($_POST['comments']!="")
{
$x=$_POST['comments'];
$x=preg_replace('/[\r\n]+/', "\n", $x); //REGULAR EXPRESSION USED TO ELIMINATE EXTRA LINE BREAK
$ids = explode("\n",$x);//DIVINDING INPUT STRING INTO ARRAY
$ids2=array();
foreach ($ids as $dat)
  {
    $ids2[] = explode("|", $dat);//DIVINDING INPUT STRING INTO 2D ARRAY
  }
$arrayLength = count($ids2);
echo "<h2>Report card</h2>";
echo "<table border=\"1px solid black\">";
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


  $temp=ob_get_contents();
  $fileName = "/var/www/html/upload/myfile.doc";
  $fp = fopen($fileName,"w");
  if( $fp == false )
  {
    echo ( "Error in opening file" );
    exit();
  }
  fwrite( $fp, $temp );
  fclose($fp);
  echo "</body>";
  echo "</html>";
  ob_end_flush();

?>
</body>
</html>
