<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;



$routes = new RouteCollection;

$routes->add('hello', new Route('/hello/{name}', [
    'name' => 'World',
    '_controller' => [new App\Controllers\GreetingController, 'hello']
]));
$routes->add('bye', new Route('/bye', [

    '_controller' => [new App\Controllers\GreetingController, 'bye']
]));
$routes->add('about', new Route('/a-propos', [

    '_controller' => [new App\Controllers\PageController, 'about']
]));

return $routes;
