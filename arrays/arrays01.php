<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

echo "Original numeric array: ";
print_r($numbers);

sort($numbers);

echo "Sorted numeric array: ";
print_r($numbers);

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

echo "Original string array: ";
print_r($words);

sort($words);

echo "Sorted string array: ";
print_r($words);