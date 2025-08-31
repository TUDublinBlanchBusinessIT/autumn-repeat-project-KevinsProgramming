<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        $authors = Author::latest()->paginate(10);
        return view('authors.index', compact('authors'));
    }

    public function create() { return view('authors.create'); }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:authors,email',
            'bio' => 'nullable|string',
        ]);
        Author::create($data);
        return redirect()->route('authors.index')->with('success','Author created.');
    }

    public function show(Author $author) {
        $author->load('books');
        return view('authors.show', compact('author'));
    }

    public function edit(Author $author) { return view('authors.edit', compact('author')); }

    public function update(Request $request, Author $author) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:authors,email,'.$author->id,
            'bio' => 'nullable|string',
        ]);
        $author->update($data);
        return redirect()->route('authors.index')->with('success','Author updated.');
    }

    public function destroy(Author $author) {
        $author->delete();
        return redirect()->route('authors.index')->with('success','Author deleted.');
    }
}