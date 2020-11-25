<?php
namespace HofUniversityICW\CarRental\Application;

use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Dispatcher
{
    private $dispatcher;

    public function __construct()
    {
        $this->dispatcher = simpleDispatcher(function(RouteCollector $r) {
            $r->addRoute('GET', '/', [HomeController::class, 'indexAction']);
            $r->addRoute('GET', '/index', [HomeController::class, 'indexAction']);
            $r->addRoute('GET', '/cars', [CarController::class, 'listAction']);
            $r->addRoute('GET', '/car/{id:\d+}', [CarController::class, 'detailAction']);
            $r->addRoute('GET', '/car/{id:\d+}/{origin:\w+}', [CarController::class, 'detailAction']);
            $r->addRoute('GET', '/contact', [ContactController::class, 'indexAction']);
        });
    }

    public function dispatch(string $method, string $uri): ?string
    {
        // Strip query string (?foo=bar) and decode URI
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);

        $routeInfo = $this->dispatcher->dispatch($method, $uri);

        switch ($routeInfo[0]) {
            case \FastRoute\Dispatcher::NOT_FOUND:
                header('Location: /');
                // header('HTTP/1.0 404 Not Found');
                return null;
            case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                // $allowedMethods = $routeInfo[1];
                header('HTTP/1.0 405 Method Not Allowed');
                return null;
            case \FastRoute\Dispatcher::FOUND:
                $handler = $routeInfo[1];
                $vars = $routeInfo[2];
                $controllerName = $handler[0];
                $actionName = $handler[1];
                $controller = new $controllerName();
                return call_user_func_array(
                    [$controller, $actionName],
                    $vars
                );
        }
        return null;
    }
}
