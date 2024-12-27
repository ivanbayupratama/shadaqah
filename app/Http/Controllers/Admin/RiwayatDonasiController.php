<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RiwayatDonasiController extends Controller
{
    public function index()
    {
        $title = 'Riwayat Donasi';

        return view('admin.riwayat-donasi.index', compact('title'));
    }
}
