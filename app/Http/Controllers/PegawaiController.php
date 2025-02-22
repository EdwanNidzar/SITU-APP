<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Models\Pegawai;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawais = Pegawai::with('bagian','jabatan')->paginate(5);
        return view('pegawai.index', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bagians = Bagian::all();
        $jabatans = Jabatan::all();
        return view('pegawai.create', compact('bagians', 'jabatans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:pegawais',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'tanggal_masuk' => 'required',
            'bagian_id' => 'required',
            'jabatan_id' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $foto = $request->file('foto')->store('foto_pegawai', 'public');

        Pegawai::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'tanggal_masuk' => $request->tanggal_masuk,
            'bagian_id' => $request->bagian_id,
            'jabatan_id' => $request->jabatan_id,
            'foto' => $foto,
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        $bagians = Bagian::all();
        $jabatans = Jabatan::all();
        return view('pegawai.edit', compact('pegawai', 'bagians', 'jabatans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nip' => 'required|unique:pegawais,nip,'.$pegawai->id,
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'tanggal_masuk' => 'required',
            'bagian_id' => 'required',
            'jabatan_id' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:5120',
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('foto_pegawai', 'public');
        } else {
            $foto = $pegawai->foto;
        }

        $pegawai->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'tanggal_masuk' => $request->tanggal_masuk,
            'bagian_id' => $request->bagian_id,
            'jabatan_id' => $request->jabatan_id,
            'foto' => $foto,
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        Storage::disk('public')->delete($pegawai->foto);
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus');
    }
}
