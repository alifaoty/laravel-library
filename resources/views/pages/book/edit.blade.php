@extends('layouts.app')
@section('title', 'Edit Book Data')

@section('content')
<form action = "{{ route('buku.update', $books->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')

  <div class="mb-3">
    <label class="form-label">Book Title</label> 
    <input type="text" class="form-control @error('title')
    is-invalid 
    @enderror"
      name="title" value="{{ $books->title}}">
    @error('title') 
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Author</label> 
    <input type="text" class="form-control @error('author')
    is-invalid 
    @enderror"
      name="author" value="{{ $books->author}}">
    @error('author') 
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Book Publisher</label> 
    <input type="text" class="form-control @error('publisher')
    is-invalid 
    @enderror"
      name="publisher" value="{{ $books->publisher}}">
    @error('publisher') 
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Published On</label> 
    <input type="text" class="form-control @error('date_of_issue')
    is-invalid 
    @enderror"
      name="date_of_issue" value="{{ $books->date_of_issue}}">
    @error('date_of_issue') 
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">ISBN</label> 
    <input type="text" class="form-control @error('isbn')
    is-invalid 
    @enderror"
      name="isbn" value="{{ $books->isbn}}">
    @error('isbn') 
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Book Cover</label>
    <input type="file" class="form-control @error('cover')
    is-invalid 
    @enderror"
      name="cover">
    @error('cover')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Premise</label>
    <textarea class="form-control @error('premis')
    is-invalid
    @enderror" 
    name="premis" value="{{ $books->premis}}">
    </textarea>
    @error('premis')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Genre</label>
    <p> Old Genre: {{ $books->genre}}</p>
    <select class="form-select @error('genre') 
    is-invalid
    @enderror" name="genre">
    <option selected disabled>Choose Genre</option>
        <option value="Novel">Romance</option>
        <option value="Komik">Fantasy</option> 
        <option value="Biografi">Science Fiction(Sci-Fi)</option>
        <option value="Ensiklopedia">Horror</option>
        <option value="Majalah">Mystery</option>
        <option value="Biografi">Thriller</option>
        <option value="Ensiklopedia">Comedy</option>
        <option value="Majalah">History</option>
        <option value="Biografi">Psychology</option>
        <option value="Ensiklopedia">Saga or Family</option>
        <option value="Majalah">Adventure</option>
        <option value="Lainnya">Other</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Edit Book Data</button>

</form>
@endsection