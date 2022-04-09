<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('web.home');
    }

    public function about()
    {
        return view('web.about-us');
    }

}
