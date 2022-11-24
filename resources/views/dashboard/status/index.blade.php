@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
    {{ session('pesan') }}
</div>
@endif
<table class="table table-bordered">
    <center><h3>Data Status</h3></center>
    <a href="/status/create" class="btn btn-primary">Tambah Data Status</a>
    <br>
    <br>
<tr>
    <td>No</td>
    <td>Nama Status</td>
</tr>
@foreach ($status_kawin as $status)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$status->status}}</td>
    <td>

        <form action="/status/{{ $status->id }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">Delete</button>
</form>
       
</tr>
@endforeach
</table>

@endsection