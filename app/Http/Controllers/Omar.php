<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class Omar extends Controller
{
    public function indexAction()
    {
        return Inertia::render('Home');

    }
}
