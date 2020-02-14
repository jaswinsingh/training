<?php
include 'vendor/autoload.php';
include 'data.php';
use detail\product;
$product_dt=[];
$category=[];
$product_check=[];

//OBJECT CREATION AND STORING IN ARRAY && INITIALIZING ARRAY
foreach ($p_details as $key => $value) {
  $ob=new product($value['pd'],$value['sp'],$value['sd'],$value['ct']);
  $product_dt[]=$ob;
  $category[$value['ct']]=0;
  $product_check[$value['pd']]='';
}

//SORTING AN OBJECT ARRAY ON PD BASIS
usort($product_dt, 'cmp');
function cmp($a,$b) {
    return strcmp($a->pd ,$b->pd);
}

//SORTING OBJECT ARRAY ON SD BASIS WHERE PD ARE SAME AND ADDING THE SP OF CONSECUTIVE PD
usort($product_dt, 'dat');
function dat($a,$b) {
  if($a->pd==$b->pd){
    if(strcmp($a->sd ,$b->sd)==-1){
    $b->sp+=$a->sp;
  }
    elseif(strcmp($a->sd ,$b->sd)==1) {
    $a->sp+=$b->sp;
  }
    return strcmp($a->sd ,$b->sd);
  }
}

//STORING COUNT OF SAME CATEGORY
foreach ($p_details as $key => $value) {
  $category[$value['ct']]+=1;
}


foreach ($category as $key => $value) {
  productCategory($key,$value);
}
//FUNCTION FOR ADDING  CATEGORY AND PRODUCT  FOR SAME CATEGORY
function productCategory($c,$n){
    global $product_dt,$product_check;
    $count=1;
    foreach ($product_dt as $key => $value) {
      if($value->ct==$c && $n>0){
        if ($product_check[$value->pd]==0) {
        $value->ct=$c."-P".$count;
        $product_check[$value->pd]=$count;
        $count+=1;
        $n-=1;
      }
        else {
          $tempCount=$product_check[$value->pd];
          $value->ct=$c."-P".$tempCount;
            $n-=1;
        }
      }
    }
}


echo "<pre>";
// print_r($ob);
print_r($product_dt);
// print_r($product_check);
// print_r($category);
// print_r($p_details);
echo "</pre>";


 ?>
