<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

require_once __DIR__ . '/../vendor/autoload.php';

$request = Request::createFromGlobals();

$routes = require('../src/routes.php');

// Get the current http request infos needed by the symfony urlMatcher
$context = new RequestContext();
$context->fromRequest($request);

$urlMatcher = new UrlMatcher($routes, $context);

try {
    extract($urlMatcher->match($request->getPathInfo()));

    ob_start();
    include __DIR__ . '/../src/pages/' . $_route . '.php';
    $response = new Response(ob_get_clean());
} catch (ResourceNotFoundException $e) {
    $response = new Response('La page recherchée n\'a pas été trouvée !', 404);
} catch (Exception $e) {
    $response = new Response('Une erreur est survenue au niveau du serveur', 500);
}

$response->send();
