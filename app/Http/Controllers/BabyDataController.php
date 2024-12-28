<?php

namespace App\Http\Controllers;

use App\Models\BabyData;
use Illuminate\Http\Request;

class BabyDataController extends Controller
{
    public function index()
{
    return view('Input_DataAnak');
}


    public function store(Request $request)
    {
        $request->validate([
            'nama_bayi' => 'required|string|max:255',
            'ttl' => 'required|date',
            'BB' => 'required|numeric',
            'TB' => 'required|numeric',
            'JK' => 'required|in:Laki-laki,Perempuan',
            'catatan' => 'nullable|string',
        ]);

        BabyData::create($request->all());

        return redirect()->back()->with('success', 'Data anak berhasil disimpan.');
    }
}

