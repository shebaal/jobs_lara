<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class makeCvController extends Controller
{
    public function makecv()
    {
        return view('web/makecv');
    }
}
