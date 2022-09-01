@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center"><b> Halaman About</b></h1>
    <h3 class="text-center">{{ $name }}</h3>
    <p><{{ $email }}</p>
    <img  src="img/{{ $image }}" alt="{{ $name }}" class="mx-auto d-block" width="250px" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
@endsection


