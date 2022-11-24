@extends('dashboard.layouts.main')

@section('container')

<div class=" row justify-content-center" >
	<div class="col-lg-6">
		<center><h3>Entri Data Status</h3></center><br>
	<form action ="/status" method="post">
		@csrf
		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Status</label>
		    <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{old('status')}}">
		    @error('status')
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