<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PelangganController extends Controller
{
    public function index()
    {
        $profile = DB::table('profile')->get();

        $title= 'Peringatan !';
        $text= "Apakah Anda yakin ingin mengahapus ?";
        $icon= "Question";
        confirmDelete($title, $text);

        return view('pelanggan.indexpelanggan', compact('profile'));
    }

    public function tambahpelanggan()
    {
        return view('pelanggan.tambahpelanggan');
    }

    public function pelanggan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        DB::table('profile')->insert([
            'nama_lengkap' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        Alert::alert('Success', 'Data Berhasil');

        return redirect('/pelanggan');
    }

    public function show($id)
    {
        $profile = DB::table('profile')->find($id);
        return view('pelanggan.detailpelanggan', compact('profile'));
    }

    public function edit($id)
    {
        $profile = DB::table('profile')->find($id);
        return view('pelanggan.editpelanggan', compact('profile'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        DB::table('profile')
            ->where('id', $id)
            ->update([
                'nama_lengkap' => $request->nama,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
            ]);

        Alert::success('Success', 'Data Berhasil di Update');
        return redirect('/pelanggan');
    }

    public function destroy($id){
        $profile=DB::table('profile')->where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil di Hapus');
        return redirect('/pelanggan');
    }
}
