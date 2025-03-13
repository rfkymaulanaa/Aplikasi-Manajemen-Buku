<?php

namespace App\Http\Controllers;

use App\Models\Bukus;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allBukus = Bukus::all();
        return view('buku.index', compact('allBukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();
        return view('buku.create', compact('penerbit', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //membuat validasi data
        $validateData = $request-> validate(
            [
                'judul' =>'required|max:255',
                'pengarang' =>'required',
                'tahun_terbit' =>'required',
                'kategori_id' =>'required',
                'penerbit_id' =>'required',
            ]
            );

            //simpan data ke database
            Bukus::create($validateData);
            // dd($request->all());

            //redirect ke halaman index
            return redirect()->route('buku.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bukus $buku)
    {
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bukus $buku)
    {
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();
        return view('buku.edit', compact('buku', 'penerbit', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bukus $buku)
    {
        //membuat validasi data
        $validateData = $request-> validate(
            [
                'judul' =>'required|max:255',
                'pengarang' =>'required',
                'tahun_terbit' =>'required',
                'kategori_id' =>'required',
                'penerbit_id' =>'required',
            ]
            );

            //simpan data ke database
            $buku->update($validateData);

            //redirect ke halaman index
            return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bukus $buku)
    {
        //hapus data buku
        $buku->delete();

        //redirect ke halaman index
        return redirect()->route('buku.index');
    }
}
