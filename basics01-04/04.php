<?php

// exercise 1
$numbers = range(1, 10);

foreach ($numbers as $number) {
    echo $number . " ";
}

// exercise 2
$numbers = [];

for ($i = 1; $i <= 10; $i++) {
    $numbers[] = $i;
}

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

// exercise 3
$x = 1;

while ($x < 10) {
    echo "codelex";
    
    $x++;
}

// exercise 4
$numbers = [1, 2, 3, 6, 9, 10, 12];

foreach ($numbers as $number) {
    if (is_int($number) && $number % 3 === 0) {
        echo $number . " ";
    }
}

// exercise 5
$people = [
    [
        "name" => "John",
        "surname" => "Doe",
        "age" => 24,
        "birthday" => "2000-01-01"
    ],
    [
        "name" => "Jane",
        "surname" => "Doe",
        "age" => 20,
        "birthday" => "2003-12-31"
    ]
];

foreach ($people as $person) {
    echo "Name: " . $person["name"] . " ";
    echo "Surname: " . $person["surname"] . " ";
    echo "Age: " . $person["age"] . " ";
    echo "Birthday: " . $person["birthday"] . " ";
}
