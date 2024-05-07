<?php

echo "Input number of terms: ";
$terms = readline();

if (!ctype_digit($terms) || $terms <= 0) {
    echo "Number of terms should be a positive integer.\n";
    exit;
}

echo "The result of multiplying i with itself $terms times:\n";

for ($i = 1; $i <= $terms; $i++) {
    $result = $i;
    for ($power = 1; $power < $terms; $power++) {
        $result *= $i;
    }
    echo "$i ^ $terms = $result\n";
}