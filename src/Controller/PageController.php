<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PageController
{
    public function about(Request $request): Response
    {
        $route = $request->attributes->get('_route');

        ob_start();
        include __DIR__ . '/../pages/' . $route . '.php';

        return new Response(ob_get_clean());
    }
}
