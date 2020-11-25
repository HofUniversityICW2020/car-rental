<?php
namespace HofUniversityICW\CarRental\Application;

use HofUniversityICW\CarRental\Presentation\TemplateView;

class HomeController
{
    public function indexAction(): string
    {
        $view = new TemplateView();
        $view->assignVariables([
            'pageTitle' => 'Home',
            'currentNavItem' => 'index',
        ]);
        return $view->render('index');
    }
}
