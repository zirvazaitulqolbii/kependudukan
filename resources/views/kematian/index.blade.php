@extends('layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
    {{ session('pesan') }}
</div>
@endif
<table class="table table-bordered">
    <center><h2>Data Kematian</h2></center>
<tr style="background-color: #789ec6;">
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
       
</form>
       
</tr>
@endforeach
</table>

@endsection