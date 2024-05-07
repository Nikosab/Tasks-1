<?php

echo "Please enter first word: ";
$first_word = readline();

echo "Please enter second word: ";
$second_word = readline();

$total_length = 30;
$dots_count = $total_length - strlen($first_word) - strlen($second_word);

echo $first_word;

for ($i = 0; $i < $dots_count; $i++) {
    echo ".";
}

echo $second_word . "\n";