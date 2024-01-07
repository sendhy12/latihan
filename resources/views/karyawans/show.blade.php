@extends('karyawans.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Karyawans Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <p class="card-text">NIK : {{ $karyawans->nik }}</p>
        <p class="card-text">Nama : {{ $karyawans->nama }}</p>
        <p class="card-text">Alamat : {{ $karyawans->alamat }}</p>
        <p class="card-text">No.Telepon : {{ $karyawans->no_telepon }}</p>
  </div>
       
    </hr>
  
  </div>
</div>