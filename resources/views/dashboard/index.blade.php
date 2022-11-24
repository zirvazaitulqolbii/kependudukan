@extends('dashboard.layouts.main')

@section('container')
    <h3>Dashboard</h3>
    @if (session()->has('error_succes'))
    <div class="alert alert-success" role="alert">
      {{ session ('error_succes') }}
    </div>    
    @endif
@endsection