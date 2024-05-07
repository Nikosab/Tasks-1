<?php

class FizzBuzz {
    public function printFizzBuzz($max_value) {
        $count = 0;
        for ($i = 1; $i <= $max_value; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz ";
            } elseif ($i % 3 == 0) {
                echo "Fizz ";
            } elseif ($i % 5 == 0) {
                echo "Buzz ";
            } else {
                echo "$i ";
            }
            $count++;
        }
    }
}

$fizzbuzz = new FizzBuzz();

echo "Max value? ";
$max_value = intval(readline());

$fizzbuzz->printFizzBuzz($max_value);
