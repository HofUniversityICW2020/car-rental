<?php
require_once '../vendor/autoload.php';
$dispatcher = new \HofUniversityICW\CarRental\Application\Dispatcher();
echo $dispatcher->dispatch(
    $_SERVER['REQUEST_METHOD'], // GET, POST, PUT, DELETE, ...
    $_SERVER['REQUEST_URI'] // /car/1234
) ?? '';
