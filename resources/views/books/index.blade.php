@extends('layouts.app')

@section('title', 'Books')

@section('content')
<h1 class="mb-4">Books</h1>

{{-- Search & Filters --}}
<form action="{{ route('books.index') }}" method="GET" class="mb-4">
    <div class="row g-3 align-items-end">
        {{-- Search --}}
        <div class="col-md-3">
            <label class="form-label">Search</label>
            <input type="text" name="search" class="form-control" 
                   placeholder="Title or Author..." 
                   value="{{ request('search') }}">
        </div>

        {{-- Category --}}
        <div class="col-md-2">
            <label class="form-label">Category</label>
            <select name="category" class="form-select">
                <option value="">All Categories</option>
                <option value="Fantasy" @selected(request('category') === 'Fantasy')>Fantasy</option>
                <option value="Classic" @selected(request('category') === 'Classic')>Classic</option>
                <option value="Romance" @selected(request('category') === 'Romance')>Romance</option>
            </select>
        </div>

        {{-- Featured --}}
        <div class="col-md-2">
            <label class="form-label">Featured</label>
            <select name="is_featured" class="form-select">
                <option value="">Any</option>
                <option value="1" @selected(request('is_featured') === '1')>Yes</option>
                <option value="0" @selected(request('is_featured') === '0')>No</option>
            </select>
        </div>

        {{-- Sort By --}}
        <div class="col-md-2">
            <label class="form-label">Sort By</label>
            <select name="sort_by" class="form-select">
                <option value="title" @selected(request('sort_by', 'title') === 'title')>Title</option>
                <option value="author" @selected(request('sort_by') === 'author')>Author</option>
                <option value="year" @selected(request('sort_by') === 'year')>Year</option>
            </select>
        </div>

        {{-- Buttons --}}
        <div class="col-md-3 d-flex gap-2">
            <button type="submit" class="btn btn-primary">Apply</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Clear</a>
        </div>
    </div>
</form>

{{-- Book Table --}}
<h3 class="mb-3">All Books</h3>

@if($books->isEmpty())
    <div class="alert alert-warning">
        No books found.
    </div>
@else
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>Category</th>
                <th>Featured</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->year }}</td>
                <td>{{ $book->category }}</td>
                <td>{{ $book->is_featured ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-info">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif

{{-- Pagination Links --}}
<div class="d-flex justify-content-center">
    {{ $books->links() }}
</div>

<div class="text-center my-4">
    <a href="{{ route('books.create') }}" class="btn btn-success">+ Add Book</a>
</div>

<p class="text-center mt-5">Prepared by: Amor Tonio</p>
@endsection
