@extends('dashboard.layouts.main')

@section('container')
<div class="container mt-4">
        <h3>My Posts</h3>
        <table class="table">
  <thead class="table-light">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>File</th>
        <th>Deskripsi</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->nim }}</td>
        <td>{{ $post->name }}</td>
        <td>{{ $post->tugas }}</td>
        <td>{{ $post->deskripsi }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
@endsection