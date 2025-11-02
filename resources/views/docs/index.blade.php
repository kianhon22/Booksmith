<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documentation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-6">Platform Documentation</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($sections as $slug => $title)
                            <a href="{{ route('docs.show', $slug) }}" class="block p-6 bg-white border border-gray-200 rounded-lg hover:bg-gray-50 hover:shadow-md transition-all duration-300">
                                <h4 class="text-lg font-semibold text-indigo-600 mb-2">{{ $title }}</h4>
                                <p class="text-sm text-gray-600">
                                    @if($slug === 'getting-started')
                                        Learn how to get started with the platform and set up your account.
                                    @elseif($slug === 'managing-books')
                                        Learn how to add, edit, and manage your book listings.
                                    @elseif($slug === 'orders')
                                        Understand how to process and manage customer orders.
                                    @elseif($slug === 'analytics')
                                        View and understand your sales analytics and performance.
                                    @elseif($slug === 'account')
                                        Manage your profile and account settings.
                                    @endif
                                </p>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
