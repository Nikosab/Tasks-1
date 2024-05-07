<?php

class Person {
    public $name;
    public $surname;
    public $age;

    public function __construct($name, $surname, $age) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    public function isAdult() {
        return $this->age >= 18;
    }
}

$persons = [
    new Person("Algirdas", "Mikalauskas", 22),
    new Person("Arthas", "Menethil", 17),
    new Person("Terenas", "Menethil", 50)
];

foreach ($persons as $person) {
    if ($person->isAdult()) {
        echo "{$person->name} {$person->surname} has reached the age of 18.\n";
    } else {
        echo "{$person->name} {$person->surname} has not reached the age of 18 yet.\n";
    }
}