<?php

$array = [77, 88, 99, 2.2, "codefruit"];

function doubleInteger($number) {
    return is_int($number) ? $number * 2 : $number;
}

$count = count($array);

for ($i = 0; $i < $count; $i++) {
    echo doubleInteger($array[$i]) . "\n";
}
