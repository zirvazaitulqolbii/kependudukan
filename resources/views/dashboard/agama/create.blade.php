@extends('dashboard.layouts.main')

@section('container')

<div class=" row justify-content-center" >
	<div class="col-lg-6">
		<center><h3>Entri Data Agama</h3></center><br>
	<form action ="/agama" method="post">
		@csrf
		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Agama</label>
		    <input type="text" class="form-control @error('nama_agama') is-invalid @enderror" id="nama_agama" name="nama_agama" value="{{old('nama_agama')}}">
		    @error('nama_agama')
		        <div class="invalid-feedback">
		  	        {{ $message }}
		        </div>
		    @enderror
		</div>

		<div class="mb-3">
            <label  class="form-label"></label>
            <button class="btn btn-primary" name="submit" type="submit">Create</button>
        </div>
     </form>
	</div>
</div>
	
@endsection