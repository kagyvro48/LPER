<?php

namespace App\Http\Controllers\Freelancing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home()
    {
        return view('freelancing.home');
    }

    function postJob(Request $request)
    {
        return view('freelancing.post-job');
    }
}
