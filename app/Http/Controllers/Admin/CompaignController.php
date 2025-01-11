<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use Illuminate\Support\Facades\Cache;

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
            'title'       => 'required',
            'description' => 'required',
            'image'       => 'nullable|image',
            'target_amount' => 'required|numeric|min:100000',
        ], [
            'title.required' => 'Judul harus diisi.',
            'description.required' => 'Deskripsi harus diisi.',
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'target_amount.required' => 'Target dana harus diisi.',
            'target_amount.numeric' => 'Target dana harus berupa angka.',
            'target_amount.min' => 'Target dana minimal Rp100.000.',
        ]);

        $campaign->title = $request->title;
        $campaign->description = $request->description;
        $campaign->target_amount = $request->target_amount;

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
            'title'       => 'required',
            'description' => 'required',
            'image'       => 'required|image',
            'target_amount' => 'required|numeric|min:100000',
        ], [
            'title.required' => 'Judul harus diisi.',
            'description.required' => 'Deskripsi harus diisi.',
            'image.required' => 'Gambar harus diunggah.',
            'image.image' => 'File yang diunggah harus gambar.',
            'target_amount.required' => 'Target dana harus diisi.',
            'target_amount.numeric' => 'Target dana harus berupa angka.',
            'target_amount.min' => 'Target dana minimal Rp100.000.',
        ]);

        $campaign = new Campaign();
        $campaign->title = $request->title;
        $campaign->description = $request->description;
        $campaign->user_id = auth()->id();
        $campaign->target_amount = $request->target_amount;
        $campaign->collected_amount = 0.00;


        if ($request->hasFile('image')) {
            $campaign->image = $request->file('image')->store('campaign_images', 'public');
        }

        $campaign->save();

        return redirect('admin/compaign')->with('success', 'Campaign berhasil dibuat.');
    }

    public function exportPdf()
    {
        $campaigns = Campaign::all();
        $pdf = PDF::loadView('admin.compaign.pdf', compact('campaigns'));
        return $pdf->download('data_campaigns.pdf');
    }
}
