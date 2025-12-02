<?php

namespace App\Http\Controllers\Frontend;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function index()
    {
        return Inertia::render('frontend/Home');
    }
    
    public function about()
    {
        return Inertia::render('frontend/About');
    }

    public function service()
    {
        return Inertia::render('frontend/Service');
    }

    public function pricing()
    {
        return Inertia::render('frontend/Pricing');
    }

    public function contact()
    {
        return Inertia::render('frontend/Contact');
    }
}
