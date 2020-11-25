<?php
require_once '../vendor/autoload.php';
$view = new \HofUniversityICW\CarRental\Presentation\TemplateView();
$view->assignVariables([
    'pageTitle' => 'Home',
    'currentNavItem' => 'index',
]);
echo $view->render('index');
