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
    $resultat = $urlMatcher->match($request->getPathInfo());
    $request->attributes->add($resultat);

    [$className, $methodName] = explode('@', $resultat['_controler']);

    $response = call_user_func([new $className, $methodName], $request);
} catch (ResourceNotFoundException $e) {
    $response = new Response('La page recherchée n\'a pas été trouvée !', 404);
} catch (Exception $e) {
    $response = new Response('Une erreur est survenue au niveau du serveur', 500);
}

$response->send();
