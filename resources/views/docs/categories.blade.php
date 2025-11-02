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
                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Book Categories</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">Understanding book categories helps organize your inventory effectively.</p>

                <div class="p-6 bg-blue-50 dark:bg-blue-900/30 border border-blue-200 dark:border-blue-800 rounded-lg mb-6">
                    <h4 class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-3">Available Categories</h4>
                    <div class="grid md:grid-cols-2 gap-2 text-sm text-blue-800 dark:text-blue-200">
                        <ul class="space-y-1">
                            <li>• Fiction</li>
                            <li>• Non-Fiction</li>
                            <li>• Science Fiction & Fantasy</li>
                            <li>• Mystery & Thriller</li>
                            <li>• Romance</li>
                            <li>• Biography & Memoir</li>
                            <li>• History</li>
                            <li>• Science & Technology</li>
                        </ul>
                        <ul class="space-y-1">
                            <li>• Self-Help</li>
                            <li>• Business & Economics</li>
                            <li>• Children's Books</li>
                            <li>• Young Adult</li>
                            <li>• Poetry</li>
                            <li>• Art & Photography</li>
                            <li>• Cooking</li>
                        </ul>
                    </div>
                </div>

                <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-3">Choosing the Right Category</h4>
                    <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Select the most specific category that fits your book
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Proper categorization helps customers find your books easier
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            You can filter and search books by category
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

