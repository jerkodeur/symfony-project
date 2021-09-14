<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PageController
{
    public function about(string $_route): Response
    {

        ob_start();
        include __DIR__ . '/../pages/' . $_route . '.php';

        return new Response(ob_get_clean());
    }
}
