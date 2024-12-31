<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    public function showDonationForm(Campaign $campaign)
    {
        $campaign->image = asset('assets/banner/banner1.jpg');
        return view('donationForm', compact('campaign'));
    }

    public function donate(Request $request, Campaign $campaign)
    {
        $request->validate([
            'amount' => 'required|numeric|min:10000', // Set minimal donasi ke 10000
        ]);

        if (Auth::check()) {
            $user = Auth::user();
            $campaign->donations()->create([
                'user_id' => $user->id,
                'amount' => $request->amount,
            ]);
        } else {
            $campaign->donations()->create([
                'user_id' => null,
                'amount' => $request->amount,
            ]);
        }

        $campaign->collected_amount += $request->amount;
        $campaign->save();

        return redirect()->route('home')->with('success', 'Terima kasih atas donasi Anda!');
    }
}
