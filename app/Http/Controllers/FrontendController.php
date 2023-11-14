<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('Frontend.home');
    }

    public function about()
    {
        return view('Frontend.about');
    }

    public function services()
    {
        return view('Frontend.services');
    }

    public function contact()
    {
        return view('Frontend.contact');
    }

    public function land()
    {
        return view('Frontend.land');
    }

    public function warehouse()
    {
        return view('Frontend.warehouse');
    }

    public function air()
    {
        return view('Frontend.air');
    }

    public function sea()
    {
        return view('Frontend.sea');
    }
}
