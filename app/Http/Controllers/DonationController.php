<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DonationController extends Controller
{
    /**
     * Display the donation form for a specific campaign.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\View\View
     */
    public function showDonationForm(Campaign $campaign)
    {
        Log::info('DonationController: showDonationForm: Campaign ID received: ' . $campaign->id);
        // Verify that it's passing model as it exists for specific request
        if (!$campaign) {
            Log::error('DonationController: showDonationForm: Campaign is NULL');
            return redirect('/')->with('error', 'Kampanye tidak ditemukan.');
        }
        return view('donationForm', compact('campaign'));
    }

    /**
     * Process the donation for a specific campaign.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\RedirectResponse
     */
    public function donate(Request $request, Campaign $campaign)
    {
        // log message for debugging and tracking
        Log::info('DonationController: donate: Campaign ID received: ' . $campaign->id);

        $request->validate([
            'amount' => 'required|numeric|min:10000',
        ]);

        // Check if $campaign object is correctly passed from routes
        if (!$campaign) {
            Log::error('DonationController: donate: Campaign is NULL');
            return redirect()->back()->with('error', 'Campaign not found');
        }

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

        // Redirect to homepage with success message
        return redirect()->route('home')->with('success', 'Terima kasih atas donasi Anda!');
    }
}
