<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::with('author')->latest()->paginate(10);
        return view('books.index', compact('books'));
    }

    public function create() {
        $authors = Author::orderBy('name')->get();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'author_id' => 'required|exists:authors,id',
            'title' => 'required|string|max:255',
            'published_year' => 'nullable|integer|min:0|max:'.date('Y'),
            'pages' => 'nullable|integer|min:1|max:5000',
        ]);
        Book::create($data);
        return redirect()->route('books.index')->with('success','Book created.');
    }

    public function show(Book $book) {
        $book->load('author');
        return view('books.show', compact('book'));
    }

    public function edit(Book $book) {
        $authors = Author::orderBy('name')->get();
        return view('books.edit', compact('book','authors'));
    }

    public function update(Request $request, Book $book) {
        $data = $request->validate([
            'author_id' => 'required|exists:authors,id',
            'title' => 'required|string|max:255',
            'published_year' => 'nullable|integer|min:0|max:'.date('Y'),
            'pages' => 'nullable|integer|min:1|max:5000',
        ]);
        $book->update($data);
        return redirect()->route('books.index')->with('success','Book updated.');
    }

    public function destroy(Book $book) {
        $book->delete();
        return redirect()->route('books.index')->with('success','Book deleted.');
    }
}