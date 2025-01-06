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
        return view('admin.compaign.edit', compact('title', 'campaign'));
    }

    public function update(Request $request, $id)
    {
        $campaign = Campaign::findOrFail($id);

        $request->validate([
            'title'       => 'nullable|string',
            'description' => 'nullable|string',
            'image'       => 'image|nullable',
        ]);

        $campaign->title = $request->title ?: $campaign->title;
        $campaign->description = $request->description ?: $campaign->description;

        if ($request->hasFile('image')) {
            $campaign->image = $request->file('image')->store('campaign_images', 'public');
        }

        $campaign->save();

        return redirect('admin/compaign')->with('success', 'Campaign berhasil diubah.');
    }


    public function delete($id)
    {
        $campaign = Campaign::findOrFail($id);
        $campaign->delete();

        return redirect('admin/compaign')->with('success', 'Campaign telah di hapus.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $campaigns = Campaign::where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();

        return response()->json($campaigns);
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
