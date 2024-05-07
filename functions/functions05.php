<?php

$fruits = [
    ["name" => "kiwifruit", "weight" => 10],
    ["name" => "banana", "weight" => 33],
    ["name" => "quince", "weight" => 5],
    ["name" => "pitaya", "weight" => 7]
];

function isOverweight($weight) {
    return $weight > 10;
}

$shippingCosts = [
    "overweight" => 2,
    "normal" => 1
];

foreach ($fruits as $fruit) {
    $cost = isOverweight($fruit["weight"]) ? $shippingCosts["overweight"] : $shippingCosts["normal"];
    echo "Fruit: {$fruit["name"]}, Weight: {$fruit["weight"]}kg, Shipping Cost: {$cost} euro\n";
}