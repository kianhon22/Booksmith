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
                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Order Management Guide</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">Learn how to manage and process customer orders efficiently.</p>

                <div class="space-y-6">
                    <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-3">Viewing Orders</h4>
                        <p class="text-gray-600 dark:text-gray-400">Access all your orders from the Orders menu in the sidebar. You can:</p>
                        <ul class="mt-3 space-y-2 text-gray-600 dark:text-gray-400 list-disc list-inside">
                            <li>View all orders with customer information</li>
                            <li>Filter by order status (pending, processing, shipped, delivered, cancelled)</li>
                            <li>Search orders by order number, customer name, or email</li>
                        </ul>
                    </div>

                    <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-3">Order Status</h4>
                        <div class="space-y-2 text-gray-600 dark:text-gray-400">
                            <p><strong class="text-yellow-600">Pending:</strong> New order awaiting confirmation</p>
                            <p><strong class="text-blue-600">Processing:</strong> Order confirmed and being prepared</p>
                            <p><strong class="text-purple-600">Shipped:</strong> Order has been shipped to customer</p>
                            <p><strong class="text-green-600">Delivered:</strong> Order successfully delivered</p>
                            <p><strong class="text-red-600">Cancelled:</strong> Order was cancelled</p>
                        </div>
                    </div>

                    <div class="p-6 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-3">Updating Orders</h4>
                        <ol class="mt-3 space-y-2 text-gray-600 dark:text-gray-400 list-decimal list-inside">
                            <li>Click on an order to view details</li>
                            <li>Update the order status as needed</li>
                            <li>Add notes for tracking or customer communication</li>
                            <li>Customer receives automatic email notification on status changes</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

