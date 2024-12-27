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
}
