@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1 class="h3 m-0">Authors</h1>
  <a href="{{ route('authors.create') }}" class="btn btn-primary">+ New Author</a>
</div>

<table class="table table-striped">
  <thead><tr><th>Name</th><th>Email</th><th class="text-end">Actions</th></tr></thead>
  <tbody>
  @forelse($authors as $a)
    <tr>
      <td><a href="{{ route('authors.show',$a) }}">{{ $a->name }}</a></td>
      <td>{{ $a->email }}</td>
      <td class="text-end">
        <a href="{{ route('authors.edit',$a) }}" class="btn btn-sm btn-secondary">Edit</a>
        <form action="{{ route('authors.destroy',$a) }}" method="POST" class="d-inline"
              onsubmit="return confirm('Delete this author?')">
          @csrf @method('DELETE')
          <button class="btn btn-sm btn-danger">Delete</button>
        </form>
      </td>
    </tr>
  @empty
    <tr><td colspan="3">No authors yet.</td></tr>
  @endforelse
  </tbody>
</table>

{{ $authors->links() }}
@endsection