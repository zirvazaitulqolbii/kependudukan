@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
    {{ session('pesan') }}
</div>
@endif
<table class="table table-bordered">
    <center><h3>Data Kelurahan</h3></center>
    <a href="/kelurahan/create" class="btn btn-primary">Tambah Data Kelurahan</a>
    <br><br>
<tr>
    <td>No</td>
    <td>Nama Kelurahan</td>
    <td>Jumlah Penduduk</td>
</tr>
@foreach ($kelurahans as $kelurahan)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$kelurahan->nama_kelurahan}}</td>
    <td>{{$kelurahan->jumlah_penduduk}}</td>
    <td>
        <a href="/kelurahan/{{ $kelurahan->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
        <form action="/kelurahan/{{ $kelurahan->id }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">Delete</button>
</form>
       
</tr>
@endforeach
</table>

@endsection