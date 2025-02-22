<?php

namespace App\Http\Controllers;

use App\Models\Lahan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lahans = Lahan::orderBy('id', 'desc')->paginate(5);
        return view('lahan.index', compact('lahans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lahan' => 'required',
            'lokasi_lahan' => 'required',
            'luas_lahan' => 'required'
        ]);

        Lahan::create($request->all());

        return redirect()->route('lahan.index')
            ->with('success', 'Lahan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lahan $lahan)
    {
        return view('lahan.show', compact('lahan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lahan $lahan)
    {
        return view('lahan.edit', compact('lahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lahan $lahan)
    {
        $request->validate([
            'nama_lahan' => 'required',
            'lokasi_lahan' => 'required',
            'luas_lahan' => 'required'
        ]);

        $lahan->update($request->all());

        return redirect()->route('lahan.index')
            ->with('success', 'Lahan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lahan $lahan)
    {
        $lahan->delete();

        return redirect()->route('lahan.index')
            ->with('success', 'Lahan deleted successfully');
    }

    public function reportLahan()
    {
        $lahans = Lahan::all();
        $pdf = PDF::loadview('lahan.report', compact('lahans'));
        return $pdf->stream('report_lahan.pdf');
    }
}
