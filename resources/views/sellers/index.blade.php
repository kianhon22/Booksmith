<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Manage Sellers</h2>
    </x-slot>

    <!-- Filters -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 mb-6">
        <form method="GET" class="flex flex-wrap gap-4">
            <div class="flex-1 min-w-[200px]">
                <x-search-input name="search" placeholder="Search sellers..." :value="request('search')" />
            </div>
            <div>
                <select name="status" onchange="this.form.submit()" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-lg shadow-sm">
                    <option value="">All Status</option>
                    <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="approved" {{ request('status') === 'approved' ? 'selected' : '' }}>Approved</option>
                </select>
            </div>
        </form>
    </div>

    <!-- Sellers Table -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @if($sellers->count() > 0)
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Seller</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Business</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Books</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Orders</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach($sellers as $seller)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $seller->name }}</div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ $seller->email }}</div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ $seller->phone }}</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 dark:text-gray-100">{{ $seller->business_name }}</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">{{ Str::limit($seller->business_address, 50) }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                    {{ $seller->books_count }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                    {{ $seller->orders_count }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($seller->is_approved)
                                        <x-badge color="green">Approved</x-badge>
                                    @else
                                        <x-badge color="yellow">Pending</x-badge>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                    <a href="{{ route('sellers.show', $seller) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                    @if(!$seller->is_approved)
                                        <form method="POST" action="{{ route('sellers.approve', $seller) }}" class="inline">
                                            @csrf
                                            <button type="submit" class="text-green-600 hover:text-green-900">Approve</button>
                                        </form>
                                    @else
                                        <form method="POST" action="{{ route('sellers.reject', $seller) }}" class="inline">
                                            @csrf
                                            <button type="submit" class="text-yellow-600 hover:text-yellow-900">Revoke</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="p-6">
                {{ $sellers->links() }}
            </div>
        @else
            <x-empty-state 
                title="No sellers found" 
                description="No sellers match your search criteria."
                :icon="'<svg class=\'w-full h-full\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\'></path></svg>'"
            />
        @endif
    </div>
</x-app-layout>

