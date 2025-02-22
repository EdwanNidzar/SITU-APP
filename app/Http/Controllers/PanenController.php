<?php

namespace App\Http\Controllers;

use App\Models\Panen;
use App\Models\Tanaman;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PanenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $panens = Panen::with('tanaman')->orderBy('id', 'desc')->paginate(5);
        return view('panen.index', compact('panens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tanamans = Tanaman::all();
        return view('panen.create', compact('tanamans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanaman_id' => 'required|exists:tanamen,id',
            'jumlah' => 'required',
            'tanggal_panen' => 'required|date',
        ]);

        Panen::create([
            'tanaman_id' => $request->tanaman_id,
            'jumlah' => $request->jumlah,
            'tanggal_panen' => $request->tanggal_panen,
        ]);

        return redirect()->route('panen.index')->with('success', 'Panen berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Panen $panen)
    {
        return view('panen.show', compact('panen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Panen $panen)
    {
        $tanamans = Tanaman::all();
        return view('panen.edit', compact('panen', 'tanamans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Panen $panen)
    {
        $request->validate([
            'tanaman_id' => 'required|exists:tanamen,id',
            'jumlah' => 'required',
            'tanggal_panen' => 'required|date',
        ]);

        $panen->update([
            'tanaman_id' => $request->tanaman_id,
            'jumlah' => $request->jumlah,
            'tanggal_panen' => $request->tanggal_panen,
        ]);

        return redirect()->route('panen.index')->with('success', 'Panen berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Panen $panen)
    {
        $panen->delete();
        return redirect()->route('panen.index')->with('success', 'Panen berhasil dihapus.');
    }

    public function reportPanen()
    {
        $panens = Panen::with('tanaman')->orderBy('id', 'desc')->get();
        $pdf = PDF::loadView('panen.report', compact('panens'));
        return $pdf->stream('laporan-panen.pdf');
    }
}
