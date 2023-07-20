<?php

class Person {
    private $first = "Omar";
    private $last = "Ochoa";
    private $age = "33";

    public function owner() {
        $a = $this->last;
        return $a;
    }
}

class Pet extends Person{
    public function owner() {
        $a = $this->first;
        return $a;
    }
}