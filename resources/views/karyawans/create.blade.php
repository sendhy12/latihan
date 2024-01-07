@extends('karyawans.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Halaman Tambah Karyawan.</div>
  <div class="card-body">
      
    <form method="POST" action="{{ route('karyawans.store') }}">
      @csrf
      <div class="form-group">
          <br><label for="nik">NIK</label>
          <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}">
          @error('nik')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
          <br><label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
          @error('nama')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
          <br><label for="alamat">Alamat</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">
          @error('alamat')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
          <br><label for="no_telepon">No Telepon</label>
          <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon" value="{{ old('no_telepon') }}">
          @error('no_telepon')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
      <br><button type="submit" class="btn btn-primary">Submit</button>  
    </form>
   
    @if ($errors->any())
      <div class="alert alert-danger mt-3">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif

  </div>
</div>
 
@stop
