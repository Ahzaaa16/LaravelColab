@extends('layouts.admin')

@section('judul')
Detail Data Barang
@endsection

@section('content')

<div class="p-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detail Data Barang ke {{$barang->id}}</h5>
            <h2>Nama Barang: {{$barang->nama_brg}}</h2>
            <h2>Harga Barang: {{$barang->harga_brg}}</h2>
            <h2>Stock Barang: {{$barang->stock_brg}}</h2>
            <h2>Deskripsi Barang: {{$barang->deskripsi_brg}}</h2>
            <h2>Gambar Barang: <img src="/uploads/{{$barang->gambar_brg}}" width="100px"/> </h2>
            <h2>Kategori Barang: {{$barang->kategori->nama_kategori}}</h2>
        </div> 
    </div>

    <a href="/barang" class="btn btn-primary my-3">Kembali</a>
    </div>
    
@endsection