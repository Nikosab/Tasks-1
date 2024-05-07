<?php
function calculateBMI($weight, $height) {
    $bmi = $weight / ($height * $height);

    echo "BMI: $bmi\n";

    if ($bmi < 18.5) {
        echo "Underweight\n";
    } elseif ($bmi >= 18.5 && $bmi <= 25) {
        echo "Optimal weight\n";
    } else {
        echo "Overweight\n";
    }
}

function main() {
    $weight_kg = 70;

    $height_m = 1.75;

    calculateBMI($weight_kg, $height_m);
}

main();