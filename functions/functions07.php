<?php

class Person {
    public $name;
    public $licenses;
    public $cash;

    public function __construct($name, $licenses, $cash) {
        $this->name = $name;
        $this->licenses = $licenses;
        $this->cash = $cash;
    }

    public function canAffordGun($gun) {
        return $this->cash >= $gun->price;
    }

    public function hasRequiredLicense($gun) {
        return count(array_intersect($this->licenses, $gun->license)) > 0;
    }
}

class Gun {
    public $name;
    public $license;
    public $price;

    public function __construct($name, $license, $price) {
        $this->name = $name;
        $this->license = $license;
        $this->price = $price;
    }
}

class Gunstore {
    public $guns;

    public function __construct($guns) {
        $this->guns = $guns;
    }

    public function findAffordableGuns($person) {
        $affordableGuns = [];
        foreach ($this->guns as $gun) {
            if ($person->canAffordGun($gun) && $person->hasRequiredLicense($gun)) {
                $affordableGuns[] = $gun;
            }
        }
        return $affordableGuns;
    }
}

$guns = [
    new Gun('Revolver', ['A'], 3000),
    new Gun('Grenade Launcher', ['B'], 7999),
    new Gun('Sniper Rifle', ['C'], 5000),
    new Gun('Submachine Gun', ['D'], 10500),
    new Gun('Basketgun', ['A'], 7499)
];

$store = new Gunstore($guns);
$person = new Person('Jānis Strēlnieks', ["A", "B", "C"], 7500);

echo "Available guns for {$person->name}:\n";
$affordableGuns = $store->findAffordableGuns($person);
if (!empty($affordableGuns)) {
    foreach ($affordableGuns as $gun) {
        echo "- {$gun->name} (Price: {$gun->price})\n";
    }
} else {
    echo "There are no guns available for {$person->name}.\n";
}