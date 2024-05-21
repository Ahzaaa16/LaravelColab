@extends('layouts.admin')

@section('judul')
Detail Data Barang
@endsection

@section('content')

<div class="p-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detail Data Tiket ke {{$barang->id}}</h5>
            <h2>Nama Tiket: {{$barang->nama_brg}}</h2>
            <h2>Harga Tiket: {{$barang->harga_brg}}</h2>
            <h2>Stock Tiket: {{$barang->stock_brg}}</h2>
            <h2>Deskripsi Tiket: {{$barang->deskripsi_brg}}</h2>
            <h2>Gambar Tiket: <img src="/uploads/{{$barang->gambar_brg}}" width="100px"/> </h2>
            <h2>Kategori Tiket: {{$barang->kategori->nama_kategori}}</h2>
        </div> 
    </div>

    <a href="/barang" class="btn btn-primary my-3">Kembali</a>
    </div>
    
@endsection