<?php
//課題3
function kakeru($arr) {
    $result = $arr[0];
    //$arrの0～4まで繰り返す
     for($i = 1; $i < count($arr); $i++ ){
         $result *= $arr[$i];
    }
    return $result ;
} 
$array = [2,3,4];
echo kakeru($array);