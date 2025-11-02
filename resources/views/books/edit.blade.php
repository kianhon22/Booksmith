<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{ route('books.index') }}" class="mr-4 text-gray-600 hover:text-gray-900">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Edit Book: {{ $book->title }}</h2>
        </div>
    </x-slot>

    <div class="max-w-4xl mx-auto">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
            <form method="POST" action="{{ route('books.update', $book) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Title -->
                    <div class="md:col-span-2">
                        <x-input-label for="title" :value="__('Title*')" />
                        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $book->title)" required />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <!-- Author -->
                    <div>
                        <x-input-label for="author" :value="__('Author*')" />
                        <x-text-input id="author" name="author" type="text" class="mt-1 block w-full" :value="old('author', $book->author)" required />
                        <x-input-error :messages="$errors->get('author')" class="mt-2" />
                    </div>

                    <!-- ISBN -->
                    <div>
                        <x-input-label for="isbn" :value="__('ISBN')" />
                        <x-text-input id="isbn" name="isbn" type="text" class="mt-1 block w-full" :value="old('isbn', $book->isbn)" />
                        <x-input-error :messages="$errors->get('isbn')" class="mt-2" />
                    </div>

                    <!-- Category -->
                    <div>
                        <x-input-label for="category_id" :value="__('Category*')" />
                        <select id="category_id" name="category_id" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                            <option value="">Select a category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                    </div>

                    <!-- Condition -->
                    <div>
                        <x-input-label for="condition" :value="__('Condition*')" />
                        <select id="condition" name="condition" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                            <option value="new" {{ old('condition', $book->condition) == 'new' ? 'selected' : '' }}>New</option>
                            <option value="used_like_new" {{ old('condition', $book->condition) == 'used_like_new' ? 'selected' : '' }}>Used - Like New</option>
                            <option value="used_good" {{ old('condition', $book->condition) == 'used_good' ? 'selected' : '' }}>Used - Good</option>
                            <option value="used_acceptable" {{ old('condition', $book->condition) == 'used_acceptable' ? 'selected' : '' }}>Used - Acceptable</option>
                        </select>
                        <x-input-error :messages="$errors->get('condition')" class="mt-2" />
                    </div>

                    <!-- Description -->
                    <div class="md:col-span-2">
                        <x-input-label for="description" :value="__('Description*')" />
                        <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>{{ old('description', $book->description) }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <!-- Price -->
                    <div>
                        <x-input-label for="price" :value="__('Price ($)*')" />
                        <x-text-input id="price" name="price" type="number" step="0.01" min="0" class="mt-1 block w-full" :value="old('price', $book->price)" required />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>

                    <!-- Stock Quantity -->
                    <div>
                        <x-input-label for="stock_quantity" :value="__('Stock Quantity*')" />
                        <x-text-input id="stock_quantity" name="stock_quantity" type="number" min="0" class="mt-1 block w-full" :value="old('stock_quantity', $book->stock_quantity)" required />
                        <x-input-error :messages="$errors->get('stock_quantity')" class="mt-2" />
                    </div>

                    <!-- Publication Year -->
                    <div>
                        <x-input-label for="publication_year" :value="__('Publication Year')" />
                        <x-text-input id="publication_year" name="publication_year" type="number" min="1000" :max="date('Y')" class="mt-1 block w-full" :value="old('publication_year', $book->publication_year)" />
                        <x-input-error :messages="$errors->get('publication_year')" class="mt-2" />
                    </div>

                    <!-- Publisher -->
                    <div>
                        <x-input-label for="publisher" :value="__('Publisher')" />
                        <x-text-input id="publisher" name="publisher" type="text" class="mt-1 block w-full" :value="old('publisher', $book->publisher)" />
                        <x-input-error :messages="$errors->get('publisher')" class="mt-2" />
                    </div>

                    <!-- Language -->
                    <div>
                        <x-input-label for="language" :value="__('Language*')" />
                        <x-text-input id="language" name="language" type="text" class="mt-1 block w-full" :value="old('language', $book->language)" required />
                        <x-input-error :messages="$errors->get('language')" class="mt-2" />
                    </div>

                    <!-- Pages -->
                    <div>
                        <x-input-label for="pages" :value="__('Number of Pages')" />
                        <x-text-input id="pages" name="pages" type="number" min="1" class="mt-1 block w-full" :value="old('pages', $book->pages)" />
                        <x-input-error :messages="$errors->get('pages')" class="mt-2" />
                    </div>

                    <!-- Cover Image -->
                    <div class="md:col-span-2">
                        <x-input-label for="cover_image" :value="__('Cover Image')" />
                        <input id="cover_image" name="cover_image" type="file" accept="image/*" class="mt-1 block w-full text-sm text-gray-900 dark:text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" />
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">JPG, PNG, GIF up to 2MB. Leave empty to keep current image.</p>
                        <x-input-error :messages="$errors->get('cover_image')" class="mt-2" />
                    </div>

                    <!-- Active Status -->
                    <div class="md:col-span-2">
                        <label class="flex items-center">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $book->is_active) ? 'checked' : '' }} class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" />
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Make this book active (visible for sale)</span>
                        </label>
                    </div>
                </div>

                <div class="flex items-center justify-end mt-6 gap-4">
                    <a href="{{ route('books.index') }}" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                        Cancel
                    </a>
                    <x-button :variant="'primary'">
                        Update Book
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

