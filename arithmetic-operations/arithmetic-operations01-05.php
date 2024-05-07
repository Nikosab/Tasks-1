<?php

// exercise 1
function checkIfFifteen($num1, $num2) {
    if ($num1 == 15 || $num2 == 15 || $num1 + $num2 == 15 || abs($num1 - $num2) == 15) {
        return true;
    } else {
        return false;
    }
}

$number1 = 10;
$number2 = 5;

if (checkIfFifteen($number1, $number2)) {
    echo "True\n";
} else {
    echo "False\n";
}

// exercise 2
function checkOddEven($number) {
    if ($number % 2 == 0) {
        echo "Even number\n";
    } else {
        echo "Odd number\n";
    }
}

$number = 6;
checkOddEven($number);

echo "Bye!\n";

// exercise 3
$lower_bound = 1;
$upper_bound = 100;

$sum = 0;
for ($i = $lower_bound; $i <= $upper_bound; $i++) {
    $sum += $i;
}

$count = $upper_bound - $lower_bound + 1;
$average = $sum / $count;

echo "The sum of $lower_bound to $upper_bound is $sum\n";
echo "The average is $average\n";

// exercise 4
$product = 1;

for ($i = 1; $i <= 10; $i++) {
    $product *= $i;
}

echo "$product\n";

// exercise 5
echo "I'm thinking of a number between 1-100. Try to guess it.\n";

$attempts = 0;

$max_attempts = 5;

while ($attempts < $max_attempts) {

    $number = rand(1, 100);

    $input = readline("> ");

    if ($input === "exit") {
        echo "Goodbye!\n";
        exit;
    }

    if (!is_numeric($input)) {
        echo "Please enter a valid number or type 'exit' to quit.\n";
        continue;
    }

    $guess = intval($input);

    if ($guess === $number) {
        echo "You guessed it! What are the odds?!?\n";
        exit;
    } elseif ($guess < $number) {
        echo "Sorry, you are too low. I was thinking of $number.\n";
    } else {
        echo "Sorry, you are too high. I was thinking of $number.\n";
    }

    $attempts++;
}

if ($attempts === $max_attempts) {
    echo "You've reached the maximum number of attempts. The number I was thinking of was $number.\n";
}