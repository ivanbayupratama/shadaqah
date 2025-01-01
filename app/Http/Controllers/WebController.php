<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function home() {
        return view('home');
    }
    function about()  {
        return view('about');
        
    }
    function contact()  {
        return view('contact');
        
    }
}
