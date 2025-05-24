@extends('layout')

@section('content')

<div class="button-group">
    <button class="back-btn" onclick="window.location='{{ route('books.index') }}'">Back</button>
    <button class="edit-btn" onclick="window.location='{{ route('books.edit', $book->id) }}'">Edit</button>
</div>

<div class="add-title">
    <h2>Book Details</h2>
    <table class="info-table">
        <tr><td>ID</td><td>{{ $book->id }}</td></tr>
        <tr><td>Title</td><td>{{ $book->title }}</td></tr>
        <tr><td>Author</td><td>{{ $book->author }}</td></tr>
        <tr><td>ISBN</td><td>{{ $book->isbn }}</td></tr>
        <tr><td>Price</td><td>${{ number_format($book->price, 2) }}</td></tr>
        <tr><td>Stock</td><td>{{ $book->stock }}</td></tr>
    </table>
</div>

@endsection