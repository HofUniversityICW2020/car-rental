<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Support\Facades\Route;

class CarController extends Controller
{
    public function list()
    {
        $cars = Car::all();
        return view('car-list', [
            'cars' => $cars,
            'pageTitle' => 'Car List',
            'currentNavItem' => 'cars',
            'currentRouteName' => Route::currentRouteName(),
        ]);
    }

    public function detail(int $id, string $originRouteName = null)
    {
        $car = Car::find($id);
        return view('car-detail', [
            'car' => $car,
            'pageTitle' => $car->model->name,
            'currentNavItem' => 'cars',
            'originRouteName' => $originRouteName,
            'currentRouteName' => Route::currentRouteName(),
        ]);
    }
}
