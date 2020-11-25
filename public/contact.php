<?php
require_once '../vendor/autoload.php';
$view = new \HofUniversityICW\CarRental\Presentation\TemplateView();
$view->assignVariables([
    'pageTitle' => 'Contact',
    'currentNavItem' => 'contact',
]);
echo $view->render('contact');
