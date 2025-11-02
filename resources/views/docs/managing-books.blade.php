<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{ route('docs.index') }}" class="mr-4 text-gray-600 hover:text-indigo-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="text-2xl font-bold text-gray-900">Managing Books</h2>
        </div>
    </x-slot>

    <div class=" mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-sm p-8">
            <div class="prose max-w-none">
                <!-- Introduction -->
                <div class="mb-10">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Managing Your Book Inventory 📚</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        This comprehensive guide will walk you through adding, editing, and managing books in your inventory. Whether you're a new seller or looking to optimize your listings, these steps will help you succeed.
                    </p>
                </div>

                <!-- Step 1: Adding Books -->
                <div class="mb-10 p-8 bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-6">1</div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-blue-900 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Adding a New Book
                            </h4>
                            <div class="bg-white p-6 rounded-lg shadow-md mb-4">
                                <ol class="space-y-4 text-gray-700">
                                    <li class="flex items-start">
                                        <span class="font-bold text-blue-600 mr-2">Step 1:</span>
                                        <span>Navigate to <strong>Book Management</strong> or <strong>My Books</strong> from the sidebar menu</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="font-bold text-blue-600 mr-2">Step 2:</span>
                                        <span>Click the <strong>"Add New Book"</strong> button or card</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="font-bold text-blue-600 mr-2">Step 3:</span>
                                        <span>Fill in the required information:</span>
                                    </li>
                                </ol>
                                <div class="mt-4 ml-6 p-4 bg-gray-50 rounded-lg">
                                    <ul class="space-y-2 text-sm text-gray-700">
                                        <li class="flex items-start">
                                            <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <strong>Title:</strong> The book's full title (required)
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <strong>Author:</strong> Author's full name (required)
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <strong>Category:</strong> Select appropriate category (required)
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <strong>Description:</strong> Detailed book description (recommended)
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <strong>Price:</strong> Set your selling price (required)
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <strong>Stock:</strong> Number of copies available (default: 1)
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <strong>Cover Image:</strong> Upload book cover (recommended)
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-4 flex items-start">
                                    <span class="font-bold text-blue-600 mr-2">Step 4:</span>
                                    <span>Click <strong>"Create Book"</strong> to save your listing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Editing Books -->
                <div class="mb-10 p-8 bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-xl">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-14 h-14 bg-green-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-6">2</div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-green-900 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                                Editing Existing Books
                            </h4>
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <ol class="space-y-3 text-gray-700">
                                    <li class="flex items-start">
                                        <span class="font-bold text-green-600 mr-2">1.</span>
                                        <span>Go to <strong>Book Management</strong> or <strong>My Books</strong> page</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="font-bold text-green-600 mr-2">2.</span>
                                        <span>Find the book you want to edit using search or filters</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="font-bold text-green-600 mr-2">3.</span>
                                        <span>Click the <strong>"Edit"</strong> button for that book</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="font-bold text-green-600 mr-2">4.</span>
                                        <span>Update any fields you want to change</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="font-bold text-green-600 mr-2">5.</span>
                                        <span>Click <strong>"Update Book"</strong> to save your changes</span>
                                    </li>
                                </ol>
                                <div class="mt-4 p-4 bg-blue-50 border-l-4 border-blue-500 rounded">
                                    <p class="text-sm text-blue-800">
                                        <strong>💡 Tip:</strong> Regularly update stock quantities to reflect your actual inventory. This prevents overselling and improves customer satisfaction.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Managing Status -->
                <div class="mb-10 p-8 bg-gradient-to-br from-purple-50 to-pink-50 border-2 border-purple-200 rounded-xl">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-14 h-14 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-6">3</div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-purple-900 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Managing Book Status
                            </h4>
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <p class="text-gray-700 mb-4">
                                    Control whether books are visible for sale by toggling their active status:
                                </p>
                                <div class="grid md:grid-cols-2 gap-4">
                                    <div class="p-4 bg-green-50 border-2 border-green-200 rounded-lg">
                                        <div class="flex items-center mb-2">
                                            <svg class="w-6 h-6 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <h5 class="font-bold text-green-900">Active Books</h5>
                                        </div>
                                        <p class="text-sm text-green-800">Visible to customers and available for purchase. These books appear in search results and the catalogue.</p>
                                    </div>
                                    <div class="p-4 bg-gray-50 border-2 border-gray-300 rounded-lg">
                                        <div class="flex items-center mb-2">
                                            <svg class="w-6 h-6 text-gray-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <h5 class="font-bold text-gray-900">Inactive Books</h5>
                                        </div>
                                        <p class="text-sm text-gray-800">Hidden from customers but remain in your inventory. Useful for temporarily unavailable books.</p>
                                    </div>
                                </div>
                                <p class="mt-4 text-gray-700 text-sm">
                                    <strong>How to toggle:</strong> Edit the book and check/uncheck the "Is Active" checkbox, then save.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 4: Searching and Filtering -->
                <div class="mb-10 p-8 bg-gradient-to-br from-yellow-50 to-orange-50 border-2 border-yellow-200 rounded-xl">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-14 h-14 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-xl mr-6">4</div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-yellow-900 mb-4 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                Searching and Filtering Books
                            </h4>
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <p class="text-gray-700 mb-4">
                                    Use the powerful search and filter features on the Book Management page:
                                </p>
                                <div class="grid md:grid-cols-3 gap-4">
                                    <div class="p-4 bg-indigo-50 rounded-lg">
                                        <h5 class="font-bold text-indigo-900 mb-2">Search</h5>
                                        <p class="text-sm text-indigo-800">Search by title, author, or seller name for instant results</p>
                                    </div>
                                    <div class="p-4 bg-purple-50 rounded-lg">
                                        <h5 class="font-bold text-purple-900 mb-2">Category Filter</h5>
                                        <p class="text-sm text-purple-800">Filter books by category to find specific types</p>
                                    </div>
                                    <div class="p-4 bg-green-50 rounded-lg">
                                        <h5 class="font-bold text-green-900 mb-2">Status Filter</h5>
                                        <p class="text-sm text-green-800">Filter by active/inactive status to manage visibility</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Best Practices -->
                <div class="p-8 bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-green-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Best Practices for Book Management
                    </h4>
                    <div class="space-y-4">
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Use High-Quality Cover Images</h5>
                                <p class="text-gray-700 text-sm">High-resolution, clear cover images attract more customers and make your listings stand out in search results.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Write Detailed, Accurate Descriptions</h5>
                                <p class="text-gray-700 text-sm">Include key details about the book's content, condition, and special features. Honest descriptions build trust.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Keep Stock Quantities Up to Date</h5>
                                <p class="text-gray-700 text-sm">Regularly update stock numbers to prevent overselling. Set low stock alerts to stay informed.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Select Appropriate Categories</h5>
                                <p class="text-gray-700 text-sm">Choose the most specific category that fits your book. Proper categorization improves discoverability.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Set Competitive Prices</h5>
                                <p class="text-gray-700 text-sm">Research similar books and set competitive prices. Consider book condition, rarity, and market demand.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="mt-10">
                    <h4 class="text-2xl font-bold text-gray-900 mb-6">Quick Actions</h4>
                    <div class="grid md:grid-cols-2 gap-6">
                        <a href="{{ route('book-management.index') }}" class="group flex items-center p-6 bg-gradient-to-br from-indigo-50 to-blue-50 border-2 border-indigo-200 rounded-xl hover:shadow-lg hover:border-indigo-400 transition-all transform hover:-translate-y-1">
                            <div class="flex-shrink-0 w-16 h-16 bg-indigo-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h5 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-indigo-600 transition-colors">View My Books</h5>
                                <p class="text-sm text-gray-600">Browse and manage your book inventory</p>
                            </div>
                            <svg class="w-6 h-6 text-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <a href="{{ route('book-management.create') }}" class="group flex items-center p-6 bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-xl hover:shadow-lg hover:border-green-400 transition-all transform hover:-translate-y-1">
                            <div class="flex-shrink-0 w-16 h-16 bg-green-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h5 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-green-600 transition-colors">Add New Book</h5>
                                <p class="text-sm text-gray-600">Create a new book listing</p>
                            </div>
                            <svg class="w-6 h-6 text-green-600 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
