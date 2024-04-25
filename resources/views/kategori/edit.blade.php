@extends('layouts.admin')

@section('judul', 'Edit Data Kategori')

@section('content')
<div class="p-3">
    <h2>Edit Data Kategori {{ $kategori->id }}</h2>
    <form action="/kategori/{{ $kategori->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input type="text" class="form-control" name="nama" value="{{ $kategori->nama_kategori }}" id="nama" placeholder="Masukkan Nama Kategori">
            @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <a href="/kategori" class="btn btn-success my-3">Kembali</a>
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
</div>
@endsection
