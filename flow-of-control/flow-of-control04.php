<?php

$dayNumber = intval(readline("Enter the day number (1-7): "));

if ($dayNumber >= 1 && $dayNumber <= 7) {
    if ($dayNumber == 1) {
        echo "Monday\n";
    } elseif ($dayNumber == 2) {
        echo "Tuesday\n";
    } elseif ($dayNumber == 3) {
        echo "Wednesday\n";
    } elseif ($dayNumber == 4) {
        echo "Thursday\n";
    } elseif ($dayNumber == 5) {
        echo "Friday\n";
    } elseif ($dayNumber == 6) {
        echo "Saturday\n";
    } elseif ($dayNumber == 7) {
        echo "Sunday\n";
    }
} else {
    echo "Not a valid day\n";
}

$dayNumber2 = intval(readline("Enter the day number (1-7): "));

switch ($dayNumber2) {
    case 1:
        echo "Monday\n";
        break;
    case 2:
        echo "Tuesday\n";
        break;
    case 3:
        echo "Wednesday\n";
        break;
    case 4:
        echo "Thursday\n";
        break;
    case 5:
        echo "Friday\n";
        break;
    case 6:
        echo "Saturday\n";
        break;
    case 7:
        echo "Sunday\n";
        break;
    default:
        echo "Not a valid day\n";
        break;
}