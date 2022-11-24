@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
    {{ session('pesan') }}
</div>
@endif
<table class="table table-bordered">
    <center><h3>Data Penduduk</h3></center>
    <a href="/penduduk/create" class="btn btn-primary">Tambah Data Penduduk</a>
    <br><br>
<tr>
    <td>No</td>
    <td>NIK</td>
    <td>Nama</td>
    <td>Jenis Kelamin</td>
    <td>Tanggal Lahir</td>
    <td>Agama</td>
    <td>Status</td>
    <td>Alamat</td>
    <td>Telp</td>
    <td>Kelurahan</td>
</tr>
@foreach ($penduduks as $penduduk)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$penduduk->nik}}</td>
    <td>{{$penduduk->nama}}</td>
    <td>{{$penduduk->jenis_kelamin}}</td>
    <td>{{$penduduk->tanggal_lahir}}</td>
    <td>{{$penduduk->agama->nama_agama}}</td>
    <td>{{$penduduk->status_kawin->status}}</td>
    <td>{{$penduduk->alamat}} </td>
    <td>{{$penduduk->telp}} </td>
    <td>{{$penduduk->kelurahan->nama_kelurahan}} </td>

    <td>
        <a href="/penduduk/{{ $penduduk->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
        <form action="/penduduk/{{ $penduduk->id }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">Delete</button>
</form>
       
</tr>
@endforeach
</table>

{{ $penduduks->links('pagination::bootstrap-5')}}

@endsection
