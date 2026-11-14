<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bookCount = Book::count();
        $featuredCount = Book::where('is_featured', true)->count();

        return view('home', [
            'bookCount'     => $bookCount,
            'featuredCount' => $featuredCount,
        ]);
    }
}
