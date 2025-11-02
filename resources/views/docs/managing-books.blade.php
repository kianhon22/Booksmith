<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{ route('docs.index') }}" class="mr-4 text-gray-600 hover:text-gray-900">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $doc['title'] }}</h2>
        </div>
    </x-slot>

    <div class="max-w-4xl mx-auto">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-8">
            <div class="prose dark:prose-invert max-w-none">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Managing Your Book Inventory</h3>
                
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    This guide will walk you through the process of adding, editing, and managing books in your inventory.
                </p>

                <!-- Step 1 -->
                <div class="mb-8 p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <span class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 text-white font-bold text-lg">1</span>
                        </div>
                        <div class="ml-4 flex-1">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">Adding a New Book</h4>
                            <ol class="list-decimal list-inside space-y-2 text-gray-600 dark:text-gray-400">
                                <li>Navigate to <strong>My Books</strong> from the sidebar menu</li>
                                <li>Click the <strong>"Add New Book"</strong> button</li>
                                <li>Fill in the required information:
                                    <ul class="list-disc list-inside ml-6 mt-2">
                                        <li><strong>Title:</strong> The book's full title</li>
                                        <li><strong>Author:</strong> Author's name</li>
                                        <li><strong>Category:</strong> Select appropriate category</li>
                                        <li><strong>Description:</strong> Detailed book description</li>
                                        <li><strong>Price:</strong> Set your selling price</li>
                                        <li><strong>Stock Quantity:</strong> Number of copies available</li>
                                        <li><strong>Condition:</strong> New or Used condition</li>
                                    </ul>
                                </li>
                                <li>Upload a cover image (optional but recommended)</li>
                                <li>Click <strong>"Create Book"</strong> to save</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="mb-8 p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <span class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 text-white font-bold text-lg">2</span>
                        </div>
                        <div class="ml-4 flex-1">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">Editing Existing Books</h4>
                            <ol class="list-decimal list-inside space-y-2 text-gray-600 dark:text-gray-400">
                                <li>Go to <strong>My Books</strong> page</li>
                                <li>Find the book you want to edit</li>
                                <li>Click the <strong>"Edit"</strong> button</li>
                                <li>Make your changes</li>
                                <li>Click <strong>"Update Book"</strong> to save changes</li>
                            </ol>
                            <div class="mt-4 p-4 bg-blue-50 dark:bg-blue-900/30 border border-blue-200 dark:border-blue-800 rounded">
                                <p class="text-sm text-blue-800 dark:text-blue-200">
                                    <strong>Tip:</strong> Regularly update stock quantities to reflect your actual inventory.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="mb-8 p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <span class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 text-white font-bold text-lg">3</span>
                        </div>
                        <div class="ml-4 flex-1">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">Managing Book Status</h4>
                            <p class="text-gray-600 dark:text-gray-400 mb-2">
                                Control whether books are visible for sale:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-gray-600 dark:text-gray-400">
                                <li><strong>Active Books:</strong> Visible to customers and available for purchase</li>
                                <li><strong>Inactive Books:</strong> Hidden from customers but remain in your inventory</li>
                            </ul>
                            <p class="mt-2 text-gray-600 dark:text-gray-400">
                                Toggle the status by editing the book and changing the "Is Active" checkbox.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="mb-8 p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <span class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 text-white font-bold text-lg">4</span>
                        </div>
                        <div class="ml-4 flex-1">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">Searching and Filtering</h4>
                            <p class="text-gray-600 dark:text-gray-400 mb-2">
                                Use the search and filter features on the My Books page to:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-gray-600 dark:text-gray-400">
                                <li>Search by title, author, ISBN, or description</li>
                                <li>Filter by category</li>
                                <li>Filter by active/inactive status</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Best Practices -->
                <div class="mt-8 p-6 bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-800 rounded-lg">
                    <h4 class="text-lg font-semibold text-green-900 dark:text-green-100 mb-3">Best Practices</h4>
                    <ul class="space-y-2 text-green-800 dark:text-green-200">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Use high-quality cover images to attract customers
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Write detailed, accurate descriptions
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Keep stock quantities up to date
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Select the most appropriate category for each book
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Set competitive prices based on book condition
                        </li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="mt-8 flex gap-4">
                    <a href="{{ route('seller.books.index') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        View My Books
                    </a>
                    <a href="{{ route('seller.books.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                        Add New Book
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

