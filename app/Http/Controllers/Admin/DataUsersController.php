<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class DataUsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        $title = 'Data Users';
        return view('admin.dataUsers.index', compact('users', 'title'));
    }

    public function exportPdf()
    {
        $users = User::all();
        $pdf = PDF::loadView('admin.dataUsers.pdf', compact('users'));
        return $pdf->download('data_users.pdf');
    }
}
