<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $title = 'Beranda';

        return view('admin.beranda.index', compact('title'));
    }
}
