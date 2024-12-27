<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayananPenggunaController extends Controller
{
    public function index()
    {
        $title = 'Layanan Pengguna';

        return view('admin.layanan-pengguna.index', compact('title'));
    }
}
