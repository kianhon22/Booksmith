<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{ route('docs.index') }}" class="mr-4 text-gray-600 hover:text-indigo-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="text-2xl font-bold text-gray-900">Managing Categories</h2>
        </div>
    </x-slot>

    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-sm p-8">
            <div class="prose max-w-none">
                <!-- Introduction -->
                <div class="mb-10">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Managing Book Categories 📚</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        Categories help organize your book inventory and make it easier for customers to find what they're looking for. This guide covers how to create and manage categories on Booksmith.
                    </p>
                </div>

                <!-- Overview Section -->
                <div class="mb-10 p-8 bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                        Understanding Categories
                    </h4>
                    <p class="text-blue-800 mb-6 text-lg">
                        Categories are essential for organizing your book inventory. They help customers quickly find books they're interested in and make browsing more efficient.
                    </p>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h5 class="text-lg font-bold text-gray-900 mb-4">Benefits of Proper Categorization</h5>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Better customer browsing experience</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Improved search and filter functionality</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Easier inventory management</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Professional organization</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Available Categories -->
                <div class="mb-10 p-8 bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-indigo-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Common Category Types
                    </h4>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-white p-5 rounded-lg shadow-md border-2 border-indigo-100">
                            <h5 class="font-bold text-indigo-900 mb-3">Fiction & Literature</h5>
                            <ul class="space-y-2 text-sm text-gray-700">
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-2"></span>
                                    Fiction
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-2"></span>
                                    Science Fiction & Fantasy
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-2"></span>
                                    Mystery & Thriller
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-2"></span>
                                    Romance
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-indigo-500 rounded-full mt-2 mr-2"></span>
                                    Poetry
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white p-5 rounded-lg shadow-md border-2 border-purple-100">
                            <h5 class="font-bold text-purple-900 mb-3">Non-Fiction</h5>
                            <ul class="space-y-2 text-sm text-gray-700">
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-purple-500 rounded-full mt-2 mr-2"></span>
                                    Biography & Memoir
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-purple-500 rounded-full mt-2 mr-2"></span>
                                    History
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-purple-500 rounded-full mt-2 mr-2"></span>
                                    Science & Technology
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-purple-500 rounded-full mt-2 mr-2"></span>
                                    Business & Economics
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-purple-500 rounded-full mt-2 mr-2"></span>
                                    Self-Help
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white p-5 rounded-lg shadow-md border-2 border-green-100">
                            <h5 class="font-bold text-green-900 mb-3">Specialty Categories</h5>
                            <ul class="space-y-2 text-sm text-gray-700">
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-2"></span>
                                    Children's Books
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-2"></span>
                                    Young Adult
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-2"></span>
                                    Art & Photography
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-2"></span>
                                    Cooking
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white p-5 rounded-lg shadow-md border-2 border-yellow-100">
                            <h5 class="font-bold text-yellow-900 mb-3">Additional Categories</h5>
                            <ul class="space-y-2 text-sm text-gray-700">
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-yellow-500 rounded-full mt-2 mr-2"></span>
                                    Non-Fiction
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-yellow-500 rounded-full mt-2 mr-2"></span>
                                    Educational
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-yellow-500 rounded-full mt-2 mr-2"></span>
                                    Reference
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-yellow-500 rounded-full mt-2 mr-2"></span>
                                    Travel
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- How to Create Categories -->
                <div class="mb-10">
                    <h4 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Creating and Managing Categories
                    </h4>
                    <div class="space-y-6">
                        <div class="flex items-start p-6 bg-blue-50 border-2 border-blue-100 rounded-xl">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">1</div>
                            <div class="flex-1">
                                <h5 class="text-lg font-bold text-gray-900 mb-2">Access Categories</h5>
                                <p class="text-gray-700 mb-3">Navigate to <strong>Categories</strong> from the sidebar menu (Admin only)</p>
                            </div>
                        </div>
                        <div class="flex items-start p-6 bg-green-50 border-2 border-green-100 rounded-xl">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-4">2</div>
                            <div class="flex-1">
                                <h5 class="text-lg font-bold text-gray-900 mb-2">Create New Category</h5>
                                <p class="text-gray-700 mb-3">Click <strong>"Create Category"</strong> and fill in:</p>
                                <ul class="list-disc list-inside ml-4 space-y-1 text-gray-700">
                                    <li>Category Name (required)</li>
                                    <li>Description (optional but recommended)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex items-start p-6 bg-purple-50 border-2 border-purple-100 rounded-xl">
                            <div class="flex-shrink-0 w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4">3</div>
                            <div class="flex-1">
                                <h5 class="text-lg font-bold text-gray-900 mb-2">Edit or Deactivate</h5>
                                <p class="text-gray-700">You can edit category details or deactivate categories that are no longer needed. Deactivated categories won't appear in filters but existing books remain assigned.</p>
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
                        Best Practices
                    </h4>
                    <div class="space-y-3">
                        <div class="flex items-start bg-white p-4 rounded-lg">
                            <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Select the Most Specific Category</h5>
                                <p class="text-gray-700 text-sm">Choose the category that best describes your book's primary subject or genre.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-4 rounded-lg">
                            <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Use Standard Category Names</h5>
                                <p class="text-gray-700 text-sm">Stick to commonly recognized category names to help customers find books easily.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-4 rounded-lg">
                            <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Keep Categories Active</h5>
                                <p class="text-gray-700 text-sm">Only deactivate categories that are truly obsolete. Active categories improve search functionality.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="mt-10">
                    <h4 class="text-2xl font-bold text-gray-900 mb-6">Next Steps</h4>
                    <div class="grid md:grid-cols-2 gap-6">
                        <a href="{{ route('categories.index') }}" class="group flex items-center p-6 bg-gradient-to-br from-indigo-50 to-blue-50 border-2 border-indigo-200 rounded-xl hover:shadow-lg hover:border-indigo-400 transition-all transform hover:-translate-y-1">
                            <div class="flex-shrink-0 w-16 h-16 bg-indigo-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h5 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-indigo-600 transition-colors">Manage Categories</h5>
                                <p class="text-sm text-gray-600">Create and manage book categories</p>
                            </div>
                            <svg class="w-6 h-6 text-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <a href="{{ route('docs.show', 'managing-books') }}" class="group flex items-center p-6 bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-xl hover:shadow-lg hover:border-green-400 transition-all transform hover:-translate-y-1">
                            <div class="flex-shrink-0 w-16 h-16 bg-green-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h5 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-green-600 transition-colors">Managing Books</h5>
                                <p class="text-sm text-gray-600">Learn how to assign categories to books</p>
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
