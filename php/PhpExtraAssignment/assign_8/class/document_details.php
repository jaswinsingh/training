<?php
namespace doc;
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

}


 ?>
