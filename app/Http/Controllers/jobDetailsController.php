<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobDetailsController extends Controller
{
    public function jobdetails()
    {
        return view('web/job_details');
    }
}
