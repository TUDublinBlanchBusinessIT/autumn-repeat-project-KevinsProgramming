@extends('layouts.app')
@section('content')
<h1 class="h3 mb-3">Edit Book</h1>
<form method="POST" action="{{ route('books.update',$book) }}" class="card card-body">
  @csrf @method('PUT')
  <div class="mb-3">
    <label class="form-label">Title</label>
    <input name="title" value="{{ old('title',$book->title) }}" class="form-control" required>
    @error('title')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Author</label>
    <select name="author_id" class="form-select" required>
      @foreach($authors as $a)
        <option value="{{ $a->id }}" @selected(old('author_id',$book->author_id)==$a->id)>{{ $a->name }}</option>
      @endforeach
    </select>
    @error('author_id')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Published Year</label>
    <input type="number" name="published_year" value="{{ old('published_year',$book->published_year) }}" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Pages</label>
    <input type="number" name="pages" value="{{ old('pages',$book->pages) }}" class="form-control">
  </div>
  <button class="btn btn-primary">Update</button>
  <a href="{{ route('books.index') }}" class="btn btn-link">Cancel</a>
</form>
@endsection