<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . '/../vendor/autoload.php';

$request = Request::createFromGlobals();
$response = new Response();

$map = [
    '/hello' => 'pages/',
    '/bye' => 'pages/',
    '/about' => 'pages/about'
];

$path = $request->getPathInfo();

if (in_array($path, array_keys($map))) {
    ob_start();
    include __DIR__ . '/../src/' . $map[$path] . $path . '.php';
    $response->setContent(ob_get_clean());
} else {
    $response->setStatusCode(404)->setContent('Page not found');
}

$response->send();
