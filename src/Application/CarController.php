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
            'origin' => 'cars',
            'pageTitle' => 'Car List',
            'currentNavItem' => 'cars',
        ]);
        return $view->render('car-list');
    }

    public function detailAction(int $car, string $origin): string
    {
        $car = Car::findById($car);
        $view = new TemplateView();
        $view->assignVariables([
            'car' => $car,
            'origin' => $origin,
            'pageTitle' => $car->model->name,
            'currentNavItem' => 'cars',
        ]);
        return $view->render('car-detail');
    }
}
