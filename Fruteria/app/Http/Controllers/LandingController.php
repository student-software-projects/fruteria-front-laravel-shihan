<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

$view = view('landing.index');

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function acercade()
    {
        return view('landing.acercade');
    }

    public function domicilio()
    {
        return view('landing.domicilio');
    }
}
