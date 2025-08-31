@extends('layouts.app')
@section('content')
<h1 class="h3 mb-3">Edit Author</h1>
<form method="POST" action="{{ route('authors.update',$author) }}" class="card card-body">
  @csrf @method('PUT')
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input name="name" value="{{ old('name',$author->name) }}" class="form-control" required>
    @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Email (optional)</label>
    <input name="email" value="{{ old('email',$author->email) }}" class="form-control">
    @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Bio</label>
    <textarea name="bio" class="form-control">{{ old('bio',$author->bio) }}</textarea>
  </div>
  <button class="btn btn-primary">Update</button>
  <a href="{{ route('authors.index') }}" class="btn btn-link">Cancel</a>
</form>
@endsection