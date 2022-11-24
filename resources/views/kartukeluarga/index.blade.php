@extends('layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
    {{ session('pesan') }}
</div>
@endif
<table class="table table-bordered">
    <center><h2>Data Kartu Keluarga</h2></center>
<tr style="background-color: #789ec6;">
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

</form>
       
</tr>
@endforeach
</table>

@endsection