<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-900">Admin Dashboard</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <x-stats-card 
            title="Total Sellers" 
            :value="$totalSellers"
            color="indigo"
            :icon="'<svg class=\'w-6 h-6 text-white\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\'></path></svg>'"
        >
            <x-slot name="footer">
                <span class="text-sm text-gray-600 dark:text-gray-400">{{ $pendingSellers }} pending approval</span>
            </x-slot>
        </x-stats-card>

        <x-stats-card 
            title="Total Books" 
            :value="$totalBooks"
            color="indigo"
            :icon="'<svg class=\'w-6 h-6 text-white\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\'></path></svg>'"
        >
            <x-slot name="footer">
                <span class="text-sm text-gray-600 dark:text-gray-400">{{ $activeBooks }} active</span>
            </x-slot>
        </x-stats-card>

        <x-stats-card 
            title="Total Orders" 
            :value="$totalOrders"
            color="indigo"
            :icon="'<svg class=\'w-6 h-6 text-white\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z\'></path></svg>'"
        />

        <x-stats-card 
            title="Total Revenue" 
            :value="'$' . number_format($totalRevenue, 2)"
            color="indigo"
            :icon="'<svg class=\'w-6 h-6 text-white\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z\'></path></svg>'"
        />
    </div>

            <!-- Recent Activity -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Recent Orders -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Recent Orders</h3>
                            <a href="{{ route('orders.index') }}" class="text-sm text-indigo-600 hover:text-indigo-800">View all</a>
                        </div>
                        @if($recentOrders->count() > 0)
                            <div class="space-y-3">
                                @foreach($recentOrders as $order)
                                    <div class="flex items-center justify-between py-2 border-b border-gray-200 last:border-0">
                                        <div>
                                            <p class="font-medium text-gray-900">{{ $order->order_number }}</p>
                                            <p class="text-sm text-gray-600">{{ $order->customer_name }}</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="font-medium text-gray-900">${{ number_format($order->total, 2) }}</p>
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
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
                            <p class="text-gray-500">No recent orders</p>
                        @endif
                    </div>
                </div>

                <!-- Recent Books -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Recent Books</h3>
                            <a href="{{ route('book-management.index') }}" class="text-sm text-indigo-600 hover:text-indigo-800">View all</a>
                        </div>
                        @if($recentBooks->count() > 0)
                            <div class="space-y-3">
                                @foreach($recentBooks as $book)
                                    <div class="flex items-center justify-between py-2 border-b border-gray-200 last:border-0">
                                        <div class="flex-1">
                                            <p class="font-medium text-gray-900">{{ $book->title }}</p>
                                            <p class="text-sm text-gray-600">by {{ $book->author }} • {{ $book->seller->name }}</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="font-medium text-gray-900">${{ number_format($book->price, 2) }}</p>
                                            <p class="text-sm text-gray-600">Stock: {{ $book->stock }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-gray-500">No recent books</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
