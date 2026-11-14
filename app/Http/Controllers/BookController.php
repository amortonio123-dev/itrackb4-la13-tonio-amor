<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the books with search, filters, and sorting.
     */
    public function index(Request $request)
    {
        $query = Book::query();

        // Search by Title or Author
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('title', 'like', "%{$searchTerm}%")
                  ->orWhere('author', 'like', "%{$searchTerm}%");
            });
        }

        // Category Filter — only apply if NOT empty
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Featured Filter — only apply if NOT empty
        if ($request->has('is_featured') && $request->is_featured !== '') {
            $query->where('is_featured', $request->is_featured);
        }

        // Sorting — Safe allowed columns only
        $allowedSorts = ['title', 'author', 'year'];
        $sortBy = $request->query('sort_by', 'title');
        if (!in_array($sortBy, $allowedSorts)) {
            $sortBy = 'title';
        }
        $query->orderBy($sortBy);

        // Pagination — preserves query parameters across pages
        $books = $query->paginate(5)->withQueryString();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new book.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created book in the database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|max:150',
            'author'      => 'required|max:100',
            'year'        => 'required|numeric|min:1000|max:2026',
            'category'    => 'required|in:Fantasy,Classic,Romance',
            'is_featured' => 'required|boolean',
            'description' => 'nullable|string',
        ]);

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Book added successfully!');
    }

    /**
     * Display the specified book.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }
}
