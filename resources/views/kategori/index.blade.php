@extends('layouts.admin')

@section('judul')
Event Acara
@endsection

@section('tabel')
<div class="p-3">
    <a href="/kategori/create" class="btn btn-primary my-3">Tambah Event Acara</a>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Event yang hadir</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kategori as $key => $value)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$value->nama_kategori}}</td>
                <td class="mr-3">
                    <a href="/kategori/{{$value->id}}" class="btn btn-info">Detail</a>
                    <a href="/kategori/{{$value->id}}/edit" class="btn btn-success">Edit</a>
                    <form onclick="return confirm('Anda yakin ingin menghapus?')" action="/kategori/{{$value->id}}" class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger my-1" data-confirm-delete="true">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">No data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />
