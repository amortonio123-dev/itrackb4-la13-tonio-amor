@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="row align-items-center mb-5">
    <div class="col-md-4 text-center">
        <img src="{{ asset('img/profile.jpg') }}" alt="Profile" width="150" height="150" class="rounded-circle mb-3">
        <p class="mb-0"><strong>Amor Tonio</strong></p>
        <p class="mb-0">BS Information Technology</p>
        <p class="mb-0">Year 4 — Block 4A</p>
    </div>
    <div class="col-md-8">
        <h2>Discover and Manage Your Personal Library</h2>
        <p class="lead">Welcome to Book App — your simple and elegant solution for keeping track of the books you own, have read, or want to read. Browse your collection, mark favorites, and find your next great read.</p>
        <a href="{{ route('books.index') }}" class="btn btn-primary btn-lg">View My Library</a>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-body">
                <h3>{{ $bookCount }}</h3>
                <p class="text-muted">Total Books</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-body">
                <h3>{{ $featuredCount }}</h3>
                <p class="text-muted">Featured Books</p>
            </div>
        </div>
    </div>
</div>
@endsection
