<?php

class Geometry
{
    static function circle(float $radius): string
    {
        return "Area of circle is: " . pi() * $radius * $radius;
    }

    static function rectangle(float $width, float $length): string
    {
        return "The area of rectangle is: " . $width * $length;
    }

    static function triangle(float $base, float $height): string
    {
        return "The area of a triangle is: " . $base * $height * 0.5;
    }
}

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
$choice = readline("Enter your choice (1-4) : ");

switch ($choice) {
    case 1:
        $radius = readline("Enter the radius of a circle: ");
        if ($radius <= 0) {
            echo "Error! Please enter a positive number";
        } else {
            echo Geometry::circle($radius);
        }
        break;
    case 2:
        $width = readline("Please enter the width of a rectangle: ");
        $length = readline("Please enter the length of a rectangle: ");
        if ($width <= 0 || $length <= 0) {
            echo "Error! Please enter a positive number";
        } else {
            echo Geometry::rectangle($width, $length);
        }
        break;
    case 3:
        $base = readline("Please enter the base of a triangle: ");
        $height = readline("Please enter the height of a triangle: ");
        if ($base <= 0 || $height <= 0) {
            echo "Error! Please enter a positive number";
        } else {
            echo Geometry::triangle($base, $height);
        }
        break;
    case 4:
        echo "Goodbye!";
        break;
    default:
        echo "Invalid choice. Please enter a number between 1 and 4";
}