@extends('layout')

@section('content')

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="add-title">
        <h2>Update Book</h2>

        <h4>Title</h4>
        <div class="search-bar">
            <input type="text" name="title" placeholder="Enter title" value="{{ $book->title }}" required>
        </div>

        <h4>Author</h4>
        <div class="search-bar">
            <input type="text" name="author" placeholder="Enter author" value="{{ $book->author }}" required>
        </div>

        <h4>ISBN</h4>
        <div class="search-bar">
            <input type="text" name="isbn" placeholder="Enter ISBN" value="{{ $book->isbn }}" maxlength="13" required>
        </div>

        <h4>Stock</h4>
        <div class="search-bar">
            <input type="number" name="stock" placeholder="Enter stock" value="{{ $book->stock }}" min="0" required>
        </div>

        <h4>Price</h4>
        <div class="search-bar">
            <input type="text" name="price" placeholder="Enter price" value="{{ $book->price }}">
        </div>
    </div>

    <button type="submit" class="btn3">Submit</button>
    <button type="button" onclick="window.location='{{ route('books.index') }}'" class="btn4">Back</button>
</form>

@endsection