<?php

class TicTacToe
{
    private $board;
    private $currentPlayer;

    public function __construct()
    {
        // Инициализируем игровое поле и начального игрока
        $this->board = [
            [' ', ' ', ' '],
            [' ', ' ', ' '],
            [' ', ' ', ' '],
        ];
        $this->currentPlayer = 'X';
    }

    public function displayBoard()
    {
        // Вывод игрового поля на экран
        echo "  0 1 2\n";
        for ($i = 0; $i < 3; $i++) {
            echo "$i ";
            for ($j = 0; $j < 3; $j++) {
                echo $this->board[$i][$j] . " ";
            }
            echo "\n";
        }
    }

    public function makeMove($row, $col)
    {
        // Проверка на корректность хода и установка фигуры игрока
        if ($row >= 0 && $row < 3 && $col >= 0 && $col < 3 && $this->board[$row][$col] == ' ') {
            $this->board[$row][$col] = $this->currentPlayer;
            return true;
        }
        return false;
    }

    public function switchPlayer()
    {
        // Переключение игрока после каждого хода
        $this->currentPlayer = ($this->currentPlayer == 'X') ? 'O' : 'X';
    }

    public function checkWinner()
    {
        // Проверка на победителя по строкам и столбцам
        for ($i = 0; $i < 3; $i++) {
            if ($this->board[$i][0] != ' ' && $this->board[$i][0] == $this->board[$i][1] && $this->board[$i][1] == $this->board[$i][2]) {
                return $this->board[$i][0];
            }
            if ($this->board[0][$i] != ' ' && $this->board[0][$i] == $this->board[1][$i] && $this->board[1][$i] == $this->board[2][$i]) {
                return $this->board[0][$i];
            }
        }

        // Проверка на победителя по диагоналям
        if ($this->board[0][0] != ' ' && $this->board[0][0] == $this->board[1][1] && $this->board[1][1] == $this->board[2][2]) {
            return $this->board[0][0];
        }
        if ($this->board[0][2] != ' ' && $this->board[0][2] == $this->board[1][1] && $this->board[1][1] == $this->board[2][0]) {
            return $this->board[0][2];
        }

        return null;
    }

    public function checkTie()
    {
        // Проверка на ничью
        foreach ($this->board as $row) {
            foreach ($row as $cell) {
                if ($cell == ' ') {
                    return false;
                }
            }
        }
        return true;
    }

    public function play()
    {
        // Основной игровой цикл
        while (true) {
            $this->displayBoard();

            echo "Player {$this->currentPlayer}'s turn. Enter row and column (0 1): ";
            list($row, $col) = explode(' ', readline());
            $row = intval($row);
            $col = intval($col);

            if ($this->makeMove($row, $col)) {
                $winner = $this->checkWinner();
                if ($winner !== null) {
                    $this->displayBoard();
                    echo "Player {$winner} wins!\n";
                    break;
                }

                if ($this->checkTie()) {
                    $this->displayBoard();
                    echo "It's a tie!\n";
                    break;
                }

                $this->switchPlayer();
            } else {
                echo "Invalid move. Try again.\n";
            }
        }
    }
}

$game = new TicTacToe();
$game->play();