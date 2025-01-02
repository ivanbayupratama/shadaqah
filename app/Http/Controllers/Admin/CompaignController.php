<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompaignController extends Controller
{
    public function index()
    {
        $title = 'Campaign';
        $campaigns = Campaign::all();
        return view('admin.compaign.index', compact('title', 'campaigns'));
    }

    public function create()
    {
        $title = 'Campaign';
        return view('admin.compaign.create', compact('title'));
    }

    public function edit($id)
    {
        $title = 'Campaign';
        $campaign = Campaign::findOrFail($id);
        return view('admin.compaign.edit', compact('title', 'campaign')); // Perbaiki compact
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'title'       => 'required',
        'description' => 'required',
        'image'       => 'image',
    ]);

    $campaign = Campaign::findOrFail($id);
    $campaign->title = $request->title;
    $campaign->description = $request->description;

    if ($request->hasFile('image')) {
        $campaign->image = $request->file('image')->store('campaign_images', 'public');
    }

    $campaign->save();

    return redirect('admin/compaign')->with('success', 'Campaign berhasil di update.');
    }

    public function delete($id)
    {
    $campaign = Campaign::findOrFail($id);
    $campaign->delete();

    return redirect('admin/compaign')->with('success', 'Campaign telah di hapus.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'image'         => 'required|image',
        ]);

        $campaign = new Campaign();
        $campaign->title = $request->title;
        $campaign->description = $request->description;
        $campaign->user_id = auth()->id(); // Menggunakan auth()->id() dengan benar


        if ($request->hasFile('image')) {
            $campaign->image = $request->file('image')->store('campaign_images', 'public');
        }

        $campaign->save();

        return redirect('admin/compaign')->with('success', 'Campaign berhasil dibuat.');
    }
}
