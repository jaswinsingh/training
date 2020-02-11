<?php
include 'data.php';

class student {
  public $id,$name,$DoB,$grade;
  public $mark=[];

  function __construct($id,$name,$DoB,$grade,$x)
  {
    $this->id=$id;
    $this->name=$name;
    $this->DoB=$DoB;
    $this->grade=$grade;
    $this->mark=[$x];
  }
}

class subject{
  public $Subject,$S_code,$mm;
  function __construct($Subject,$S_code,$mm)
  {
    $this->Subject=$Subject;
    $this->S_code=$S_code;
    $this->mm=$mm;
  }
}


function setmarks($id)
{
  global $marks;
  foreach ($marks as $key => $value) {
    if ($key==$id) {
      // $mark[]=$value;
      return $value;
    }
  }
}

$st=[];
$sub=[];
foreach ($student as $key => $value) {
// echo $value['id'],$value['name'],$value['DoB'],$value['grade']."<br>";
$x=setmarks($value['id']);
$obj=new student($value['id'],$value['name'],$value['DoB'],$value['grade'],$x);

$st[]=$obj;

}









foreach ($subject as $key => $value) {
  // $obj2=new grade($key);
  // $sub[]=$obj2;
  foreach ($value as $k1 => $v1) {
    // echo $v1['Subject'];
    // echo $key;/

    $obj1=new subject($v1['Subject'],$v1['S_code'],$v1['mm']);

    $sub[$key][]=$obj1;
    // print_r( $obj1);
  }
}

class test{
  function showSubject($var)
  {
      global $sub;
      foreach ($sub as $key => $value) {
        if ($var==$key) {
          // code...

        foreach ($value as $k1 => $v1) {
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
  foreach ($st as $key => $value) {
    print_r($value);
  }
}

}

echo "<pre>";
// print_r($subject);
// print_r($marks);
print_r($st);
//  print_r($sub);
//  print_r($student);
//
echo "</pre>";


$test1=new test();
$test1->showMarks(101);



 ?>
