@extends('layouts.app')
@section('content')
<h1 class="h3">{{ $author->name }}</h1>
<p class="text-muted mb-1">{{ $author->email }}</p>
<p>{{ $author->bio }}</p>

<h2 class="h5 mt-4">Books</h2>
<ul class="list-group">
  @forelse($author->books as $b)
    <li class="list-group-item d-flex justify-content-between align-items-center">
      {{ $b->title }}
      <a href="{{ route('books.edit',$b) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
    </li>
  @empty
    <li class="list-group-item">No books yet.</li>
  @endforelse
</ul>
@endsection