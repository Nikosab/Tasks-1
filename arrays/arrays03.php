<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";
$searchValue = intval(readline());

if (in_array($searchValue, $numbers)) {
    echo "The array contains the value $searchValue.";
} else {
    echo "The array does not contain the value $searchValue.";
}