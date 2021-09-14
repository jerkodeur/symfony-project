<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GreetingController
{

    public function hello(string $name, string $_route): Response
    {
        ob_start();

        include __DIR__ . '/../pages/' . $_route . '.php';

        return new Response(ob_get_clean());
    }

    public function bye(string $_route): Response
    {
        ob_start();

        include __DIR__ . '/../pages/' . $_route . '.php';

        return new Response(ob_get_clean());
    }
}
