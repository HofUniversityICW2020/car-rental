<?php
namespace HofUniversityICW\CarRental\Application;

use HofUniversityICW\CarRental\Presentation\TemplateView;

class ContactController
{
    public function indexAction(): string
    {
        $view = new TemplateView();
        $view->assignVariables([
            'pageTitle' => 'Contact',
            'currentNavItem' => 'contact',
        ]);
        return $view->render('contact');
    }
}
