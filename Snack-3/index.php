<?php 

$array1 = ['a', 'b', 'c', 'd', 'e'];
$array2 = [1, 2, 3, 4, 5];

function fuseArray($array1, $array2) {
    $fusedArray = [];
    for ($i = 0; $i < count($array1); $i++) {
        $fusedArray[] = $array1[$i];
        $fusedArray[] = $array2[$i];
    }
    return $fusedArray;
}

var_dump(fuseArray($array1, $array2))
?>