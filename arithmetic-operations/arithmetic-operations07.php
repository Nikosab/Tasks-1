<?php

$acceleration = -9.81; // (m/s²)
$time = 10;            // (s)
$initial_velocity = 0; // (m/s)
$initial_position = 0; // (m)

$final_position = 0.5 * $acceleration * pow($time, 2) + $initial_velocity * $time + $initial_position;

echo "The position of the object after falling for $time seconds: $final_position meters.";