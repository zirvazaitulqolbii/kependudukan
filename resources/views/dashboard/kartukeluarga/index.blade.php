@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
    {{ session('pesan') }}
</div>
@endif
<table class="table table-bordered">
    <center><h3>Data Kartu Keluarga</h3></center>
    <a href="/kk/create" class="btn btn-primary">Tambah Data Kartu Keluarga</a>
    <br><br>
<tr>
    <td>No</td>
    <td>No KK</td>
    <td>Nama Kepala Keluarga</td>
    <td>Alamat</td>
</tr>
@foreach ($kartu_keluargas as $kk)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$kk->no_kk}}</td>
    <td>{{$kk->nama_kepala}}</td>
    <td>{{$kk->alamat}}</td>
    <td>

        <a href="/kk/{{ $kk->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
        <form action="/kk/{{ $kk->id }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">Delete</button>
</form>
       
</tr>
@endforeach
</table>

@endsection