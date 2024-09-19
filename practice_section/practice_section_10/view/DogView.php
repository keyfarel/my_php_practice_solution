<?php

namespace practice_section_10\view;

use practice_section_10\model\Dog;

class DogView
{
    public function render(Dog $dog)
    {
        include_once 'template/Header.php';
        echo "<div class='container mt-5'>";
        echo "<h1>Dog Details</h1>";
        $dog->showAll();
        echo "</div>";
        include_once 'template/Footer.php';
    }
}
