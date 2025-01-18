<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Availability;

class AvailabilityController extends Controller
{
    public function updateA1(Request $request)
{
    $request->validate(['a1' => 'required|integer|min:0']);

    // Ambil atau buat entri availability
    $availability = Availability::firstOrCreate([]);
    $availability->a1 = $request->input('a1');
    $availability->save();

    return redirect()->back()->with('success_a1', 'A1 updated successfully!');
}

public function updateB1(Request $request)
{
    $request->validate(['b1' => 'required|integer|min:0']);

    $availability = Availability::firstOrCreate([]);
    $availability->b1 = $request->input('b1');
    $availability->save();

    return redirect()->back()->with('success_b1', 'B1 updated successfully!');
}

public function updateReguler(Request $request)
{
    $request->validate(['reguler' => 'required|integer|min:0']);

    $availability = Availability::firstOrCreate([]);
    $availability->reguler = $request->input('reguler');
    $availability->save();

    return redirect()->back()->with('success_reguler', 'Reguler updated successfully!');
}

public function updateVVIP(Request $request)
{
    $request->validate(['vvip' => 'required|integer|min:0']);

    $availability = Availability::firstOrCreate([]);
    $availability->vvip = $request->input('vvip');
    $availability->save();

    return redirect()->back()->with('success_vvip', 'VVIP updated successfully!');
}
}
