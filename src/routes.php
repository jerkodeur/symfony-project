<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('hello', new Route('/hello/{name}', [
    'name' => 'world',
    '_controler' => 'App\Controller\GreetingController@hello'
]));
$routes->add('bye', new Route('/bye', [
    '_controler' => 'App\Controller\GreetingController@bye'
]));
$routes->add(
    'about/about',
    new Route('/about', [
        '_controler' => 'App\Controller\PageController@about'
    ])
);

return $routes;
