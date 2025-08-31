@extends('layouts.app')
@section('content')
<h1 class="h3">{{ $book->title }}</h1>
<p class="mb-1">Author: <a href="{{ route('authors.show',$book->author) }}">{{ $book->author->name }}</a></p>
<p class="mb-1">Published: {{ $book->published_year }}</p>
<p class="mb-4">Pages: {{ $book->pages }}</p>
<a href="{{ route('books.edit',$book) }}" class="btn btn-secondary">Edit</a>
<a href="{{ route('books.index') }}" class="btn btn-link">Back</a>
@endsection