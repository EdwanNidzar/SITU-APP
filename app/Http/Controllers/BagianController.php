<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BagianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bagians = Bagian::orderBy('id', 'desc')->paginate(5);
        return view('bagian.index', compact('bagians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bagian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_bagian' => 'required'
        ]);

        Bagian::create($request->all());

        return redirect()->route('bagian.index')
            ->with('success', 'Bagian created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bagian $bagian)
    {
        return view('bagian.show', compact('bagian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bagian $bagian)
    {
        return view('bagian.edit', compact('bagian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bagian $bagian)
    {
        $request->validate([
            'nama_bagian' => 'required'
        ]);

        $bagian->update($request->all());

        return redirect()->route('bagian.index')
            ->with('success', 'Bagian updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bagian $bagian)
    {
        $bagian->delete();

        return redirect()->route('bagian.index')
            ->with('success', 'Bagian deleted successfully');
    }

    public function reportBagian()
    {
        $bagians = Bagian::all();
        $pdf = PDF::loadView('bagian.report', compact('bagians'));
        return $pdf->stream('report_bagian.pdf');
    }
}
