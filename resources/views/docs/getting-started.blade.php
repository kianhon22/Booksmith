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
                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Welcome to Booksmith!</h3>
                
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Booksmith is a comprehensive book selling platform that connects sellers with book enthusiasts. 
                    This guide will help you get started with the platform.
                </p>

                <div class="mb-8 p-6 bg-indigo-50 dark:bg-indigo-900/30 border border-indigo-200 dark:border-indigo-800 rounded-lg">
                    <h4 class="text-lg font-semibold text-indigo-900 dark:text-indigo-100 mb-3">Platform Overview</h4>
                    <p class="text-indigo-800 dark:text-indigo-200 mb-4">
                        Booksmith provides two main user roles:
                    </p>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-white dark:bg-indigo-900/50 p-4 rounded">
                            <h5 class="font-semibold text-indigo-900 dark:text-indigo-100 mb-2">Admin</h5>
                            <ul class="text-sm text-indigo-800 dark:text-indigo-200 space-y-1">
                                <li>• Approve sellers</li>
                                <li>• Manage categories</li>
                                <li>• Oversee all books and orders</li>
                                <li>• View platform analytics</li>
                            </ul>
                        </div>
                        <div class="bg-white dark:bg-indigo-900/50 p-4 rounded">
                            <h5 class="font-semibold text-indigo-900 dark:text-indigo-100 mb-2">Seller</h5>
                            <ul class="text-sm text-indigo-800 dark:text-indigo-200 space-y-1">
                                <li>• Upload books for sale</li>
                                <li>• Manage inventory</li>
                                <li>• Process orders</li>
                                <li>• Track sales analytics</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-3">Key Features</h4>
                        <div class="grid gap-4">
                            <div class="flex items-start p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-semibold text-gray-900 dark:text-gray-100">Book Management</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Easily add, edit, and organize your book inventory with detailed information and cover images.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-semibold text-gray-900 dark:text-gray-100">Order Processing</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Manage customer orders with status tracking and email notifications.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-semibold text-gray-900 dark:text-gray-100">Sales Analytics</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Track your sales performance with detailed analytics and reports.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-semibold text-gray-900 dark:text-gray-100">Search & Filtering</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Powerful search functionality to find books by title, author, ISBN, or category.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-6 bg-yellow-50 dark:bg-yellow-900/30 border border-yellow-200 dark:border-yellow-800 rounded-lg">
                        <h4 class="text-lg font-semibold text-yellow-900 dark:text-yellow-100 mb-3">Quick Start for Sellers</h4>
                        <ol class="list-decimal list-inside space-y-2 text-yellow-800 dark:text-yellow-200">
                            <li>Register as a seller with your business details</li>
                            <li>Wait for admin approval (1-3 business days)</li>
                            <li>Once approved, log in to your seller dashboard</li>
                            <li>Add your first book to the inventory</li>
                            <li>Start receiving and managing orders</li>
                        </ol>
                    </div>

                    <div class="mt-8">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-3">Next Steps</h4>
                        <div class="grid md:grid-cols-2 gap-4">
                            <a href="{{ route('docs.show', 'seller-registration') }}" class="flex items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition">
                                <svg class="w-8 h-8 text-indigo-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-semibold text-gray-900 dark:text-gray-100">Seller Registration</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Learn how to register</p>
                                </div>
                            </a>
                            <a href="{{ route('docs.show', 'managing-books') }}" class="flex items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition">
                                <svg class="w-8 h-8 text-indigo-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                <div>
                                    <h5 class="font-semibold text-gray-900 dark:text-gray-100">Managing Books</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Add and manage books</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

