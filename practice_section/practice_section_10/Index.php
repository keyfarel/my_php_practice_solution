<?php

require_once 'controller/DogController.php';
require_once 'model/Dog.php';
require_once 'lib/GetterSetterTrait.php';
require_once 'view/DogView.php';

use practice_section_10\controller\DogController;

$controller = new DogController();
$controller->showDogDetails();
