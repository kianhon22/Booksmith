<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookManagementController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::with('category', 'seller');

        // Sellers only see their own books
        if (Auth::user()->hasRole('seller')) {
            $query->where('seller_id', Auth::id());
        }

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('author', 'like', "%{$search}%")
                    ->orWhere('publisher', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        if ($request->has('category_id') && $request->category_id !== 'all') {
            $query->where('category_id', $request->category_id);
        }

        if ($request->has('status') && $request->status !== 'all') {
            $query->where('is_active', $request->status === 'active');
        }

        $books = $query->latest()->paginate(15);
        $categories = Category::where('is_active', true)->get();

        return view(Auth::user()->hasRole('admin') ? 'admin.book-management.index' : 'seller.book-management.index', compact('books', 'categories'));
    }

    public function create()
    {
        $categories = Category::where('is_active', true)->get();
        return view('seller.book-management.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $record = $request->validate([
            'category_id'      => 'required',
            'title'            => 'required|string',
            'author'           => 'required|string',
            'description'      => 'required|string',
            'price'            => 'required|numeric',
            'stock'            => 'required|integer',
            'publication_year' => 'nullable',
            'publisher'        => 'nullable',
            'language'         => 'required',
            'cover_image'      => 'nullable|image',
        ]);

        $book = Auth::user()->books()->create($record);

        if ($request->hasFile('cover_image')) {
            $book->addMediaFromRequest('cover_image')->toMediaCollection('book_covers');
        }

        return redirect()->route('book-management.index')->with('success', 'Book created successfully.');
    }

    public function show(Book $book)
    {
        // Sellers can only view their own books
        if (Auth::user()->hasRole('seller') && $book->seller_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $book->load(['category', 'orderItems.order']);

        return view(Auth::user()->hasRole('admin') ? 'admin.book-management.show' : 'seller.book-management.show', compact('book'));
    }

    public function edit(Book $book)
    {
        // Sellers can only edit their own books
        if (Auth::user()->hasRole('seller') && $book->seller_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $categories = Category::where('is_active', true)->get();
        return view(Auth::user()->hasRole('admin') ? 'admin.book-management.edit' : 'seller.book-management.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        // Sellers can only update their own books
        if (Auth::user()->hasRole('seller') && $book->seller_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $record = $request->validate([
            'category_id'      => 'required',
            'title'            => 'required|string',
            'author'           => 'required|string',
            'description'      => 'required|string',
            'price'            => 'required|numeric',
            'stock'            => 'required|integer',
            'publication_year' => 'nullable',
            'publisher'        => 'nullable',
            'language'         => 'required',
            'cover_image'      => 'nullable|image',
            'is_active'        => 'boolean',
        ]);

        $book->update($record);

        if ($request->hasFile('cover_image')) {
            $book->clearMediaCollection('book_covers');
            $book->addMediaFromRequest('cover_image')->toMediaCollection('book_covers');
        }

        return redirect()->route('book-management.index')->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        // Sellers can only delete their own books
        if (Auth::user()->hasRole('seller') && $book->seller_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        // Check if book has orders
        if ($book->orderItems()->count() > 0) {
            return back()->with('error', 'Cannot delete book with existing orders.');
        }

        $book->clearMediaCollection('book_covers');
        $book->delete();

        return redirect()->route('book-management.index')->with('success', 'Book deleted successfully.');
    }
}

