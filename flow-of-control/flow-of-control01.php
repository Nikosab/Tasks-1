<?php

echo "Input the 1st number: ";
$number1 = readline();

echo "Input the 2nd number: ";
$number2 = readline();

echo "Input the 3rd number: ";
$number3 = readline();

$max = max($number1, $number2, $number3);
echo "The largest number is: $max\n";