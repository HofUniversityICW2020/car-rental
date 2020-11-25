<?php
require_once '../vendor/autoload.php';
$cars = \HofUniversityICW\CarRental\Domain\Car::findAll();

$view = new \HofUniversityICW\CarRental\Presentation\TemplateView();
$view->assignVariables([
    'cars' => $cars,
    'origin' => 'car-list',
    'pageTitle' => 'Car List',
    'currentNavItem' => 'car-list',
]);
echo $view->render('car-list');
