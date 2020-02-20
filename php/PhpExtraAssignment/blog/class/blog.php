<?php
namespace blog;
class blog{

  private $blog_title;
  private $blog_author;
  private $content;
  private $blog_date;
  private $user_id;
  private $img;

  function __construct($blog_title,$blog_author,$blog_date,$content,$user_id,$img){
    $this->blog_title=$blog_title;
    $this->blog_author=$blog_author;
    $this->blog_date=$blog_date;
    $this->content=$content;
    $this->user_id=$user_id;
    $this->img=$img;
  }

  function getblogtitle(){
    return $this->blog_title;
  }

  function getblogauthor(){
    return $this->blog_author;
  }

  function getblogdate(){
    return $this->blog_date;
  }

  function getcontent(){
    return $this->content;
  }

  function getuserid(){
    return $this->user_id;
  }

  function getimg(){
    return $this->img;
  }
}



 ?>
