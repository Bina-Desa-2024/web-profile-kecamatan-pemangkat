<?php

namespace App\Http\Controllers;

use App\Models\Layananadministrasi;
use Illuminate\Http\Request; 
class LayananadministrasiController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin-layanan-administrasi', [
            'layananadministrasis' => Layananadministrasi::all()
        ]);
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
        // dd($request);
        $validatedData = $request->validate([
            'nama_layanan' => 'required',
            'deskripsi' => 'required',
            'persyaratan' => 'required',
        ]);
    
        Layananadministrasi::create($validatedData);
        return redirect('/layananadministrasi')->with('success', 'Layanan administrasi baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Layananadministrasi $layananadministrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layananadministrasi $layananadministrasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layananadministrasi $layananadministrasi)
    {
        $validatedData = $request->validate([
            'nama_layanan' => 'required',
            'deskripsi' => 'required',
            'persyaratan' => 'required'
        ]);
        Layananadministrasi::where('id', $request->input('id'))
            ->update($validatedData);

        return redirect('/layananadministrasi')->with('success', 'Layanan administrasi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layananadministrasi $layananadministrasi)
    {
        // dd($request);
        Layananadministrasi::destroy($layananadministrasi->id);
        return redirect('/layananadministrasi')->with('error', 'Layanan administrasi berhasil dihapus');
    }
}
