<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TeknisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $riwayatBooking = pemesanan::where('teknisi_id', Auth::id())
        ->with(['cabang', 'layanan', 'customer']) // pastikan relasi ada
        ->latest()
        ->paginate(10);

    return view('teknisi.dashboard', compact('riwayatBooking'));
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
        //
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

public function updateStatus(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:menunggu,diterima,selesai,dibatalkan',
    ]);

    $pemesanan = pemesanan::findOrFail($id);

    $pemesanan->status = $request->status;
    $pemesanan->save();

    return back()->with('success', 'Status berhasil diperbarui.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}