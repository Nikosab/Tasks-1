<?php

// exercise 1
$numbers = array(11, 22, 33);

$totalSum = array_sum($numbers);

echo "The total sum: " . $totalSum;

// exercise 2
$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];

var_dump($person["name"]);
var_dump($person["surname"]);
var_dump($person["age"]);

// exercise 3
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;

var_dump($person->name);
var_dump($person->surname);
var_dump($person->age);

// exercise 4
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

$concatenatedValue = $items[0][1]["name"] . " " . $items[0][1]["surname"] . " " . $items[0][1]["age"];

echo $concatenatedValue;

// exercise 5
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

$concatenatedValue = $items[0][0]["name"] . " & " . $items[0][1]["name"] . " " . $items[0][1]["surname"] . "`s";

echo $concatenatedValue;