<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller{

    // Show all books on the homepage
    public function index(){
        $books = Book::paginate(50); 

        return view('books.index', compact('books'));
    }

    // Update an existing book with validated form data
    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
        ]);

        $book = Book::findOrFail($id);

        $book->title = $request->input('title');
        $book->author = $request->input('author');

        $book->save();

        return redirect()->route('books.index');
    }

    // Show the form to create a new book
    public function create(){
        return view('books.create'); 
    }

    // Store the new book in the database
    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'nullable|string|max:13',
            'stock' => 'nullable|integer|min:0',
            'price' => 'nullable|numeric|min:0',
        ]);

        Book::create($validated);

        return redirect()->route('books.index');
    }

    // Show edit form for a book
    public function edit($id){
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    // Show book details by ID
    public function show($id){
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    // Delete book by ID and redirect
    public function destroy($id){
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index');
    }
    
}