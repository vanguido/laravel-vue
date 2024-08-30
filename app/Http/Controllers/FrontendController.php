<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return Inertia::render('Frontend/Home');
    }

    public function about()
    {
        return Inertia::render('Frontend/About', [
            'title' => 'About',
        ]);
    }
}
