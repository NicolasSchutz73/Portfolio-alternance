<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function showHelloWorld()
    {
        return Inertia::render('Test');
    }
}
