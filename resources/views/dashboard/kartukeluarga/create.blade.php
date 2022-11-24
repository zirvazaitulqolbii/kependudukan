@extends('dashboard.layouts.main')

@section('container')

<div class=" row justify-content-center" >
	<div class="col-lg-6">
		<center><h3>Entri Data Kartu Keluarga</h3></center><br>
	<form action ="/kk" method="post">
		@csrf
		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">No KK</label>
		    <input type="text" class="form-control @error('no_kk') is-invalid @enderror" id="no_kk" name="no_kk" value="{{old('no_kk')}}">
		    @error('no_kk')
		        <div class="invalid-feedback">
		  	        {{ $message }}
		        </div>
		    @enderror
		</div>
		
		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Nama Kepala Keluarga</label>
		    <input type="text" class="form-control @error('nama_kepala') is-invalid @enderror" id="nama_kepala" name="nama_kepala" value="{{old('nama_kepala')}}">
		    @error('nama_kepala')
		        <div class="invalid-feedback">
		  	        {{ $message }}
		        </div>
		    @enderror
		</div>
		<div class="mb-3">
		    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
		    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3">{{ old('alamat')}}</textarea>
		        @error('alamat')
		  	        <div class="invalid-feedback">
		  		        {{$message}}
		  	        </div>
		        @enderror
		</div>

		<div class="mb-3">
            <label  class="form-label"></label>
            <button class="btn btn-primary" name="submit" type="submit">Create KK</button>
        </div>
     </form>
	</div>
</div>
	
@endsection