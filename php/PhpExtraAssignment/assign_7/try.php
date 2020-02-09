<?php
class Student_details {

	public $details = [];
	public function setter($name,$value) {
	 $this->details[] = [
	 	'Name' => $name,
	 	'Gender' => $value,
	   ];
	 }

	 public function get()
	 {
	 	return $this->details;
	 }

	 public function setindex($indexing)
	 {
	 	$this->details['Index'] = $indexing;
	 }

	 public function getindex()
	 {
	 	return $this->details;
	 }

}

 	$ob1=new Student_details();

 	$value1=$ob1->getindex();

 	$ob1->setter('Pranav','M');

 	$ob1->setter('kaustab','M');

 	$ob1->setter('Shubhosree','F');

 	$ob1->setter('Sakshi','F');

 	$ob1->setter('Mouli','F');

 	$ob1->setter('Asit','M');

 	$ob1->setter('Jaswin','M');

 	$ob1->setter('Shubham','M');

 	$ob1->setter('Rishav','M');

 	$ob1->setter('Abhinav','M');

 	$value=$ob1->get();
 	// print_r($value);


function checkFemale()
{
  foreach ($ob1->details as $k => $v) {
    foreach ($v as $key => $value) {
      if ($value=='F') {
        if($ob1->details[$k-1][$key]=='F' && $ob1->details[$k+1][$key]=='F')
         {
           // $tempName=$ob1->details[$k]['Name'];
           // $tempGender=$ob1->details[$k]['Gender'];
           // $ob1->details[$k]['Name']=$ob1->details[$k+3]['Name'];
           // $ob1->details[$k]['Gender']= $ob1->details[$k+3]['Gender'];
           // $ob1->details[$k+3]['Name']=$tempName;
           // $ob1->details[$k+3]['Gender']=$tempGender;
           
        }
      }
    }
  }
}
  //
   	print_r($ob1->details);
 ?>
