<?php
function sum($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);

$string = "glay";
echo strlen($string);

$yukiya = "I ride bike";
$new_yukiya = str_replace("I","car",$yukiya);
echo $new_yukiya;

$fox = array(1,2,3,4,5);
echo count($fox);

$vein = array(5,89,6,32,44,91,3);
asort($vein);
print_r($vein);
