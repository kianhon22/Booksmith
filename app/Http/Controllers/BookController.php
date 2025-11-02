<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::with('category', 'seller')
            ->where('is_active', true)
            ->where('stock', '>', 0);

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('author', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('publisher', 'like', "%{$search}%");
            });
        }

        if ($request->has('category_id') && $request->category_id !== 'all') {
            $query->where('category_id', $request->category_id);
        }

        $books = $query->latest()->paginate(20);
        $categories = Category::where('is_active', true)->get();

        return view('books.index', compact('books', 'categories'));
    }

    public function show(Book $book)
    {
        $book->load(['category', 'seller']);
        
        $relatedBooks = Book::where('category_id', $book->category_id)
            ->where('id', '!=', $book->id)
            ->where('is_active', true)
            ->where('stock', '>', 0)
            ->get();

        return view('books.show', compact('book', 'relatedBooks'));
    }
}
