@extends('layouts.admin')

@section('judul', 'Tambah Kategori')

@section('content')
<form action="/kategori" method="POST">
    @csrf
    <div class="form-group p-3">
        <label>Nama Kategori</label>
        <input type="text" name='nama' class="form-control" placeholder="Masukan Nama Kategori">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="p-3">
        <a href="/kategori" class="btn btn-success my-3">Kembali</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection
