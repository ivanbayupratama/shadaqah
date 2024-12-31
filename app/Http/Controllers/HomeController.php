<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $campaigns = Campaign::all();
        $user = Auth::user();
        return view('home', compact('campaigns', 'user'));
    }
}
