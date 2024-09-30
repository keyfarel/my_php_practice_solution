<?php

namespace practice_section_10\model;

use practice_section_10\lib\GetterSetterTrait;

class Dog {
    private $eye_color;
    private $nose;
    private $color;

    public function __construct($eye_color, $nose, $color)
    {
        $this->eye_color = $eye_color;
        $this->nose = $nose;
        $this->color = $color;
    }

    public function showAll(){
        echo "Eye color: " . $this->eye_color . "<br>";
        echo "Nose : " . $this->nose . "<br>";
        echo "Color : " . $this->color . "<br>";
    }
}