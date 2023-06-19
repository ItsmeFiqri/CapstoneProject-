@extends('dashboard.layouts.main')

@section('container')
<div class="container mt-4">
        <h3>Welcome {{ auth()->user()->name }}</h3>
  </div>
@endsection