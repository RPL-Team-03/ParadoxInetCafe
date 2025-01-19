<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class DetailController extends Controller
{
    public function updateTitle(Request $request)
    {
        $request->validate(['title' => 'required|text|max:255']);

        $detail = Detail::firstOrCreate([]);
        $detail->title = $request->input('title');
        $detail->save();

        return redirect()->back()->with('success_title', 'Title updated successfully!');
    }

    public function updateRincian(Request $request)
    {
        $request->validate(['rincian' => 'required|string|max:255']);

        $detail = Detail::firstOrCreate([]);
        $detail->rincian = $request->input('rincian');
        $detail->save();

        return redirect()->back()->with('success_rincian', 'Rincian updated successfully!');
    }
}
