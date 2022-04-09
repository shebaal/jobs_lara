<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobListingController extends Controller
{
    public function joblisting()
    {
        return view('web/job_listing');
    }
}
