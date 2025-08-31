@extends('layouts.app')
@section('content')
<h1 class="h3 mb-3">New Author</h1>
<form method="POST" action="{{ route('authors.store') }}" class="card card-body">
  @csrf
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input name="name" value="{{ old('name') }}" class="form-control" required>
    @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Email (optional)</label>
    <input name="email" value="{{ old('email') }}" class="form-control">
    @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Bio</label>
    <textarea name="bio" class="form-control">{{ old('bio') }}</textarea>
  </div>
  <button class="btn btn-primary">Save</button>
  <a href="{{ route('authors.index') }}" class="btn btn-link">Cancel</a>
</form>
@endsection