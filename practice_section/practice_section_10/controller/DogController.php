<?php

namespace practice_section_10\controller;

use practice_section_10\model\Dog;
use practice_section_10\view\DogView;

class DogController
{
    private $dog;

    public function __construct()
    {
        // Buat instance objek Dog
        $this->dog = new Dog("Brown", "Black", "White");
    }

    public function showDogDetails()
    {
        $view = new DogView();
        $view->render($this->dog);
    }
}
