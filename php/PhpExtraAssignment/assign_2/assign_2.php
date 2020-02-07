
<?php



function CHECK_DIFF($array1, $array2){
    $result = array();
    foreach($array1 as $key => $val) {
        if(is_array($val) && isset($array2[$key])) {
            $tmp = CHECK_DIFF($val, $array2[$key]);
            if($tmp) {
                $result[$key] = $tmp;
            }
        }
        elseif(!isset($array2[$key])) {
            $result[$key] = null;
        }
        elseif($val !== $array2[$key]) {
            $result[$key] = $array2[$key];
        }

    }

    return $result;
}
$array2 = array("a" => "green", "b" => "brown", "100" => array("1"=>"red","orange"), "yellow");
$array1 = array("a" => "green","100"=>array("1"=>"red","violet"), "yellow","four");

print_r(CHECK_DIFF($array1, $array2));
 ?>
