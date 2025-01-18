<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AvailabilityController extends Controller
{
    public function updateA1(Request $request)
    {
        // Validasi input
        $request->validate([
            'a1' => 'required|integer|min:0',
        ]);

        // Simpan nilai availability ke session atau database
        Session::put('a1', $request->input('a1'));

        return redirect()->back()->with('success_a1', 'a1 updated successfully!');
    }

    public function updateB1(Request $request)
    {
        // Validasi input
        $request->validate([
            'b1' => 'required|integer|min:0',
        ]);

        // Simpan nilai availability ke session atau database
        Session::put('b1', $request->input('b1'));

        return redirect()->back()->with('success_b1', 'a1 updated successfully!');
    }

    public function updateReguler(Request $request)
    {
        // Validasi input
        $request->validate([
            'reguler' => 'required|integer|min:0',
        ]);

        // Simpan nilai availability ke session atau database
        Session::put('reguler', $request->input('reguler'));

        return redirect()->back()->with('success_reguler', 'reguler updated successfully!');
    }

    public function updateVVIP(Request $request)
    {
        // Validasi input
        $request->validate([
            'vvip' => 'required|integer|min:0',
        ]);

        // Simpan nilai availability ke session atau database
        Session::put('vvip', $request->input('vvip'));

        return redirect()->back()->with('success_vvip', 'vvip updated successfully!');
    }
}
