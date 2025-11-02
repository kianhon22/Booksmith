<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->user()->cannot('manage-categories')) {
            abort(403, 'Unauthorized action.');
        }

        $query = Category::withCount('books');

        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%");
        }

        if ($request->has('status') && $request->status !== 'all') {
            $query->where('is_active', $request->status === 'active');
        }

        $categories = $query->latest()->paginate(15);

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        if (auth()->user()->cannot('manage-categories')) {
            abort(403, 'Unauthorized action.');
        }

        return view('categories.create');
    }

    public function store(Request $request)
    {
        if (auth()->user()->cannot('manage-categories')) {
            abort(403, 'Unauthorized action.');
        }

        $record = $request->validate([
            'name' => 'required|string',
        ]);

        Category::create($record);

        return redirect()->route('categories.index')
            ->with('success', 'Category created successfully.');
    }

    public function show(Category $category)
    {
        if (auth()->user()->cannot('manage-categories')) {
            abort(403, 'Unauthorized action.');
        }

        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        if (auth()->user()->cannot('manage-categories')) {
            abort(403, 'Unauthorized action.');
        }

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        if (auth()->user()->cannot('manage-categories')) {
            abort(403, 'Unauthorized action.');
        }

        $record = $request->validate([
            'name' => 'required|string',
        ]);

        $category->update($record);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        if (auth()->user()->cannot('manage-categories')) {
            abort(403, 'Unauthorized action.');
        }
        
        if ($category->books()->count() > 0) {
            return back()->with('error', 'Cannot delete category with books.');
        }

        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}

