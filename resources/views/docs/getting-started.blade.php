<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{ route('docs.index') }}" class="mr-4 text-gray-600 hover:text-indigo-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="text-2xl font-bold text-black">Getting Started</h2>
        </div>
    </x-slot>

    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-sm p-8">
            <div class="prose max-w-none">
                <!-- Introduction -->
                <div class="mb-10">
                    <h3 class="text-3xl font-bold text-black mb-4">Welcome to Booksmith! 📚</h3>
                    
                    <p class="text-lg text-gray-600 mb-6">
                        Booksmith is a comprehensive book selling platform that connects sellers with book enthusiasts. 
                        This guide will help you get started with the platform and make the most of its features.
                    </p>
                </div>

                <!-- Platform Overview -->
                <div class="mb-10 p-8 bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-indigo-900 mb-4 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Platform Overview
                    </h4>
                    <p class="text-indigo-800 mb-6 text-lg">
                        Booksmith provides two main user roles, each with specific capabilities:
                    </p>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow-md border-2 border-indigo-100">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-3">
                                    A
                                </div>
                                <h5 class="text-xl font-bold text-indigo-900">Admin</h5>
                            </div>
                            <ul class="text-sm text-gray-700 space-y-2">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Approve and manage sellers</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Create and manage book categories</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Oversee all books and orders</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Manage user permissions</span>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md border-2 border-purple-100">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-3">
                                    S
                                </div>
                                <h5 class="text-xl font-bold text-purple-900">Seller</h5>
                            </div>
                            <ul class="text-sm text-gray-700 space-y-2">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Upload and manage book listings</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Track and manage inventory</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Process customer orders</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>View detailed sales analytics</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Key Features Section -->
                <div class="mb-10">
                    <h4 class="text-2xl font-bold text-black mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                        Key Features
                    </h4>
                    <div class="grid gap-6">
                        <div class="flex items-start p-6 bg-blue-50 border-2 border-blue-100 rounded-xl hover:shadow-md transition-shadow">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="text-lg font-bold text-black mb-2">Book Management</h5>
                                <p class="text-gray-700">Easily add, edit, and organize your book inventory with detailed information, cover images, and automatic slug generation for SEO-friendly URLs.</p>
                            </div>
                        </div>
                        <div class="flex items-start p-6 bg-green-50 border-2 border-green-100 rounded-xl hover:shadow-md transition-shadow">
                            <div class="flex-shrink-0 w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="text-lg font-bold text-black mb-2">Order Processing</h5>
                                <p class="text-gray-700">Manage customer orders with real-time status tracking, automated email notifications, and comprehensive order history.</p>
                            </div>
                        </div>
                        <div class="flex items-start p-6 bg-purple-50 border-2 border-purple-100 rounded-xl hover:shadow-md transition-shadow">
                            <div class="flex-shrink-0 w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="text-lg font-bold text-black mb-2">Sales Analytics</h5>
                                <p class="text-gray-700">Track your sales performance with detailed analytics, revenue reports, and best-selling book insights (Seller feature).</p>
                            </div>
                        </div>
                        <div class="flex items-start p-6 bg-yellow-50 border-2 border-yellow-100 rounded-xl hover:shadow-md transition-shadow">
                            <div class="flex-shrink-0 w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="text-lg font-bold text-black mb-2">Advanced Search & Filtering</h5>
                                <p class="text-gray-700">Powerful search functionality to find books by title, author, category, with reactive filtering for instant results.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Start for Sellers -->
                <div class="mb-10 p-8 bg-gradient-to-br from-yellow-50 to-orange-50 border-2 border-yellow-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-yellow-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Quick Start for Sellers
                    </h4>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold mr-4">1</div>
                            <div class="flex-1">
                                <h5 class="font-bold text-yellow-900 mb-1">Register Your Account</h5>
                                <p class="text-yellow-800">Fill in your personal and business information during registration</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold mr-4">2</div>
                            <div class="flex-1">
                                <h5 class="font-bold text-yellow-900 mb-1">Wait for Admin Approval</h5>
                                <p class="text-yellow-800">Typically takes 1-2 business days. You'll receive an email notification once approved</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold mr-4">3</div>
                            <div class="flex-1">
                                <h5 class="font-bold text-yellow-900 mb-1">Access Your Dashboard</h5>
                                <p class="text-yellow-800">Log in to your seller dashboard and explore the features</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold mr-4">4</div>
                            <div class="flex-1">
                                <h5 class="font-bold text-yellow-900 mb-1">Add Your First Book</h5>
                                <p class="text-yellow-800">Upload your book details, cover image, and set pricing</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold mr-4">5</div>
                            <div class="flex-1">
                                <h5 class="font-bold text-yellow-900 mb-1">Start Selling!</h5>
                                <p class="text-yellow-800">Begin receiving and managing orders from customers</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Next Steps -->
                <div>
                    <h4 class="text-2xl font-bold text-black mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                        Next Steps
                    </h4>
                    <div class="grid md:grid-cols-2 gap-6">
                        <a href="{{ route('docs.show', 'seller-registration') }}" class="group flex items-center p-6 bg-gradient-to-br from-indigo-50 to-blue-50 border-2 border-indigo-200 rounded-xl hover:shadow-lg hover:border-indigo-400 transition-all transform hover:-translate-y-1">
                            <div class="flex-shrink-0 w-16 h-16 bg-indigo-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h5 class="text-lg font-bold text-black mb-1 group-hover:text-indigo-600 transition-colors">Seller Registration</h5>
                                <p class="text-sm text-gray-600">Complete guide to registering as a seller</p>
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
                                <h5 class="text-lg font-bold text-black mb-1 group-hover:text-green-600 transition-colors">Managing Books</h5>
                                <p class="text-sm text-gray-600">Learn how to add and manage your inventory</p>
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

