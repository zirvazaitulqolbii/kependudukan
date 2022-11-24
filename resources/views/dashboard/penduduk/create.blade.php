@extends('dashboard.layouts.main')

@section('container')

<div class=" row justify-content-center">
    <div class="col-lg-6">
        <center>
            <h3>Entri Data Penduduk</h3>
        </center><br>
        <form action="/penduduk" method="post">
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
                <label class="form-label">Jenis Kelamin</label>
                <div class="d-flex">
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" value="L">
                        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" }}>
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                    @error('jenis_kelamin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-row row mb-3">
                    <div class="col-md-12">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" placeholder="Enter Tanggal Lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                
                    @error('tanggal_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                     @enderror
                     </div>
                     
                     <div class="mb-3">
                     <label class="form-label">Agama</label>
                        <select class="form-select" name="agama_id" aria-label="Default select example">
                            <option selected></option>
                            @foreach ($agamas as $agama)
                                @if (old('jurusan_id')== $agama->id)
                                    <option value="{{ $agama->id }}" selected>{{ $agama->nama_agama }}</option>
                                @else
                                    <option value="{{ $agama->id }}">{{ $agama->nama_agama }}</option>    
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                     <label class="form-label">Status</label>
                        <select class="form-select" name="status_kawin_id" aria-label="Default select example">
                            <option selected></option>
                            @foreach ($status_kawins as $status)
                                @if (old('jurusan_id')== $status->id)
                                    <option value="{{ $status->id }}" selected>{{ $status->status }}</option>
                                @else
                                    <option value="{{ $status->id }}">{{ $status->status }}</option>    
                                @endif
                            @endforeach
                        </select>
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

                <div class="form-row row">
                    <div class="col-md-12">
                        <label class="form-label">Telepon</label>
                        <input type="text" placeholder="Enter Telepon" class="form-control @error('telp') is-invalid @enderror" value="{{ old('telp') }}" id="telp" name="telp">
                    </div>
                </div>
                @error('telp')
                <div class="invalid-feedback">
		  		        {{$message}}
		  	        </div>
                @enderror
            </div>

                <div class="mb-3">
                     <label class="form-label">Kelurahan</label>
                        <select class="form-select" name="kelurahan_id" aria-label="Default select example">
                            <option selected></option>
                            @foreach ($kelurahans as $kelurahan)
                                @if (old('jurusan_id')== $kelurahan->id)
                                    <option value="{{ $kelurahan->id }}" selected>{{ $kelurahan->nama_kelurahan }}</option>
                                @else
                                    <option value="{{ $kelurahan->id }}">{{ $kelurahan->nama_kelurahan }}</option>    
                                @endif
                            @endforeach
                        </select>
                    </div>

                <div class="mb-3">
                    <label class="form-label"></label>
                    <button class="btn btn-primary" name="submit" type="submit">Create Penduduk</button>
                </div>
        </form>
    </div>
</div>

@endsection