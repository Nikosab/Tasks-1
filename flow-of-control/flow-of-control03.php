<?php

echo "Enter a positive integer: ";
$number = intval(readline());

if ($number <= 0) {
    echo "Please enter a positive integer.\n";
} else {
    $digitCount = strlen((string)$number);
    echo "The number of digits in $number is: $digitCount\n";
}