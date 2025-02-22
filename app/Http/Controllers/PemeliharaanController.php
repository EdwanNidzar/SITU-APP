<?php

namespace App\Http\Controllers;

use App\Models\Pemeliharaan;
use App\Models\Tanaman;
use Illuminate\Http\Request;

class PemeliharaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemeliharaans = Pemeliharaan::with('tanaman')->orderBy('id', 'desc')->paginate(5);
        return view('pemeliharaan.index', compact('pemeliharaans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tanamans = Tanaman::all();
        return view('pemeliharaan.create', compact('tanamans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanaman_id' => 'required|exists:tanamen,id',
            'kegiatan' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        Pemeliharaan::create([
            'tanaman_id' => $request->tanaman_id,
            'kegiatan' => $request->kegiatan,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('pemeliharaan.index')->with('success', 'Pemeliharaan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemeliharaan $pemeliharaan)
    {
        return view('pemeliharaan.show', compact('pemeliharaan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemeliharaan $pemeliharaan)
    {
        $tanamans = Tanaman::all();
        return view('pemeliharaan.edit', compact('pemeliharaan', 'tanamans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemeliharaan $pemeliharaan)
    {
        $request->validate([
            'tanaman_id' => 'required|exists:tanamen,id',
            'kegiatan' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        $pemeliharaan->update([
            'tanaman_id' => $request->tanaman_id,
            'kegiatan' => $request->kegiatan,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('pemeliharaan.index')->with('success', 'Pemeliharaan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemeliharaan $pemeliharaan)
    {
        $pemeliharaan->delete();
        return redirect()->route('pemeliharaan.index')->with('success', 'Pemeliharaan berhasil dihapus.');
    }
}
