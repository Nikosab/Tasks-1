<?php

class NumberSquarePrinter {
    public function printNumberSquare($startNumber, $endNumber) {
        for ($currentNumber = $startNumber; $currentNumber <= $endNumber; $currentNumber++) {
            $this->printSquareRow($currentNumber, $endNumber);
            echo PHP_EOL;
        }
    }

    private function printSquareRow($startNumber, $endNumber) {
        for ($currentNumber = $startNumber; $currentNumber <= $endNumber; $currentNumber++) {
            echo $currentNumber;
        }
        for ($currentNumber = 1; $currentNumber < $startNumber; $currentNumber++) {
            echo $currentNumber;
        }
    }
}

echo "Enter min number: ";
$minNumber = intval(readline());
echo "Enter max number: ";
$maxNumber = intval(readline());

$numberSquarePrinter = new NumberSquarePrinter();
$numberSquarePrinter->printNumberSquare($minNumber, $maxNumber);