@extends('dashboard.layouts.main')

@section('container')

<div class=" row justify-content-center" >
	<div class="col-lg-6">
		<center><h3>Entri Data Kelahiran</h3></center><br>
	<form action ="/kelahiran" method="post">
		@csrf
		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Nama</label>
		    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
		    @error('nama')
		        <div class="invalid-feedback">
		  	        {{ $message }}
		        </div>
		    @enderror
		</div>
		
		<div class="mb-2">
			<label class="form-label">Jenis Kelamin</label>
			<div class="d-flex">
				<div class="form-check me-3">
					<input type="radio" class="form-check-input" name="jenis_kelamin" value="L" {{ old('jenis_kelamin')=='L' ? 'checked' : ''}} checked>Laki-laki
				</div>
				<div class="form-check me-3">
					<input type="radio" class="form-check-input" name="jenis_kelamin" value="P" @checked(old('jenis_kelamin')=='P')>Perempuan
				</div>
			</div>
			@error('jenis_kelamin')
			<div class="invalid-feedback">
				{{ $message }}
			</div>
			@enderror
		</div>
		
		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
		    <input type="date" placeholder="Masukan Tanggal Lahir" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{old('tanggal')}}">
		    @error('tanggal')
		        <div class="invalid-feedback">
		  	        {{ $message }}
		        </div>
		    @enderror
		</div>

		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
		    <input type="text" class="form-control @error('tempat') is-invalid @enderror" id="tempat" name="tempat" value="{{old('tempat')}}">
		    @error('tempat')
		        <div class="invalid-feedback">
		  	        {{ $message }}
		        </div>
		    @enderror
		</div>

		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Nama Ayah</label>
		    <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah" name="nama_ayah" value="{{old('nama_ayah')}}">
		    @error('nama_ayah')
		        <div class="invalid-feedback">
		  	        {{ $message }}
		        </div>
		    @enderror
		</div>

		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Nama Ibu</label>
		    <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu" value="{{old('nama_ibu')}}">
		    @error('nama_ibu')
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
            <button class="btn btn-primary" name="submit" type="submit">Create Kelahiran</button>
        </div>
     </form>
	</div>
</div>
	
@endsection