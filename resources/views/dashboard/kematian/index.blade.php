@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
    {{ session('pesan') }}
</div>
@endif
<table class="table table-bordered">
    <center><h3>Data Kematian</h3></center>
    <a href="/kematian/create" class="btn btn-primary">Tambah Data Kematian</a>
    <br><br>
<tr>
    <td>No</td>
    <td>NIK</td>
    <td>Nama</td>
    <td>Umur</td>
    <td>Jenis Kelamin</td>
    <td>Tanggal Lahir</td>
    <td>Tanggal Meninggal</td>
    <td>Jam Meninggal</td>
    <td>Keterangan</td>
</tr>
@foreach ($kematians as $kematian)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$kematian->nik}}</td>
    <td>{{$kematian->nama}}</td>
    <td>{{$kematian->umur}}</td>
    <td>{{$kematian->jenis_kelamin}}</td>
    <td>{{$kematian->tanggal_lahir}}</td>
    <td>{{$kematian->tanggal_meninggal}}</td>
    <td>{{$kematian->jam}}</td>
    <td>{{$kematian->keterangan}}</td>
    <td>
        <a href="/kematian/{{ $kematian->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
        <form action="/kematian/{{ $kematian->id }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">Delete</button>
</form>
       
</tr>
@endforeach
</table>

@endsection