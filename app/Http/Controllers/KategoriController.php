<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $showmenuadmin = auth()->user()->isAdmin();
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori','showmenuadmin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $showmenuadmin = auth()->user()->isAdmin();
        $kategori = Kategori::all();

        return view('kategori.tambah', ['kategori' => $kategori], ['showmenuadmin' => $showmenuadmin]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'nama' => 'required',
    ]);
    
    Kategori::create([
        'nama_kategori' => $request->nama,
    ]);
    
    Alert::success('Success', 'Data Berhasil Disimpan');
    return redirect('/kategori'); 
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $showmenuadmin = auth()->user()->isAdmin();
        $kategori = Kategori::find($id);
        return view('kategori.detail', compact('kategori', 'showmenuadmin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $showmenuadmin = auth()->user()->isAdmin();
        $kategori = Kategori::find($id);
        return view('kategori.edit', compact('kategori', 'showmenuadmin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        $kategori = Kategori::find($id);

        $kategori->nama_kategori = $request->input('nama');
        $kategori->update();

        Alert::success('Success', 'Data Berhasil Disimpan');

        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $kategori = Kategori::find($id);

    if (!$kategori) {
        Alert::error('Error', 'Data tidak ditemukan');
        return redirect('/kategori');
    }

    $kategori->delete();

    Alert::success('Success', 'Data Berhasil Dihapus');
    return redirect('/kategori');
}
}
