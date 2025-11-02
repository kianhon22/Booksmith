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
                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Sales Analytics & Reports</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">Track your performance with detailed analytics and insights.</p>

                <div class="space-y-6">
                    <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-3">Key Metrics</h4>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <p class="font-semibold text-gray-900 dark:text-gray-100">Total Revenue</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Track your total earnings from paid orders</p>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900 dark:text-gray-100">Total Orders</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Number of orders received</p>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900 dark:text-gray-100">Top Selling Books</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">See which books perform best</p>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900 dark:text-gray-100">Monthly Trends</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Revenue trends over time</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-3">Using Analytics</h4>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-400 list-disc list-inside">
                            <li>Review analytics regularly to understand sales patterns</li>
                            <li>Identify top-selling books to optimize your inventory</li>
                            <li>Monitor monthly revenue to track business growth</li>
                            <li>Use insights to make informed business decisions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

