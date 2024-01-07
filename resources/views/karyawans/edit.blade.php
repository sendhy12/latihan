@extends('karyawans.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Halaman Edit Karyawan.</div>
  <div class="card-body">
      
      <form action="{{ url('karyawan/' .$karyawans->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$karyawans->id}}" id="id" />
        <div class="form-group">
        <label>NIK</label>
        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{$karyawans->nik}}">
        @error('nik')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div><br>
        <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{$karyawans->nama}}">
        @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div><br>
        <label>Alamat</label></br>
        <input type="text" name="alamat" id="alamat" value="{{$karyawans->alamat}}" class="form-control"></br>
        <label>No.Telepon</label></br>
        <input type="text" name="no_telepon" id="no_telepon" value="{{$karyawans->no_telepon}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
        @if ($errors->any())
          <div class="alert alert-danger mt-3">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
    </form>
   
  </div>
</div>
 
@stop