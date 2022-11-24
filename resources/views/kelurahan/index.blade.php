@extends('layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
    {{ session('pesan') }}
</div>
@endif
<table class="table table-bordered">
    <center><h2>Data Kelurahan</h2></center>
<tr style="background-color: #789ec6;">
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
    
</form>
       
</tr>
@endforeach
</table>

@endsection