@extends('layout')

@section('content')

<div class="search">
    <div class="search-bar">
        <input type="text" placeholder="Search books" id="searchInput">
        <button class="btn1" onclick="searchBooks()">Search</button>
    </div>
    <button onclick="window.location='{{ route('books.create') }}'" class="btn2">New Book</button>
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
        </tr>
    </thead>
    <tbody id="booksTableBody">
        @forelse($books as $book)
            <tr>
                <!-- id changes when dellet -->
                <td>{{ $books->firstItem() + $loop->index }}</td> 

                <td><a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a></td>
                <td>{{ $book->author }}</td>
                <td>

                <button onclick="goToPage1({{ $book->id }})" class="button1">Detail</button>
                <button onclick="goToPage2({{ $book->id }})" class="button2">Update</button>

                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this book?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="button3">Delete</button>
                </form>

                </td>
            </tr>
        @empty
            <tr><td colspan="4">No books found.</td></tr>
        @endforelse
    </tbody>
</table>

<!-- Pagination -->

<div class="pagination-wrapper">
    <div class="pagination-info">
        Showing {{ $books->firstItem() }} to {{ $books->lastItem() }} of {{ $books->total() }} results.
    </div>
    <div class="pagination-links">
        {{ $books->links() }}
    </div>
</div>

@endsection