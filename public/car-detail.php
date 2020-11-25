<?php
require_once '../vendor/autoload.php';
$controller = new \HofUniversityICW\CarRental\Application\CarController();
echo $controller->detailAction($_GET['car']);
