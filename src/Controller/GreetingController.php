<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GreetingController
{

    public function hello(Request $request): Response
    {
        $name = $request->attributes->get('name');
        $route = $request->attributes->get('_route');
        ob_start();

        include __DIR__ . '/../pages/' . $route . '.php';

        return new Response(ob_get_clean());
    }

    public function bye(Request $request): Response
    {
        $route = $request->attributes->get('_route');
        ob_start();

        include __DIR__ . '/../pages/' . $route . '.php';

        return new Response(ob_get_clean());
    }
}
