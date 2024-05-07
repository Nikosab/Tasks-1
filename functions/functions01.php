<?php
function addCodelex() {
    $input = readline('Enter a string: ');
    return $input . " codelex";
}

$output = addCodelex();
print $output;