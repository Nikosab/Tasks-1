<?php

// exercise 1
$intVariable = 10;
$stringVariable = "10";

if ($intVariable == $stringVariable) {
    echo "Variables are equal";
} else {
    echo "Variables are not equal";
}

// exercise 2
$number = 50;

if ($number >= 1 && $number <= 100) {
    echo "true";
} else {
    echo "false";
}

// exercise 3
$string = "hello";

if ($string == "hello") {
    echo "world";
}

// exercise 4
$value = 14;
$X = 10;
$Y = 20;

if ($value > $X && $value < $Y && $value % 2 == 0) {
    echo "Value ir lielāka par X, mazāka par Y un ir pāra skaitlis.";
} else {
    echo "Mainīgā vērtība neatbilst visām prasībām.";
}

// exercise 5
$number = 51;
$y = 11;
$z = 111;

if ($number >= $y && $number <= $z) {
    echo "correct";
} else {
    echo "incorrect";
}

// exercise 6
$plateNumber = "AB1234";

switch ($plateNumber) {
    case "AB1234":
        echo "This is your car.";
        break;
    default:
        echo "This is not your car.";
}

// exercise 7
$number = 73;

switch ($number) {
    case ($number < 50):
        echo "low";
        break;
    case ($number >= 50 && $number < 100):
        echo "medium";
        break;
    case ($number >= 100):
        echo "high";
        break;
}
