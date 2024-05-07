<?php

$array1 = [];

for ($i = 0; $i < 10; $i++) {
    $array1[$i] = rand(1, 100);
}

$array2 = $array1;

$array1[count($array1) - 1] = -7;

echo "Array 1: ";
foreach ($array1 as $value) {
    echo $value . " ";
}

echo "\nArray 2: ";
foreach ($array2 as $value) {
    echo $value . " ";
}