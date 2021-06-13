<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DesktopController
{
    public function index():Response {
        return new Response('test');
    }
}
