<?php

class HangmanGame
{
    private $wordList;
    private $word;
    private $guessedLetters;
    private $misses;
    private $maxTries;

    public function __construct($wordList, $maxTries)
    {
        $this->wordList = $wordList;
        $this->maxTries = $maxTries;
        $this->misses = '';
        $this->guessedLetters = array_fill(0, 26, false);
        $this->chooseWord();
    }

    private function chooseWord()
    {
        $this->word = $this->wordList[rand(0, count($this->wordList) - 1)];
    }

    private function displayWord()
    {
        $display = '';
        foreach (str_split($this->word) as $letter) {
            if ($this->guessedLetters[ord($letter) - ord('a')]) {
                $display .= $letter . ' ';
            } else {
                $display .= '_ ';
            }
        }
        return $display;
    }

    private function displayMisses()
    {
        return $this->misses;
    }

    private function guess($letter)
    {
        $this->guessedLetters[ord($letter) - ord('a')] = true;
        if (strpos($this->word, $letter) === false) {
            $this->misses .= $letter;
        }
    }

    private function allLettersGuessed()
    {
        foreach (str_split($this->word) as $letter) {
            if (!$this->guessedLetters[ord($letter) - ord('a')]) {
                return false;
            }
        }
        return true;
    }

    public function play()
    {
        echo "Word: " . $this->displayWord() . "\n";
        echo "Misses: " . $this->displayMisses() . "\n";

        $tries = 0;
        while ($tries < $this->maxTries) {
            echo "\nGuess: ";
            $letter = strtolower(readline());

            $this->guess($letter);

            echo "\n=-=-=-=-=-=-=-=-=-=-=-=-=-\n";
            echo "Word: " . $this->displayWord() . "\n";
            echo "Misses: " . $this->displayMisses() . "\n";

            if ($this->allLettersGuessed()) {
                echo "\nYOU GOT IT!\n";
                break;
            }

            $tries++;
        }

        if ($tries >= $this->maxTries) {
            echo "\nYou didn't guess the word. It was '{$this->word}'.\n";
        }
    }
}

$wordList = ["codelex", "hangman", "programming", "functions", "arrays"];
$maxTries = 8;

$game = new HangmanGame($wordList, $maxTries);
$game->play();