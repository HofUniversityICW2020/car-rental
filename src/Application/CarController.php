<?php
namespace HofUniversityICW\CarRental\Application;

use HofUniversityICW\CarRental\Domain\Car;
use HofUniversityICW\CarRental\Presentation\TemplateView;

class CarController
{
    public function listAction(): string
    {
        $cars = Car::findAll();

        $view = new TemplateView();
        $view->assignVariables([
            'cars' => $cars,
            'origin' => 'car-list',
            'pageTitle' => 'Car List',
            'currentNavItem' => 'car-list',
        ]);
        return $view->render('car-list');
    }

    public function detailAction(int $car): string
    {
        $car = Car::findById($car);
        $view = new TemplateView();
        $view->assignVariables([
            'car' => $car,
            'origin' => $_GET['origin'],
            'pageTitle' => $car->model->name,
            'currentNavItem' => 'car-list',
        ]);
        return $view->render('car-detail');
    }
}
