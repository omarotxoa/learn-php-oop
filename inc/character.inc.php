<?php

class Character {
    // Properties
    private $name;
    private $class;
    private $race;

    // Methods
    public function setName($name) {
        $this->name = $name;
    }

    public function setClass($class) {
        $this->class = $class;
    }

    public function setRace($race) {
        $this->race = $race;
    }

    // View

    public function viewCharacter() {
        echo $this->name . ' ' . $this->class;
    }
}