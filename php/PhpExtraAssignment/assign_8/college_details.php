<?php
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

}

 ?>
