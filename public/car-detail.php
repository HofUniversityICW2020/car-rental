<?php
require_once '../vendor/autoload.php';
$car = \HofUniversityICW\CarRental\Domain\Car::findById($_GET['car']);

$view = new \HofUniversityICW\CarRental\Presentation\TemplateView();
$view->assignVariables([
    'car' => $car,
    'origin' => $_GET['origin'],
    'pageTitle' => $car->model->name,
    'currentNavItem' => 'car-list',
]);
echo $view->render('car-detail');
