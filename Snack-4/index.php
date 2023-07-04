<?php 

$array = ['a', 'b', 'c', 'd', 'e'];
$a = -5;
$b = 7;

function getArrayValues($array, $startValue, $endValue) {
    $selecterArray = [];
    if($startValue < 0){
        $startValue = 0;
    }
    if($endValue >= count($array)){
        $endValue = count($array) - 1;
    }
    for ($i = $startValue; $i <= $endValue; $i++) {
        $selecterArray[] = $array[$i];
    }
    return $selecterArray;
}

var_dump(getArrayValues($array, $a, $b))
?>