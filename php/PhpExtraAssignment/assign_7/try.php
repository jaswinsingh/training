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

		$ob1->setter('Shubhosree','F');

 	$ob1->setter('kaustab','M');



	$ob1->setter('Asit','M');
 	$ob1->setter('Sakshi','F');




 	$ob1->setter('Jaswin','M');

 	$ob1->setter('Shubham','M');


 	$ob1->setter('Rishav','M');
		$ob1->setter('Mouli','F');

 	$ob1->setter('Abhinav','M');

 	$value=$ob1->get();
 	// print_r($value);


  foreach ($ob1->details as $k => $v) {
    foreach ($v as $key => $value) {
      if ($value=='F')
			{
        if($ob1->details[$k-1][$key]=='F' && $ob1->details[$k+1][$key]=='F')
         {
					 // echo "string";
           // $tempName=$ob1->details[$k]['Name'];
           // $tempGender=$ob1->details[$k]['Gender'];
           // $ob1->details[$k]['Name']=$ob1->details[$k+3]['Name'];
           // $ob1->details[$k]['Gender']= $ob1->details[$k+3]['Gender'];
           // $ob1->details[$k+3]['Name']=$tempName;
           // $ob1->details[$k+3]['Gender']=$tempGender;

					 demo($k,$key,$value,$ob1);

        }
				if(($ob1->details[$k+1][$key]=='F')||($ob1->details[$k-1][$key]=='F'))
         {

					// $tempName=$ob1->details[$k]['Name'];
	 				// $tempGender=$ob1->details[$k]['Gender'];
	 				// $ob1->details[$k]['Name']=$ob1->details[$k+3]['Name'];
	 				// $ob1->details[$k]['Gender']= $ob1->details[$k+3]['Gender'];
	 				// $ob1->details[$k+3]['Name']=$tempName;
	 				// $ob1->details[$k+3]['Gender']=$tempGender;
					demo($k,$key,$value,$ob1);

        }
			 }
      }
    }



function demo($k,$key,$value,&$ob1)
{

	$random_keys=array_rand($ob1->details);
		echo "<br> upper ".$random_keys."<br>";

	if($ob1->details[$random_keys][$key]=='F')
	demo($k,$key,$value,$ob1);

	if(($random_keys>0) && ($ob1->details[$random_keys-1][$key]=='F'))
	{
			echo "minus".($random_keys-1);
			demo($k,$key,$value,$ob1);
	}
	if (($random_keys<(count($ob1->details)-1))&&($ob1->details[$random_keys+1][$key]=='F')) {
		echo "add ".($random_keys+1);
		demo($k,$key,$value,$ob1);
	}

	$tempName=$ob1->details[$k]['Name'];
	$tempGender=$ob1->details[$k]['Gender'];
	$ob1->details[$k]['Name']=$ob1->details[$random_keys]['Name'];
	$ob1->details[$k]['Gender']= $ob1->details[$random_keys]['Gender'];
	$ob1->details[$random_keys]['Name']=$tempName;
	$ob1->details[$random_keys]['Gender']=$tempGender;


	// echo $ob1->details[$random_keys-1][$key];






}


 	print_r($ob1->details);
 ?>
