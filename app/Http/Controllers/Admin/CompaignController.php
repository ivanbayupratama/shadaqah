<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompaignController extends Controller
{
    public function index()
    {
        $title = 'Compaign';

        return view('admin.compaign.index', compact('title'));
    }

    public function create()
    {
        $title = 'Compaign';

        return view('admin.compaign.create', compact('title'));
    }

    public function edit($id)
    {
        $title = 'Beranda';
        
        return view('admin.compaign.edit', compact('title'));
    }
}
