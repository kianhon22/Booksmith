<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Book Details') }}
            </h2>
            <div class="flex space-x-2">
                <a href="{{ route('book-management.edit', [$book=>'book_management']) }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                    Edit
                </a>
                <a href="{{ route('book-management.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                    Back
                </a>
            </div>
        </div>
    </x-slot>

    <div class=" mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="md:col-span-1">
                        @if($book->getFirstMediaUrl('book_covers'))
                            <img src="{{ $book->getFirstMediaUrl('book_covers') }}" alt="{{ $book->title }}" class="w-full rounded-lg shadow-md">
                        @else
                            <div class="w-full h-96 bg-gray-200 rounded-lg flex items-center justify-center">
                                <span class="text-gray-400">No Cover Image</span>
                            </div>
                        @endif
                    </div>
                    <div class="md:col-span-2 space-y-4">
                        <div>
                            <h3 class="text-2xl font-bold text-black">{{ $book->title }}</h3>
                            <p class="text-lg text-gray-600">by {{ $book->author }}</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Category</p>
                                <p class="mt-1 text-sm text-black">{{ $book->category->name }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">Price</p>
                                <p class="mt-1 text-2xl font-bold text-indigo-600">RM {{ number_format($book->price, 2) }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">Stock</p>
                                <p class="mt-1 text-sm text-black">{{ $book->stock }} available</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">Publisher</p>
                                <p class="mt-1 text-sm text-black">{{ $book->publisher ?? 'N/A' }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">Publication Year</p>
                                <p class="mt-1 text-sm text-black">{{ $book->publication_year ?? 'N/A' }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">Language</p>
                                <p class="mt-1 text-sm text-black">{{ $book->language }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">Status</p>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $book->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $book->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">Total Sales</p>
                                <p class="mt-1 text-sm text-black">{{ $book->orderItems()->count() }} orders</p>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Description</p>
                            <p class="mt-1 text-sm text-black">{{ $book->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

