@extends('layouts.main')

@section('container')
    <h1>Tentang</h1>
    <h2>{{ $name }}</h2>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" width="200" alt="{{ $name }}" class="img-thumbnail rounded-circle">
@endsection