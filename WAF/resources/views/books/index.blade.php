@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1 class="h3 m-0">Books</h1>
  <a href="{{ route('books.create') }}" class="btn btn-primary">+ New Book</a>
</div>

<table class="table table-striped">
  <thead><tr><th>Title</th><th>Author</th><th>Year</th><th>Pages</th><th class="text-end">Actions</th></tr></thead>
  <tbody>
  @forelse($books as $b)
    <tr>
      <td><a href="{{ route('books.show',$b) }}">{{ $b->title }}</a></td>
      <td><a href="{{ route('authors.show',$b->author) }}">{{ $b->author->name }}</a></td>
      <td>{{ $b->published_year }}</td>
      <td>{{ $b->pages }}</td>
      <td class="text-end">
        <a href="{{ route('books.edit',$b) }}" class="btn btn-sm btn-secondary">Edit</a>
        <form action="{{ route('books.destroy',$b) }}" method="POST" class="d-inline"
              onsubmit="return confirm('Delete this book?')">
          @csrf @method('DELETE')
          <button class="btn btn-sm btn-danger">Delete</button>
        </form>
      </td>
    </tr>
  @empty
    <tr><td colspan="5">No books yet.</td></tr>
  @endforelse
  </tbody>
</table>

{{ $books->links() }}
@endsection