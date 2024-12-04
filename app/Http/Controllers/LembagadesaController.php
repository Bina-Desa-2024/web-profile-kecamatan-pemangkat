<?php

namespace App\Http\Controllers;

use App\Models\Lembagadesa;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class LembagadesaController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin-lembaga-desa', [
            'lembagadesas' => Lembagadesa::all()
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
            'nama_lembaga' => 'required',
            'alamat_lembaga' => 'required',
            'nama_ketua' => 'required',
            'gambar_lembaga'=>'image'
        ]);
        if($request->file('gambar_lembaga')) {
            $validatedData['gambar_lembaga'] = $request->file('gambar_lembaga')->store('gambar_yang_tersimpan');
        }
        Lembagadesa::create($validatedData);
        return redirect('/lembagadesa')->with('success', 'Lembaga Kecamatan baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lembagadesa $lembagadesa)
    {
        return view('user.lembaga-desa', [
            'lembagadesas' => Lembagadesa::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lembagadesa $lembagadesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lembagadesa $lembagadesa)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama_lembaga' => 'required',
            'alamat_lembaga' => 'required',
            'nama_ketua' => 'required',
            'gambar_lembaga' => 'image'
        ]);
        if($request->file('gambar_lembaga')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar_lembaga'] = $request->file('gambar_lembaga')->store('gambar_yang_tersimpan');
        }
        Lembagadesa::where('id', $request->input('id'))
            ->update($validatedData);

        return redirect('/lembagadesa')->with('success', 'Lembaga Kecamatan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lembagadesa $lembagadesa)
    {
        // dd($request);
        if($lembagadesa->gambar_lembaga){
            Storage::delete($lembagadesa->gambar_lembaga);
        }
        Lembagadesa::destroy($lembagadesa->id);
        return redirect('/lembagadesa')->with('error', 'Lembaga Kecamatan berhasil dihapus');
    }
}
