@extends('dashboard.layouts.main')

@section('container')
<div class="container mt-4">
        <h3>Input Tugas</h3>
  <div class="col-lg-8">
  <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="nim" class="form-label">Nim</label>
    <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukan Nim Anda" value="{{ old('nim') }}" require autofocus>
    @error('nim') 
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror    
</div>
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan Nama Anda" require value="{{ old('name') }}">
    @error('name') 
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror       
</div>
    <div class="mb-3">
        <label for="formFile" class="form-label">File PDF</label>
        <input class="form-control @error('tugas') is-invalid @enderror" name="tugas" type="file" id="formFile" require >
        @error('tugas') 
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror   
    </div>
    <div class="mb-3">
    <div class="form-floating">
  <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="Keterangan tugas" id="floatingTextarea2" style="height: 100px" require value="{{ old('deskripsi') }}"></textarea>
  <label for="floatingTextarea2">Keterangan Tugas</label>
  @error('tugas') 
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror   
</div>
    </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form> 
  </div>
    </div>
@endsection