<?php 

$array = ['a', 'b', 'c', 'd', 'e'];
$a = 1;
$b = 3;

function getArrayValues($array, $startValue, $endValue) {
    $selecterArray = [];
    for ($i = $startValue; $i <= $endValue; $i++) {
        $selecterArray[] = $array[$i];
    }
    return $selecterArray;
}

var_dump(getArrayValues($array, $a, $b))
?>