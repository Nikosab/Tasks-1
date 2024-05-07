<?php

function multiply($base, $multiplier) {
    return $base * $multiplier;
}

$base = readline('Enter a base integer: ');
$multiplier = readline('Enter a multiplier integer: ');

$result = multiply($base, $multiplier);
echo "Multiplication result: $result";