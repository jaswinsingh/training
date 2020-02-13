<?php
include 'vendor/autoload.php';
include 'data.php';
use stu\student ;
use sub\subject ;
// include  "student.php";
// include 'Subject.php';

function setmarks($id)
{
  global $marks;
  foreach ($marks as $key => $value)
  {
    if ($key==$id)
    {
      return $value;
    }
  }
}

$st=[];
$sub=[];
foreach ($student as $key => $value)
{
  $x=setmarks($value['id']);
  $obj=new student($value['id'],$value['name'],$value['DoB'],$value['grade'],$x);
  $st[]=$obj;
}

foreach ($subject as $key => $value)
{
  foreach ($value as $k1 => $v1)
  {
    $obj1=new subject($v1['Subject'],$v1['S_code'],$v1['mm']);
    $sub[$key][]=$obj1;
  }
}

class test
{
  function showSubject($var)
  {
      global $sub;
      foreach ($sub as $key => $value)
      {
        if ($var==$key)
        {
          foreach ($value as $k1 => $v1)
          {
            echo "Subject[‘name’] = ".$v1->Subject."<br>";
            echo "Subject[‘code’] = ".$v1->S_code."<br>";
            echo "Subject[mm] = ".$v1->mm."<br>";
            echo "<br>";
          }
        }
      }
  }

  function showMarks($id)
  {
    global $st;
    foreach ($st as $key => $value)
    {
      if($value->id==$id)
        return $value->mark;
    }
  }

  function pass($id)
  {
    global $st;
    $temp=0;$c=0;
    foreach ($st as $key => $value)
    {
      if($value->id==$id)
      foreach ($value->mark[0] as $k1 => $v1)
      {
        $temp+=$v1;
        $c+=1;
      }
    }

  return $temp/$c>40?"Pass":"Fail";
  }


  function table()
  {
        global $st;
      ?>
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title></title>
        </head>
        <body>
          <table border="1px solid black">
            <tr>
              <th>Name</th>
              <th>DOB</th>
              <th>Grade</th>
              <th>Subjects</th>
              <th>Result</th>
            </tr>
    <?php
    foreach ($st as $key => $value)
    {
      echo "<tr> <td>".$value->name."</td><td>".date('m/d/Y', $value->DoB)."</td><td>".$value->grade."</td><td>";
      foreach ($value->mark[0] as $k => $v)
        {
          echo $k." (".$v." , ".$this->minMarks($k).")<br><br>";
        }
        echo "</td>";
        echo "<td>".$this->pass($value->id)."</td></tr>";
    }
  }

  function minMarks($subCode)
  {
    global $sub;
    foreach ($sub as $key => $value)
    {
      foreach ($value as $k1 => $v1)
      {
        if ($v1->S_code==$subCode)
        {
          return $v1->mm;
        }
      }
    }
  }

}

?>
</table>
</body>
</html>

<?php
echo "<pre>";
// print_r($subject);
// print_r($marks);
// print_r($st);
 // print_r($sub);
//  print_r($student);
echo "</pre>";


$test1=new test();      //2
$test1->showSubject(10);


$result=$test1->showMarks('st1'); //3
echo "<pre>";
print_r($result);
echo "</pre>";



// $test1=new test();
// $avgMarks=$test1->pass('st1');
// echo $avgMarks;

$test1=new test();
$test1->table();  //5
// $test1->minMarks('HU201')

 ?>
