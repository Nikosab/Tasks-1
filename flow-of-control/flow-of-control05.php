<?php

function convertToDigitsIf($input)
{
    $result = '';
    $input = strtoupper($input);
    $mapping = [
        'ABC' => '2',
        'DEF' => '3',
        'GHI' => '4',
        'JKL' => '5',
        'MNO' => '6',
        'PQRS' => '7',
        'TUV' => '8',
        'WXYZ' => '9'
    ];
    
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        $found = false;
        
        foreach ($mapping as $letters => $digit) {
            if (strpos($letters, $char) !== false) {
                $result .= $digit;
                $found = true;
                break;
            }
        }
        
        if (!$found) {
            $result .= $char;
        }
    }
    
    return $result;
}

function convertToDigitsSwitch($input)
{
    $result = '';
    $input = strtoupper($input);
    
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        
        switch ($char) {
            case 'A':
            case 'B':
            case 'C':
                $result .= '2';
                break;
            case 'D':
            case 'E':
            case 'F':
                $result .= '3';
                break;
            case 'G':
            case 'H':
            case 'I':
                $result .= '4';
                break;
            case 'J':
            case 'K':
            case 'L':
                $result .= '5';
                break;
            case 'M':
            case 'N':
            case 'O':
                $result .= '6';
                break;
            case 'P':
            case 'Q':
            case 'R':
            case 'S':
                $result .= '7';
                break;
            case 'T':
            case 'U':
            case 'V':
                $result .= '8';
                break;
            case 'W':
            case 'X':
            case 'Y':
            case 'Z':
                $result .= '9';
                break;
            default:
                $result .= $char;
        }
    }
    
    return $result;
}

$input = readline("Enter a string: ");

echo "Using nested if: " . convertToDigitsIf($input) . PHP_EOL;
echo "Using switch-case: " . convertToDigitsSwitch($input) . PHP_EOL;