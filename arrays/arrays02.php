<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

$total = array_sum($numbers);

$count = count($numbers);

$average = $total / $count;

echo "Average value of the numbers: $average";