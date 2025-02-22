<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelatihans = Pelatihan::with('pegawai')->paginate(5);
        return view('pelatihan.index', compact('pelatihans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pegawais = Pegawai::all();
        return view('pelatihan.create', compact('pegawais'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pegawai_id' => 'required|exists:pegawais,id',
            'nama_pelatihan' => 'required',
            'tanggal_pelatihan' => 'required',
            'penyelenggara' => 'required',
            'hasil_pelatihan' => 'required',
        ]);

        Pelatihan::create($request->all());
        return redirect()->route('pelatihan.index')
            ->with('success', 'Pelatihan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelatihan $pelatihan)
    {
        return view('pelatihan.show', compact('pelatihan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelatihan $pelatihan)
    {
        $pegawais = Pegawai::all();
        return view('pelatihan.edit', compact('pelatihan', 'pegawais'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelatihan $pelatihan)
    {
        $request->validate([
            'pegawai_id' => 'required|exists:pegawais,id',
            'nama_pelatihan' => 'required',
            'tanggal_pelatihan' => 'required',
            'penyelenggara' => 'required',
            'hasil_pelatihan' => 'required',
        ]);

        $pelatihan->update($request->all());
        return redirect()->route('pelatihan.index')
            ->with('success', 'Pelatihan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelatihan $pelatihan)
    {
        $pelatihan->delete();
        return redirect()->route('pelatihan.index')
            ->with('success', 'Pelatihan deleted successfully');
    }
}
