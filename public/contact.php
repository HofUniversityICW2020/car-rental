<?php
require_once '../vendor/autoload.php';
$controller = new \HofUniversityICW\CarRental\Application\ContactController();
echo $controller->indexAction();
