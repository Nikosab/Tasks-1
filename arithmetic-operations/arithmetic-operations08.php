<?php

function calculatePay($basePay, $hoursWorked) {
    $minWage = 8.00;

    if ($basePay < $minWage) {
        echo "Error: Base pay cannot be less than the minimum wage.\n";
        return;
    }

    if ($hoursWorked > 60) {
        echo "Error: Hours worked cannot exceed 60 hours.\n";
        return;
    }

    $regularHours = min($hoursWorked, 40);
    $overtimeHours = max($hoursWorked - 40, 0);
    $totalPay = ($regularHours * $basePay) + ($overtimeHours * ($basePay * 1.5));

    echo "Total pay: $totalPay\n";
}

function main() {
    $employees = array(
        array("Employee 1", 7.50, 35),
        array("Employee 2", 8.20, 47),
        array("Employee 3", 10.00, 73)
    );

    foreach ($employees as $employee) {
        echo "Calculating pay for {$employee[0]}:\n";
        calculatePay($employee[1], $employee[2]);
        echo "\n";
    }
}

main();