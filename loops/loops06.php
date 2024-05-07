<?php

class AsciiFigure {
    public static function draw($size) {
        for ($row = 0; $row < $size; $row++) {
            $slashes = ($size - 1 - $row) * 4;
            $stars = $row * 8;

            for ($i = 0; $i < $slashes; $i++) {
                echo "/";
            }

            for ($i = 0; $i < $stars; $i++) {
                echo "*";
            }

            for ($i = 0; $i < $slashes; $i++) {
                echo "\\";
            }
            echo "\n";
        }
    }
}

$newSize = readline("Enter the size of a shape: ");
AsciiFigure::draw($newSize);