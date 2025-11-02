<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seller Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Message -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900">Welcome back, {{ Auth::user()->name }}!</h3>
                    <p class="mt-1 text-sm text-gray-600">{{ Auth::user()->business_name }}</p>
                </div>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h4 class="text-sm font-medium text-gray-500">Total Books</h4>
                        <p class="mt-2 text-3xl font-semibold text-indigo-600">{{ $totalBooks }}</p>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h4 class="text-sm font-medium text-gray-500">Active Books</h4>
                        <p class="mt-2 text-3xl font-semibold text-indigo-600">{{ $activeBooks }}</p>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h4 class="text-sm font-medium text-gray-500">Total Orders</h4>
                        <p class="mt-2 text-3xl font-semibold text-indigo-600">{{ $totalOrders }}</p>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h4 class="text-sm font-medium text-gray-500">Pending Orders</h4>
                        <p class="mt-2 text-3xl font-semibold text-indigo-600">{{ $pendingOrders }}</p>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h4 class="text-sm font-medium text-gray-500">Total Sales</h4>
                        <p class="mt-2 text-3xl font-semibold text-indigo-600">${{ number_format($totalSales, 2) }}</p>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <a href="{{ route('book-management.create') }}" class="flex items-center justify-center px-4 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Add New Book
                        </a>
                        <a href="{{ route('book-management.index') }}" class="flex items-center justify-center px-4 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            My Books
                        </a>
                        <a href="{{ route('orders.index') }}" class="flex items-center justify-center px-4 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            My Orders
                        </a>
                        <a href="{{ route('analytics') }}" class="flex items-center justify-center px-4 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            Analytics
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Recent Books -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Recent Books</h3>
                            <a href="{{ route('book-management.index') }}" class="text-sm text-indigo-600 hover:text-indigo-900">View All</a>
                        </div>
                        @php
                            $recentBooks = Auth::user()->books()->latest()->take(5)->get();
                        @endphp
                        @if($recentBooks->count() > 0)
                            <div class="space-y-3">
                                @foreach($recentBooks as $book)
                                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                        <div class="flex-1">
                                            <p class="text-sm font-medium text-gray-900">{{ Str::limit($book->title, 40) }}</p>
                                            <p class="text-xs text-gray-500">{{ $book->author }}</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm font-semibold text-indigo-600">${{ number_format($book->price, 2) }}</p>
                                            <span class="text-xs {{ $book->is_active ? 'text-green-600' : 'text-red-600' }}">
                                                {{ $book->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-sm text-gray-500">No books added yet.</p>
                        @endif
                    </div>
                </div>

                <!-- Recent Orders -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Recent Orders</h3>
                            <a href="{{ route('orders.index') }}" class="text-sm text-indigo-600 hover:text-indigo-900">View All</a>
                        </div>
                        @php
                            $recentOrders = Auth::user()->orders()->latest()->take(5)->get();
                        @endphp
                        @if($recentOrders->count() > 0)
                            <div class="space-y-3">
                                @foreach($recentOrders as $order)
                                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                        <div class="flex-1">
                                            <p class="text-sm font-medium text-gray-900">{{ $order->order_number }}</p>
                                            <p class="text-xs text-gray-500">{{ $order->customer_name }}</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm font-semibold text-indigo-600">${{ number_format($order->total, 2) }}</p>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium
                                                @if($order->status === 'pending') bg-yellow-100 text-yellow-800
                                                @elseif($order->status === 'processing') bg-blue-100 text-blue-800
                                                @elseif($order->status === 'shipped') bg-purple-100 text-purple-800
                                                @elseif($order->status === 'delivered') bg-green-100 text-green-800
                                                @else bg-red-100 text-red-800
                                                @endif">
                                                {{ ucfirst($order->status) }}
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-sm text-gray-500">No orders yet.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

