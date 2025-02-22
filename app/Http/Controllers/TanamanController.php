<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use App\Models\Lahan;
use Illuminate\Http\Request;

class TanamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tanamans = Tanaman::with('lahan')->orderBy('id', 'desc')->paginate(5);
        return view('tanaman.index', compact('tanamans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lahans = Lahan::all();
        return view('tanaman.create', compact('lahans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'lahan_id' => 'required|exists:lahans,id',
            'nama_tanaman' => 'required|string|max:255',
            'tanggal_tanam' => 'required|date',
        ]);

        Tanaman::create([
            'lahan_id' => $request->lahan_id,
            'nama_tanaman' => $request->nama_tanaman,
            'tanggal_tanam' => $request->tanggal_tanam,
        ]);

        return redirect()->route('tanaman.index')->with('success', 'Tanaman berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tanaman $tanaman)
    {
        return view('tanaman.show', compact('tanaman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tanaman $tanaman)
    {
        $lahans = Lahan::all();
        return view('tanaman.edit', compact('tanaman', 'lahans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tanaman $tanaman)
    {
        $request->validate([
            'lahan_id' => 'required|exists:lahans,id',
            'nama_tanaman' => 'required|string|max:255',
            'tanggal_tanam' => 'required|date',
        ]);

        $tanaman->update([
            'lahan_id' => $request->lahan_id,
            'nama_tanaman' => $request->nama_tanaman,
            'tanggal_tanam' => $request->tanggal_tanam,
        ]);

        return redirect()->route('tanaman.index')->with('success', 'Tanaman berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tanaman $tanaman)
    {
        $tanaman->delete();
        return redirect()->route('tanaman.index')->with('success', 'Tanaman berhasil dihapus.');
    }
}
