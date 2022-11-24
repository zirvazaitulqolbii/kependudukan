@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
    {{ session('pesan') }}
</div>
@endif
<table class="table table-bordered">
    <center><h3>Data Agama</h3></center>
    <a href="/agama/create" class="btn btn-primary">Tambah Data Agama</a>
    <br><br>
<tr>
    <td>No</td>
    <td>Nama Agama</td>
</tr>
@foreach ($agamas as $agama)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$agama->nama_agama}}</td>
    <td>{{$agama->agama}}</td>
    <td>

        <form action="/agama/{{ $agama->id }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">Delete</button>
</form>
       
</tr>
@endforeach
</table>

{{ $agamas->links('pagination::bootstrap-5')}}

@endsection