<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{ route('docs.index') }}" class="mr-4 text-gray-600 hover:text-indigo-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="text-2xl font-bold text-gray-900">Order Management</h2>
        </div>
    </x-slot>

    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-sm p-8">
            <div class="prose max-w-none">
                <!-- Introduction -->
                <div class="mb-10">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Order Management Guide 📦</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        Learn how to efficiently manage and process customer orders. This guide covers viewing orders, understanding order statuses, and updating order information.
                    </p>
                </div>

                <!-- Viewing Orders -->
                <div class="mb-10 p-8 bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        Viewing Orders
                    </h4>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-700 mb-4">Access all your orders from the <strong>Orders</strong> menu in the sidebar. The orders page provides comprehensive order management tools:</p>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="p-4 bg-blue-50 rounded-lg border-2 border-blue-100">
                                <h5 class="font-bold text-blue-900 mb-2">📋 View All Orders</h5>
                                <p class="text-sm text-blue-800">See complete order history with customer information, order numbers, and totals</p>
                            </div>
                            <div class="p-4 bg-purple-50 rounded-lg border-2 border-purple-100">
                                <h5 class="font-bold text-purple-900 mb-2">🔍 Search & Filter</h5>
                                <p class="text-sm text-purple-800">Search by order number, customer name, or email. Filter by status to find specific orders quickly</p>
                            </div>
                            <div class="p-4 bg-green-50 rounded-lg border-2 border-green-100">
                                <h5 class="font-bold text-green-900 mb-2">📊 Order Details</h5>
                                <p class="text-sm text-green-800">Click on any order to view full details including items, customer shipping address, and order history</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Statuses -->
                <div class="mb-10 p-8 bg-gradient-to-br from-yellow-50 to-orange-50 border-2 border-yellow-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-yellow-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Understanding Order Statuses
                    </h4>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-700 mb-6">Each order has a status that indicates its current stage in the fulfillment process:</p>
                        <div class="space-y-4">
                            <div class="flex items-start p-5 bg-yellow-50 border-l-4 border-yellow-500 rounded-lg">
                                <div class="flex-shrink-0 w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold mr-4">P</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-yellow-900 mb-1">Pending</h5>
                                    <p class="text-yellow-800 text-sm">New order awaiting confirmation. Review order details and confirm availability before processing.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-5 bg-blue-50 border-l-4 border-blue-500 rounded-lg">
                                <div class="flex-shrink-0 w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">Pr</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-blue-900 mb-1">Processing</h5>
                                    <p class="text-blue-800 text-sm">Order confirmed and being prepared for shipment. Package items and prepare shipping label.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-5 bg-purple-50 border-l-4 border-purple-500 rounded-lg">
                                <div class="flex-shrink-0 w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4">S</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-purple-900 mb-1">Shipped</h5>
                                    <p class="text-purple-800 text-sm">Order has been shipped to the customer. Update with tracking information if available.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-5 bg-green-50 border-l-4 border-green-500 rounded-lg">
                                <div class="flex-shrink-0 w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-4">D</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-green-900 mb-1">Delivered</h5>
                                    <p class="text-green-800 text-sm">Order successfully delivered to the customer. Order is complete and fulfilled.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-5 bg-red-50 border-l-4 border-red-500 rounded-lg">
                                <div class="flex-shrink-0 w-12 h-12 bg-red-500 rounded-full flex items-center justify-center text-white font-bold mr-4">C</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-red-900 mb-1">Cancelled</h5>
                                    <p class="text-red-800 text-sm">Order was cancelled. This could be due to customer request, out of stock items, or other issues.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Updating Orders -->
                <div class="mb-10 p-8 bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-indigo-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Updating Order Status
                    </h4>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-4">1</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-gray-900 mb-2">Click on an Order</h5>
                                    <p class="text-gray-700 text-sm">Navigate to the Orders page and click on any order to view its complete details.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-4">2</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-gray-900 mb-2">Update Order Status</h5>
                                    <p class="text-gray-700 text-sm">Use the status dropdown to change the order status as you progress through fulfillment. Common flow: Pending → Processing → Shipped → Delivered</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-4">3</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-gray-900 mb-2">Add Order Notes</h5>
                                    <p class="text-gray-700 text-sm">Include important notes such as tracking numbers, special instructions, or customer communications for future reference.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-4">4</div>
                                <div class="flex-1">
                                    <h5 class="font-bold text-gray-900 mb-2">Automatic Notifications</h5>
                                    <p class="text-gray-700 text-sm">When you update an order status, the customer automatically receives an email notification about the change.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 p-4 bg-green-50 border-l-4 border-green-500 rounded">
                            <p class="text-sm text-green-800">
                                <strong>💡 Pro Tip:</strong> Update order statuses promptly to keep customers informed. Customers appreciate transparency and timely updates about their orders.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Best Practices -->
                <div class="p-8 bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-xl">
                    <h4 class="text-2xl font-bold text-green-900 mb-6 flex items-center">
                        <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Order Management Best Practices
                    </h4>
                    <div class="space-y-4">
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Review Orders Daily</h5>
                                <p class="text-gray-700 text-sm">Check for new orders regularly and update statuses promptly to maintain excellent customer service.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Verify Stock Before Processing</h5>
                                <p class="text-gray-700 text-sm">Always confirm item availability before changing status to "Processing" to avoid fulfillment issues.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Add Tracking Information</h5>
                                <p class="text-gray-700 text-sm">When marking orders as "Shipped", include tracking numbers in the notes section so customers can track their packages.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white p-5 rounded-lg shadow-md">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900 mb-1">Communicate Issues Promptly</h5>
                                <p class="text-gray-700 text-sm">If there are any problems with an order, update the status and add notes immediately to keep customers informed.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="mt-10">
                    <h4 class="text-2xl font-bold text-gray-900 mb-6">Quick Actions</h4>
                    <div class="grid md:grid-cols-2 gap-6">
                        <a href="{{ route('orders.index') }}" class="group flex items-center p-6 bg-gradient-to-br from-indigo-50 to-blue-50 border-2 border-indigo-200 rounded-xl hover:shadow-lg hover:border-indigo-400 transition-all transform hover:-translate-y-1">
                            <div class="flex-shrink-0 w-16 h-16 bg-indigo-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h5 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-indigo-600 transition-colors">View Orders</h5>
                                <p class="text-sm text-gray-600">Manage and process customer orders</p>
                            </div>
                            <svg class="w-6 h-6 text-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
