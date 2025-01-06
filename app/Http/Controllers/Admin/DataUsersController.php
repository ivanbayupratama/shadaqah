<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DataUsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        $title = 'Data Users';
        return view('admin.dataUsers.index', compact('users', 'title'));
    }
}
