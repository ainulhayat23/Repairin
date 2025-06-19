<?php

namespace App\Http\Controllers;

use App\Models\cabang;
use App\Models\layanan;
use App\Models\pemesanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semuaTeknisi = User::where('role', 'teknisi')->get();
        $semuaCabang = Cabang::all();
        $semuaLayanan = Layanan::all();

        // fix: gunakan paginate agar bisa menggunakan links()
        $riwayatBooking = Pemesanan::where('user_id', Auth::id())
            ->with(['cabang', 'layanan', 'teknisi'])
            ->latest()
            ->paginate(10);

        return view('customer.dashboard', compact('semuaCabang', 'semuaLayanan', 'semuaTeknisi', 'riwayatBooking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cabang' => 'required|exists:cabang,id',
            'layanan_id' => 'required|exists:layanan,id',
            'teknisi_id' => 'nullable|exists:users,id',
            'penjadwalan' => 'required|date',
            'metode_layanan' => 'required|string',
            'lokasi' => 'nullable|string',
        ]);

        Pemesanan::create([
            'user_id' => Auth::id(),
            'cabang_id' => $request->cabang,
            'layanan_id' => $request->layanan_id,
            'teknisi_id' => $request->teknisi_id,
            'penjadwalan' => $request->penjadwalan,
            'metode_layanan' => $request->metode_layanan,
            'lokasi' => $request->lokasi,
        ]);

        return redirect()->route('dashboard')->with('success', 'Pemesanan berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}