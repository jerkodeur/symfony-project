<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// chargement de l'autoloader de Symfony
require_once __DIR__ . '/vendor/autoload.php';

// AVANT
// $name = $_GET['name'] ?? 'world';
// APRES
$request = Request::createFromGlobals();
$name = $request->query->get('name', 'word');

$response = new Response();

// AVANT
// header('Content-type: text/html; charset=utf-8 ');
// APRES
$response->headers->set('Content-type', 'text/html; charset=utf-8');

$response->setContent(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));

$response->send();

// Protect from Internet security issue, XSS (Cross-Site Scripting)
// printf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8'));
