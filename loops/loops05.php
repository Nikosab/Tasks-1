<?php

class Piglet {
    public function playGame() {
        echo "Welcome to Piglet!\n";
        $total_score = 0;
        
        do {
            $roll = rand(1, 6);
            echo "You rolled a $roll!\n";
            
            if ($roll == 1) {
                $total_score = 0;
                break;
            }
            
            $total_score += $roll;
            
            echo "Roll again? ";
            $choice = readline();
        } while ($choice == 'yes' || $choice == 'y');
        
        echo "You got $total_score points.\n";
    }
}

$piglet = new Piglet();

$piglet->playGame();