<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales Analytics') }}
        </h2>
    </x-slot>

    <div class=" mx-auto sm:px-6 lg:px-8 space-y-6">
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
                    <div class="flex items-end gap-2">
                        <button type="submit" class="flex-1 inline-flex justify-center items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                            Filter
                        </button>
                        <a href="{{ route('analytics') }}" class="flex-1 inline-flex justify-center items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                            Reset
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Key Metrics -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h4 class="text-sm font-medium text-gray-500">Total Sales</h4>
                    <p class="mt-2 text-3xl font-semibold text-indigo-600">RM {{ number_format($totalSales, 2) }}</p>
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
                    <p class="mt-2 text-3xl font-semibold text-indigo-600">RM {{ number_format($averageOrderValue, 2) }}</p>
                </div>
            </div>
        </div>

        <!-- Sales Over Time Chart -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-black mb-4">Sales Over Time</h3>
                @if($salesOverTime->count() > 0)
                    <div class="space-y-2">
                        @php
                            $maxSales = $salesOverTime->max();
                        @endphp
                        @foreach($salesOverTime as $month => $sales)
                            <div class="flex items-center">
                                <div class="w-24 text-sm text-gray-600">{{ \Carbon\Carbon::createFromFormat('Y-m', $month)->format('M Y') }}</div>
                                <div class="flex-1">
                                    <div class="bg-gray-200 rounded-full h-8 overflow-hidden">
                                        <div class="bg-indigo-600 h-full flex items-center px-2 text-sm text-white font-medium" style="width: {{ $maxSales > 0 ? ($sales / $maxSales) * 100 : 0 }}%;">
                                            RM {{ number_format($sales, 2) }}
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
    </div>
</x-app-layout>

