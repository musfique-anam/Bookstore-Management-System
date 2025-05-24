@extends('layout')

@section('content')

<div class="add-title"><h2>New Book</h2></div>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div class="add-title">
        <h4>Title</h4>
        <div class="search-bar">
            <input type="text" name="title" placeholder="Enter title" value="{{ old('title') }}" required>
        </div>

        <h4>Author</h4>
        <div class="search-bar">
            <input type="text" name="author" placeholder="Enter author" value="{{ old('author') }}" required>
        </div>

        <h4>ISBN</h4>
        <div class="search-bar">
            <input type="text" name="isbn" placeholder="Enter ISBN" value="{{ old('isbn') }}" maxlength="13">
        </div>

        <h4>Stock</h4>
        <div class="search-bar">
            <input type="number" name="stock" placeholder="Enter stock" value="{{ old('stock', 0) }}" min="0">
        </div>

        <h4>Price</h4>
        <div class="search-bar">
            <input type="number" step="0.01" name="price" placeholder="Enter price" value="{{ old('price') }}">
        </div>
    </div>

    <button type="submit" class="btn3">Submit</button>
    <button type="button" onclick="window.location='{{ route('books.index') }}'" class="btn4">Back</button>
</form>

@endsection