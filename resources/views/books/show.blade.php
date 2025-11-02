<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Book Details') }}
            </h2>
            <a href="{{ route('books.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                Back to Catalogue
            </a>
        </div>
    </x-slot>

    <div class=" mx-auto sm:px-6 lg:px-8 space-y-6">
        <!-- Book Details -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Book Cover -->
                    <div class="md:col-span-1">
                        @if($book->getFirstMediaUrl('book_covers'))
                            <img src="{{ $book->getFirstMediaUrl('book_covers') }}" alt="{{ $book->title }}" class="w-full rounded-lg shadow-lg">
                        @else
                            <div class="w-full h-96 bg-gray-200 rounded-lg flex items-center justify-center shadow-lg">
                                <svg class="h-24 w-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                        @endif
                    </div>

                    <!-- Book Information -->
                    <div class="md:col-span-2 space-y-6">
                        <div>
                            <h1 class="text-3xl font-bold text-black">{{ $book->title }}</h1>
                            <p class="mt-2 text-xl text-gray-600">by {{ $book->author }}</p>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Category</p>
                                    <p class="mt-1 text-sm text-black">{{ $book->category->name }}</p>
                                </div>
                                @if($book->publisher)
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Publisher</p>
                                        <p class="mt-1 text-sm text-black">{{ $book->publisher }}</p>
                                    </div>
                                @endif
                                @if($book->publication_year)
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Publication Year</p>
                                        <p class="mt-1 text-sm text-black">{{ $book->publication_year }}</p>
                                    </div>
                                @endif
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Language</p>
                                    <p class="mt-1 text-sm text-black">{{ $book->language }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <p class="text-sm font-medium text-gray-500">Description</p>
                            <p class="mt-2 text-sm text-black leading-relaxed">{{ $book->description }}</p>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Price</p>
                                    <p class="mt-1 text-4xl font-bold text-indigo-600">RM {{ number_format($book->price, 2) }}</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-500">Availability</p>
                                    <p class="mt-1 text-sm {{ $book->stock > 0 ? 'text-green-600' : 'text-red-600' }}">
                                        {{ $book->stock > 0 ? $book->stock . ' in stock' : 'Out of stock' }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <p class="text-sm font-medium text-gray-500">Sold By</p>
                            <p class="mt-1 text-sm text-black">{{ $book->seller->business_name }}</p>
                        </div>

                        @if(!auth()->user()->hasRole('admin') && $book->seller_id !== auth()->id() && $book->stock > 0)
                            <div class="border-t border-gray-200 pt-4">
                                <button class="w-full inline-flex justify-center items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-indigo-700">
                                    Add to Cart (Coming Soon)
                                </button>
                            </div>
                        @elseif(!auth()->user()->hasRole('admin') && $book->seller_id === auth()->id())
                            <div class="border-t border-gray-200 pt-4">
                                <p class="text-sm text-gray-500 text-center">This is your book</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Books -->
        @if($relatedBooks->count() > 0)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-black mb-4">Related Books</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($relatedBooks as $relatedBook)
                            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                                <a href="{{ route('books.show', $relatedBook) }}">
                                    @if($relatedBook->getFirstMediaUrl('book_covers'))
                                        <img src="{{ $relatedBook->getFirstMediaUrl('book_covers') }}" alt="{{ $relatedBook->title }}" class="w-full h-48 object-cover">
                                    @else
                                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                            <svg class="h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                            </svg>
                                        </div>
                                    @endif
                                </a>
                                <div class="p-4">
                                    <a href="{{ route('books.show', $relatedBook) }}">
                                        <h4 class="text-sm font-semibold text-black hover:text-indigo-600">{{ Str::limit($relatedBook->title, 30) }}</h4>
                                    </a>
                                    <p class="mt-1 text-xs text-gray-600">{{ $relatedBook->author }}</p>
                                    <p class="mt-2 text-lg font-bold text-indigo-600">RM {{ number_format($relatedBook->price, 2) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-app-layout>

