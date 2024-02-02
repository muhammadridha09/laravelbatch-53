@extends('layout.master')
@section('judul', 'list data pemain')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nama</th>
        <th scope="col">umur</th>
        <th scope="col">aksi</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($cast as $keys => $items )
    <tr>
        <th scope="row">{{$keys + 1}}</th>
        <td>{{$items -> name}}</td>
        <td>{{$items -> umur}}</td>
        <td>
       
        <form action="/cast/{{$items->id}}" method="POST">
            @csrf
            @method('delete')
            <a href="/cast/{{$items->id}}"class="btn btn-info btn-sm">Detail</a>
            <a href="/cast/{{$items->id}}/edit"class="btn btn-warning btn-sm">Updete</a>
            <button type="submit" class="btn btn-danger btn-sm">delete</button>
        </form>
        </td>
      </tr>   
    @empty
        
    @endforelse
     
      
    
    </tbody>
  </table>
@endsection