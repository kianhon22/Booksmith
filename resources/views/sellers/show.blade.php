<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Seller Details') }}
            </h2>
            <a href="{{ route('sellers.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                {{ __('Back to Sellers') }}
            </a>
        </div>
    </x-slot>

    <div class=" mx-auto sm:px-6 lg:px-8 space-y-6">
        <!-- Seller Information -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h3 class="text-lg font-semibold text-black mb-2">Seller Information</h3>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $seller->is_approved ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                            {{ $seller->is_approved ? 'Approved' : 'Pending' }}
                        </span>
                    </div>
                    <div class="flex space-x-2">
                        @if(!$seller->is_approved)
                            <form action="{{ route('sellers.approve', $seller) }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700">
                                    {{ __('Approve') }}
                                </button>
                            </form>
                        @else
                            <form action="{{ route('sellers.reject', $seller) }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-yellow-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-700">
                                    {{ __('Revoke Approval') }}
                                </button>
                            </form>
                        @endif
                        @if($seller->books()->count() === 0 && $seller->orders()->count() === 0)
                            <form action="{{ route('sellers.destroy', $seller) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this seller?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700">
                                    {{ __('Delete') }}
                                </button>
                            </form>
                        @endif
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Name</p>
                        <p class="mt-1 text-sm text-black">{{ $seller->name }}</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Email</p>
                        <p class="mt-1 text-sm text-black">{{ $seller->email }}</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Phone</p>
                        <p class="mt-1 text-sm text-black">{{ $seller->phone }}</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Business Name</p>
                        <p class="mt-1 text-sm text-black">{{ $seller->business_name }}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="text-sm font-medium text-gray-500">Business Address</p>
                        <p class="mt-1 text-sm text-black">{{ $seller->business_registration_number }}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="text-sm font-medium text-gray-500">Business Description</p>
                        <p class="mt-1 text-sm text-black">{{ $seller->business_description }}</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Registered On</p>
                        <p class="mt-1 text-sm text-black">{{ $seller->created_at->format('M d, Y') }}</p>
                    </div>
                    @if($seller->approved_at)
                        <div>
                            <p class="text-sm font-medium text-gray-500">Approved On</p>
                            <p class="mt-1 text-sm text-black">{{ $seller->approved_at->format('M d, Y') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h4 class="text-sm font-medium text-gray-500">Total Books</h4>
                    <p class="mt-2 text-3xl font-semibold text-indigo-600">{{ $seller->books()->count() }}</p>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h4 class="text-sm font-medium text-gray-500">Active Books</h4>
                    <p class="mt-2 text-3xl font-semibold text-indigo-600">{{ $seller->books()->where('is_active', true)->count() }}</p>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h4 class="text-sm font-medium text-gray-500">Total Orders</h4>
                    <p class="mt-2 text-3xl font-semibold text-indigo-600">{{ $seller->orders()->count() }}</p>
                </div>
            </div>
        </div>

        <!-- Books -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-black mb-4">Books</h3>
                @if($seller->books->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Author</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($seller->books as $book)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">{{ $book->title }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $book->author }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">RM {{ number_format($book->price, 2) }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $book->stock }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $book->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                {{ $book->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-sm text-gray-500">No books uploaded yet.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

