<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
{
    public function index()
    {
        //ambil semua kampanye
        $campaigns = Campaign::all();
        return response()->json($campaigns);
    }

    public function store(Request $request)
    {
        //memvlidasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|string',
            'target' => 'required|numeric|min:10000',
        ]);

        //buat kampanye baru
        $campaign = Campaign::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'target' => $request->target,
            'collected' => 0,
            'creator' => Auth::user()->name,
        ]);

        return response()->json($campaign, 201);
    }
}
