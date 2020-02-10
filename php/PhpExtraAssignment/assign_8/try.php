  <?php
  class college{
    public $arr=[];
    function setter($id,$collegename) {

      $this->arr[]=[
        $id => $collegename,
      ];
    }

  }

  class document{
    public $doc=[];
    function setter($name,$type,$college,$sent) {
      $this->doc[]=[
        'doc_name' => $name,
        'doc_type'=> $type,
        'doc_college'=>$college,
        'sent'=>$sent,
      ];
    }
  }



  $ob1 =new college();
  $ob1->setter(101,"JIS");
  $ob1->setter(201,"GNIT");
  $ob1->setter(301,"TECHNO");
  $ob1->setter(401,"UEM");

  $ob2 =new document();
  $ob2->setter('Registration','A',1001,0);
  $ob2->setter('Result','C',2001,1);
  $ob2->setter('Attendence','AT',301,0);
  $ob2->setter('Address','z','',1);

  foreach ($ob1->arr as $key => $value)
  {
    foreach ($value as $k1 => $v1)
    {
      // echo $ob1->arr[$key][$k1];
      foreach ($ob2->doc as $k2 => $v2) {
        foreach ($v2 as $k3 => $v3) {
           // echo $ob2->doc[$k2]['doc_college'];


          if ($k1==$ob2->doc[$k2]['doc_college'])
            echo "J   ";
        }
      }


    }

  }



  // print_r($ob2->doc);
  // print_r($ob1->arr);
   ?>
