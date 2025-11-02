<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales Analytics') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Date Range Filter -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form method="GET" action="{{ route('analytics') }}" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                            <input type="date" name="start_date" id="start_date" value="{{ $startDate }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                            <input type="date" name="end_date" id="end_date" value="{{ $endDate }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="flex items-end">
                            <button type="submit" class="w-full inline-flex justify-center items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                                Apply Filter
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Key Metrics -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h4 class="text-sm font-medium text-gray-500">Total Sales</h4>
                        <p class="mt-2 text-3xl font-semibold text-indigo-600">${{ number_format($totalSales, 2) }}</p>
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
                        <h4 class="text-sm font-medium text-gray-500">Average Order Value</h4>
                        <p class="mt-2 text-3xl font-semibold text-indigo-600">${{ number_format($averageOrderValue, 2) }}</p>
                    </div>
                </div>
            </div>

            <!-- Sales Over Time Chart -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Sales Over Time</h3>
                    @if($salesOverTime->count() > 0)
                        <div class="space-y-2">
                            @foreach($salesOverTime as $month => $sales)
                                <div class="flex items-center">
                                    <div class="w-24 text-sm text-gray-600">{{ \Carbon\Carbon::createFromFormat('Y-m', $month)->format('M Y') }}</div>
                                    <div class="flex-1">
                                        <div class="bg-gray-200 rounded-full h-8 overflow-hidden">
                                            <div class="bg-indigo-600 h-full flex items-center px-2 text-xs text-white font-medium" style="width: {{ ($sales / $salesOverTime->max()) * 100 }}%;">
                                                ${{ number_format($sales, 2) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-sm text-gray-500">No sales data available for the selected period.</p>
                    @endif
                </div>
            </div>

            <!-- Top Selling Books -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Top Selling Books</h3>
                    @if($topSellingBooks->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Book</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Author</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Units Sold</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Revenue</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($topSellingBooks as $book)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $book->title }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $book->author }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${{ number_format($book->price, 2) }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $book->order_items_count }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-indigo-600">${{ number_format($book->price * $book->order_items_count, 2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-sm text-gray-500">No sales data available for the selected period.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

