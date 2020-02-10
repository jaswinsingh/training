<?php

    include 'data.php';
    class college_details
    {
        public $id;
        public $name;
        public $details=[];
        function __construct($id,$name)
        {
            $this->id=$id;
            $this->name=$name;
            $this->details=[];
        }
        function getid() {
            return $this->id;
        }
        function getname() {
            return $this->name;
        }
    }
    class document_details
    {
        public $name;
        public $type;
        public $college;
        public $status;
        function __construct($name,$type,$college,$sent)
        {
            $this->name=$name;
            $this->type=$type;
            $this->college=$college;
            $this->status=$sent;
        }
        function getname()
        {
            return $this->name;
        }
        function gettype()
        {
            return $this->type;
        }
        function getcollege()
        {
            return $this->college;
        }
        function getsent()
        {
            return $this->sent;
        }
    }

    $clg_dt=[];
    $doc_dt=[];
    //college objects
    foreach($clg_data as $key => $value)
    {
        $obj=new college_details($value['id'],$value['name']);
        $clg_dt[] = $obj;

    }
    //document objects
    foreach($doc_data as $key1 => $value1)
    {
        $obj1=new document_details($value1['name'],$value1['type'],$value1['college'],$value1['status']);
        $doc_dt[]=$obj1;

        merge($value1['college'],$value1['name'],$value1['type'],$value1['status'],$key1);
    }

     function merge($c,$n,$t,$s,$key1)
     {
        global $clg_dt;
        foreach($clg_dt as $key => $value)
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

        echo "<pre>";
        // //print_r($clg_dt);
        // //print_r($doc_dt);
        print_r($clg_dt);
        print_r($doc_dt);
        echo "</pre>";
        // fun();
