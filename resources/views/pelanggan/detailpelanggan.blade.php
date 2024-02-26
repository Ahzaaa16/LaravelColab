@extends('layouts.admin')

@section('judul')
Detail Profil Pelanggan
@endsection

@section('content')

<div class="p-3">
<div class="card" style="width: 24rem;" >
<div class="card-body ">
    <h5 class="card-title">Detail Data Profil Pelanggan ke {{$profile->id}}</h5>
        <h4>{{$profile->nama_lengkap}}</h4>
        <h4>{{$profile->no_hp}}</h4>
        <h5>{{$profile->alamat}}</h5>
        </div>
        </div>
        <a href="/pelanggan" class="btn btn-primary my-3">Kembali</a>
        </div>

        @endsection        