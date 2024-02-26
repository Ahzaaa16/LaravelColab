@extends('layouts.admin')

@section('judul')
  
@endsection

@section('content')
<div class="p-3">
    <h2>Edit Data Profile Pelanggan {{$profile->id}} </h2>
        <form action="/pelanggan/{{$profile->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" value="{{$profile->nama_lengkap}}" id="nama" placeholder="Masukkan Nama Lengkap">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nohp">No Hp</label>
                <input type="number" class="form-control" name="no_hp" value="{{$profile->no_hp}}" id="nohp" placeholder="Masukkan no hp">
                @error('nohp')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="{{$profile->alamat}}" id="alamat" placeholder="Masukkan Alamat">
                @error('alamat')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/pelanggan" class="btn btn-success my-3">Kembali</a>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
</div>
@endsection
