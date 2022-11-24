@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
    {{ session('pesan') }}
</div>
@endif
<table class="table table-bordered">
    <center><h3>Data Kelahiran</h3></center>
    <a href="/kelahiran/create" class="btn btn-primary">Tambah Data Kelahiran</a>
    <br><br>
<tr>
    <td>No</td>
    <td>Nama</td>
    <td>Jenis Kelamin</td>
    <td>Tanggal Lahir</td>
    <td>Tempat Lahir</td>
    <td>Nama Ayah</td>
    <td>Nama Ibu</td>
    <td>Alamat</td>
</tr>
@foreach ($kelahirans as $kelahiran)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$kelahiran->nama}}</td>
    <td>{{$kelahiran->jenis_kelamin}}</td>
    <td>{{$kelahiran->tanggal}}</td>
    <td>{{$kelahiran->tempat}}</td>
    <td>{{$kelahiran->nama_ayah}}</td>
    <td>{{$kelahiran->nama_ibu}}</td>
    <td>{{$kelahiran->alamat}}</td>
    <td>
        <a href="/kelahiran/{{ $kelahiran->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
        <form action="/kelahiran/{{ $kelahiran->id }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">Delete</button>
</form>
       
</tr>
@endforeach
</table>

@endsection