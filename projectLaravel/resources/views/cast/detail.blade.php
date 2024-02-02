@extends('layout.master')
@section('judul', 'Detail pemain')

@section('content')
<h1 class="text-primary"> {{ $castByid->name }}</h1>
<p>{{ $castByid->bio }}</p>
@endsection