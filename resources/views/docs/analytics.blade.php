<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{ route('docs.index') }}" class="mr-4 text-gray-600 hover:text-indigo-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="text-2xl font-bold text-gray-900">Sales Analytics</h2>
        </div>
    </x-slot>

    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-sm p-8">
            <div class="prose max-w-none">
                <!-- Introduction -->
                <div class="mb-10">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Sales Analytics & Reports 📊</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        Track your performance with comprehensive analytics and insights. Understand your sales patterns, identify top-performing books, and make data-driven decisions to grow your business.
                    </p>
                    <div class="p-6 bg-purple-50 border-l-4 border-purple-500 rounded-lg">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-purple-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-purple-900">Seller-Only Feature</p>
                                <p class="text-purple-800 text-sm mt-1">Analytics are available exclusively to sellers. Use these insights to optimize your inventory and pricing strategies.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Key Metrics -->
                <div class="mb-10 p-8 bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        Key Metrics Overview
                    </h4>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-700 mb-6">The analytics dashboard provides you with essential metrics to understand your business performance:</p>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="p-5 bg-gradient-to-br from-green-50 to-emerald-50 rounded-lg border-2 border-green-200">
                                <div class="flex items-center mb-3">
                                    <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h5 class="font-bold text-green-900">Total Revenue</h5>
                                </div>
                                <p class="text-green-800 text-sm">Track your total earnings from all completed and delivered orders. This is your gross revenue before expenses.</p>
                            </div>
                            <div class="p-5 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-lg border-2 border-blue-200">
                                <div class="flex items-center mb-3">
                                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                        </svg>
                                    </div>
                                    <h5 class="font-bold text-blue-900">Total Orders</h5>
                                </div>
                                <p class="text-blue-800 text-sm">See the total number of orders you've received. Monitor order volume to understand customer demand patterns.</p>
                            </div>
                            <div class="p-5 bg-gradient-to-br from-purple-50 to-pink-50 rounded-lg border-2 border-purple-200">
                                <div class="flex items-center mb-3">
                                    <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>
                                    <h5 class="font-bold text-purple-900">Top Selling Books</h5>
                                </div>
                                <p class="text-purple-800 text-sm">Identify which books perform best. Focus on restocking popular titles and understand what customers want.</p>
                            </div>
                            <div class="p-5 bg-gradient-to-br from-yellow-50 to-orange-50 rounded-lg border-2 border-yellow-200">
                                <div class="flex items-center mb-3">
                                    <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                    </div>
                                    <h5 class="font-bold text-yellow-900">Monthly Trends</h5>
                                </div>
                                <p class="text-yellow-800 text-sm">View revenue trends over time to identify growth patterns, seasonal variations, and business performance.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Using Analytics -->
                <div class="mb-10 p-8 bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-indigo-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        How to Use Analytics
                    </h4>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="space-y-6">
                            <div class="flex items-start p-5 bg-indigo-50 rounded-lg">
                                <div class="flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-4">1</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-gray-900 mb-2">Review Analytics Regularly</h5>
                                    <p class="text-gray-700 text-sm">Check your analytics dashboard regularly (weekly or monthly) to stay informed about your sales performance and identify trends early.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-5 bg-indigo-50 rounded-lg">
                                <div class="flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-4">2</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-gray-900 mb-2">Identify Top-Selling Books</h5>
                                    <p class="text-gray-700 text-sm">Use the top-selling books feature to understand customer preferences. Focus on restocking popular titles and consider adding similar books to your inventory.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-5 bg-indigo-50 rounded-lg">
                                <div class="flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-4">3</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-gray-900 mb-2">Monitor Monthly Revenue</h5>
                                    <p class="text-gray-700 text-sm">Track revenue trends over time to understand seasonal patterns, growth periods, and areas that need attention. Use this data to plan inventory purchases.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-5 bg-indigo-50 rounded-lg">
                                <div class="flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-4">4</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-gray-900 mb-2">Make Informed Decisions</h5>
                                    <p class="text-gray-700 text-sm">Use analytics insights to make data-driven decisions about pricing, inventory management, and which books to stock. Analytics help you optimize your business strategy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Understanding Your Data -->
                <div class="mb-10 p-8 bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-green-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Understanding Your Analytics Data
                    </h4>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="space-y-5">
                            <div class="p-5 bg-green-50 rounded-lg border-l-4 border-green-500">
                                <h5 class="font-bold text-green-900 mb-2">Revenue Calculations</h5>
                                <p class="text-green-800 text-sm">Revenue is calculated from orders with "Delivered" status. Pending or cancelled orders are not included in revenue calculations.</p>
                            </div>
                            <div class="p-5 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                                <h5 class="font-bold text-blue-900 mb-2">Time Periods</h5>
                                <p class="text-blue-800 text-sm">Analytics show data from all your completed orders. Monthly trends help you see patterns over time and plan for future inventory.</p>
                            </div>
                            <div class="p-5 bg-purple-50 rounded-lg border-l-4 border-purple-500">
                                <h5 class="font-bold text-purple-900 mb-2">Top Sellers List</h5>
                                <p class="text-purple-800 text-sm">The top-selling books list is ranked by the number of units sold. Use this to identify your best performers and understand customer preferences.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Best Practices -->
                <div class="p-8 bg-gradient-to-br from-yellow-50 to-orange-50 border-2 border-yellow-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-yellow-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Analytics Best Practices
                    </h4>
                    <div class="space-y-4">
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Check Analytics Weekly</h5>
                                <p class="text-gray-700 text-sm">Regular monitoring helps you catch trends early and respond quickly to changes in demand or sales patterns.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Compare Performance Over Time</h5>
                                <p class="text-gray-700 text-sm">Look at monthly trends to understand seasonal patterns, identify growth periods, and plan inventory accordingly.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Use Top Sellers to Guide Inventory</h5>
                                <p class="text-gray-700 text-sm">Focus on restocking top-selling books and consider adding similar titles. This data-driven approach maximizes your sales potential.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Set Goals Based on Trends</h5>
                                <p class="text-gray-700 text-sm">Use historical data to set realistic sales goals and track your progress. Analytics help you measure success and identify areas for improvement.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="mt-10">
                    <h4 class="text-2xl font-bold text-gray-900 mb-6">Quick Actions</h4>
                    <div class="grid md:grid-cols-2 gap-6">
                        <a href="{{ route('analytics') }}" class="group flex items-center p-6 bg-gradient-to-br from-indigo-50 to-blue-50 border-2 border-indigo-200 rounded-xl hover:shadow-lg hover:border-indigo-400 transition-all transform hover:-translate-y-1">
                            <div class="flex-shrink-0 w-16 h-16 bg-indigo-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h5 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-indigo-600 transition-colors">View Analytics</h5>
                                <p class="text-sm text-gray-600">Access your sales analytics dashboard</p>
                            </div>
                            <svg class="w-6 h-6 text-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <a href="{{ route('docs.show', 'order-management') }}" class="group flex items-center p-6 bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-xl hover:shadow-lg hover:border-green-400 transition-all transform hover:-translate-y-1">
                            <div class="flex-shrink-0 w-16 h-16 bg-green-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h5 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-green-600 transition-colors">Order Management</h5>
                                <p class="text-sm text-gray-600">Learn about managing orders</p>
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
