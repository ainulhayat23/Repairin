<?php

namespace App\Http\Controllers;

use App\Models\cabang;
use App\Models\layanan;
use App\Models\pemesanan;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semuaCabang = cabang::all();
        return view('admin.show', compact('semuaCabang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cabangCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'nama' => 'required|max:50',
            'alamat' => 'required|max:50',
            'kota/kab' => 'required|max:50',
        ]);

        cabang::create($validasiData['nama']);
        layanan::create($validasiData['nama']);
        pemesanan::create($validasiData['alamat']);
        return redirect()->route('admin.cabangIndex');
    }

    /**
     * Display the specified resource.
     */
    public function show(cabang $cabang)
    {
        return view('admin.cabangShow',compact('cabang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cabang $cabang)
    {
        return view('admin.cabangEdit', compact('cabang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cabang $cabang)
    {
        $validasiData = $request->validate([
            'nama' => 'required|max:50',
            'alamat' => 'required|max:50',
            'kota/kab' => 'required|max:50',
        ]);
        $cabang->update($validasiData);
        return redirect()->route('admin.cabangIndex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cabang $cabang)
    {
        $cabang->delete();
        return redirect()->route('admin.cabangIndex');
    }
}