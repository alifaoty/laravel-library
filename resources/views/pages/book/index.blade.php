@extends('layouts.app')
@section('title', 'Book Data')

@section('content')
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Book Title</th>
      <th scope="col">Author</th>
      <th scope="col">Book Publisher</th>
      <th scope="col">Published On</th>
      <th scope="col">ISBN</th>
      <th scope="col">Cover Book</th>
      <th scope="col">Premise</th>
      <th scope="col">Genre</th>
      @if(Auth::user()->role == 'admin')
      <th scope="col">Action</th>
      @endif
    </tr>
  </thead>
  <tbody>
    @foreach ($books as $book)
    <tr>
      <th scope="row">{{ $book-> id }}</th>
      <td>{{ $book-> title }}</td>
      <td>{{ $book-> author }}</td>
      <td>{{ $book-> publisher }}</td>
      <td>{{ $book-> date_of_issue }}</td>
      <td>{{ $book-> isbn }}</td>
      <td>
        <img src="{{ asset('storage/' . $book-> cover) }}" alt=" {{$book-> title}}" width="100px"> 
      </td>
      <td>{{ $book-> premis }}</td>
      <td>{{ $book-> genre }}</td>
      <td nowrap> 
        @if(Auth::user()->role == 'admin')
        <a href="{{ route('buku.edit', $book->id) }}" class="btn btn-sm btn-warning">Edit</a> 
        @endif
        <form action="{{ route('buku.destroy', $book->id) }}" method="POST" class="d-inline">
          @csrf
          @method('delete') 
          @if(Auth::user()->role == 'admin')
          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
          @endif
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
  </table>
  @if(Auth::user()->role == 'admin')
  <a href="{{ route('buku.create') }}">
    <button class="btn btn-primary">Add Data Book</button>
  </a>
  @endif
@endsection