<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Book') }}
            </h2>
            <a href="{{ route('book-management.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                Back
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('book-management.update', $book) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="md:col-span-2">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title <span class="text-red-500">*</span></label>
                                <input type="text" name="title" id="title" value="{{ old('title', $book->title) }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('title') border-red-500 @enderror">
                                @error('title')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label for="author" class="block text-sm font-medium text-gray-700">Author <span class="text-red-500">*</span></label>
                                <input type="text" name="author" id="author" value="{{ old('author', $book->author) }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('author') border-red-500 @enderror">
                                @error('author')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label for="category_id" class="block text-sm font-medium text-gray-700">Category <span class="text-red-500">*</span></label>
                                <select name="category_id" id="category_id" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('category_id') border-red-500 @enderror">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700">Price <span class="text-red-500">*</span></label>
                                <input type="number" name="price" id="price" step="0.01" min="0.01" value="{{ old('price', $book->price) }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('price') border-red-500 @enderror">
                                @error('price')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label for="stock" class="block text-sm font-medium text-gray-700">Stock <span class="text-red-500">*</span></label>
                                <input type="number" name="stock" id="stock" min="0" value="{{ old('stock', $book->stock) }}" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('stock') border-red-500 @enderror">
                                @error('stock')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label for="publisher" class="block text-sm font-medium text-gray-700">Publisher</label>
                                <input type="text" name="publisher" id="publisher" value="{{ old('publisher', $book->publisher) }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div>
                                <label for="publication_year" class="block text-sm font-medium text-gray-700">Publication Year</label>
                                <input type="number" name="publication_year" id="publication_year" min="1000" max="{{ date('Y') + 1 }}" value="{{ old('publication_year', $book->publication_year) }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div>
                                <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
                                <input type="text" name="language" id="language" value="{{ old('language', $book->language) }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="md:col-span-2">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description <span class="text-red-500">*</span></label>
                                <textarea name="description" id="description" rows="4" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('description') border-red-500 @enderror">{{ old('description', $book->description) }}</textarea>
                                @error('description')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>

                            <div class="md:col-span-2">
                                <label for="cover_image" class="block text-sm font-medium text-gray-700">Cover Image</label>
                                @if($book->getFirstMediaUrl('book_covers'))
                                    <img src="{{ $book->getFirstMediaUrl('book_covers') }}" alt="{{ $book->title }}" class="mt-2 w-32 h-48 object-cover rounded">
                                @endif
                                <input type="file" name="cover_image" id="cover_image" accept="image/*" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="md:col-span-2">
                                <label class="flex items-center">
                                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $book->is_active) ? 'checked' : '' }} class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <span class="ml-2 text-sm text-gray-600">Active</span>
                                </label>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end space-x-2">
                            <a href="{{ route('book-management.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400">
                                Cancel
                            </a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                                Update Book
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

