@extends('dashboard.layouts.main')

@section('container')

<div class=" row justify-content-center" >
	<div class="col-lg-6">
		<center><h3>Entri Data Kematian</h3></center><br>
	<form action ="/kematian" method="post">
		@csrf
		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">NIK</label>
		    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{old('nik')}}">
		    @error('nik')
		        <div class="invalid-feedback">
		  	        {{ $message }}
		        </div>
		    @enderror
		</div>

		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Nama</label>
		    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
		    @error('nama')
		        <div class="invalid-feedback">
		  	        {{ $message }}
		        </div>
		    @enderror
		</div>

		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Umur</label>
		    <input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" value="{{old('umur')}}">
		    @error('umur')
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
		    <input type="date" placeholder="Masukan Tanggal Lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
		    @error('tanggal')
		        <div class="invalid-feedback">
		  	        {{ $message }}
		        </div>
		    @enderror
		</div>

		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Tanggal Meninggal</label>
		    <input type="date" placeholder="Masukan Tanggal Meninggal" class="form-control @error('tanggal_meninggal') is-invalid @enderror" id="tanggal_meninggal" name="tanggal_meninggal" value="{{old('tanggal_meninggal')}}">
		    @error('tanggal_meninggal')
		        <div class="invalid-feedback">
		  	        {{ $message }}
		        </div>
		    @enderror
		</div>

		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Jam Meninggal</label>
		    <input type="time" class="form-control @error('jam') is-invalid @enderror" id="jam" name="jam" value="{{old('jam')}}">
		    @error('jam')
		        <div class="invalid-feedback">
		  	        {{ $message }}
		        </div>
		    @enderror
		</div>
		
		<div class="mb-3">
		    <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
		    <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" rows="3">{{ old('keterangan')}}</textarea>
		        @error('keterangan')
		  	        <div class="invalid-feedback">
		  		        {{$message}}
		  	        </div>
		        @enderror
		</div>

		<div class="mb-3">
            <label  class="form-label"></label>
            <button class="btn btn-primary" name="submit" type="submit">Create Kematian</button>
        </div>
     </form>
	</div>
</div>
	
@endsection