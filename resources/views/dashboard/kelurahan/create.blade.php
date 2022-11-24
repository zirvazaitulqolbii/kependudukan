@extends('dashboard.layouts.main')

@section('container')

<div class=" row justify-content-center" >
	<div class="col-lg-6">
		<center><h3>Entri Data Kelurahan</h3></center><br>
	<form action ="/kelurahan" method="post">
		@csrf
		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Nama Kelurahan</label>
		    <input type="text" class="form-control @error('nama_kelurahan') is-invalid @enderror" id="nama_kelurahan" name="nama_kelurahan" value="{{old('nama_kelurahan')}}">
		    @error('nama_kelurahan')
		        <div class="invalid-feedback">
		  	        {{ $message }}
		        </div>
		    @enderror
		</div>
		
		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Jumlah Penduduk</label>
		    <input type="text" class="form-control @error('jumlah_penduduk') is-invalid @enderror" id="jumlah_penduduk" name="jumlah_penduduk" value="{{old('jumlah_penduduk')}}">
		    @error('jumlah_penduduk')
		        <div class="invalid-feedback">
		  	        {{ $message }}
		        </div>
		    @enderror
		</div>

		<div class="mb-3">
            <label  class="form-label"></label>
            <button class="btn btn-primary" name="submit" type="submit">Create Kelurahan</button>
        </div>
     </form>
	</div>
</div>
	
@endsection