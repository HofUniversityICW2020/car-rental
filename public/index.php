<?php
require_once '../vendor/autoload.php';
$controller = new \HofUniversityICW\CarRental\Application\HomeController();
echo $controller->indexAction();
