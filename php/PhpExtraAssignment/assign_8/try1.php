<?php

    include 'data.php';
    include 'college_details.php';
    include 'document_details.php';
    $clg_object=[];
    $doc_object=[];

    //college objects
    foreach($clg_data as $key => $value)
    {
        $obj=new college_details($value['id'],$value['name']);
        $clg_object[] = $obj;

    }

    //document objects
    foreach($doc_data as $key1 => $value1)
    {
        $obj1=new document_details($value1['name'],$value1['type'],$value1['college'],$value1['status']);
        $doc_object[]=$obj1;
        merge($value1['college'],$value1['name'],$value1['type'],$value1['status'],$key1);
    }

     function merge($c,$n,$t,$s,$key1)
     {
        global $clg_object;
        foreach($clg_object as $key => $value)
        {
            if(($c) == ($value->id))
            {
                $value->details[$key1]['doc-name']=$n;
                $value->details[$key1]['doc-type']=$t;
                if ($s)
                  $value->details[$key1]['doc-status']="Success";
                else {
                  $value->details[$key1]['doc-status']="Fail";
                }
            }
            if($c=='')
            {
                $value->details[$key1]['doc-name']=$n;
                $value->details[$key1]['doc-type']=$t;
                if ($s)
                  $value->details[$key1]['doc-status']="Success";
                else {
                  $value->details[$key1]['doc-status']="Fail";
                }
            }

            }
        }

foreach ($clg_object as $key => $value) {
  echo "College Id -".$value->id."<br>College Name -".$value->name."<br><br>";
  foreach ($value->details as $k => $v) {
    foreach ($v as $k1 => $v1) {
      echo $k1." -".$v1."<br>";
    }echo "<br><br>";
  }
}


        echo "<pre>";
        // print_r($clg_dt);
        // print_r($doc_dt);
        print_r($clg_object);
        // print_r($doc_object);
        echo "</pre>";
        // fun();
