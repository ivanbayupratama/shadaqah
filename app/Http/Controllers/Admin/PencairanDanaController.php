<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PencairanDanaController extends Controller
{
    public function index()
    {
        $title = 'Pencairan Dana';

        return view('admin.pencairan-dana.index', compact('title'));
    }

    public function pencairan()
    {
        $title = 'Metode Pencairan';

        return view('admin.pencairan-dana.metode-pencairan', compact('title'));
    }
}
