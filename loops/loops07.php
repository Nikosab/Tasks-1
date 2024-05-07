<?php

class RollTwoDice {
    public function rollUntilDesiredSum($desiredSum) {
        while (true) {
            $dice1 = rand(1, 6);
            $dice2 = rand(1, 6);
            $sum = $dice1 + $dice2;

            printf("%d and %d = %d\n", $dice1, $dice2, $sum);

            if ($sum == $desiredSum) {
                break;
            }
        }
    }
}

echo "Desired sum: ";
$desiredSum = intval(readline());

$rollTwoDice = new RollTwoDice();
$rollTwoDice->rollUntilDesiredSum($desiredSum);