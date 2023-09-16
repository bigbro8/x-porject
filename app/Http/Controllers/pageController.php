<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\view;

class pageController extends Controller
{
    public function welcome():view
    {
        return view('index');
    }
}
