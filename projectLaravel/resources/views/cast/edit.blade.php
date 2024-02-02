@extends('layout.master')
@section('judul', 'edit pemain')

@section('content')
<form action="/cast/{{$castByid->id}}" method="POST">
    @method('put')
    @csrf
    <div class="form-group">
      <label >Nama</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$castByid->name}}">
      @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      <div class="form-group">
        <label >umur</label>
        <input type="text" class="form-control @error('umur') is-invalid @enderror" name="umur"value="{{$castByid->umur}}">
        @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Bio</label>
      <textarea name="bio" class="form-control" cols="30" rows="10">value="{{$castByid->bio}}"</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection