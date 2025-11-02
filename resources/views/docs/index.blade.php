<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-black">Documentation</h2>
    </x-slot>

    <div class=" mx-auto sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-indigo-600 to-indigo-800 rounded-lg shadow-lg mb-8 px-8 py-6 text-white">
            <h1 class="text-3xl font-bold mb-4">Welcome to Booksmith Documentation</h1>
            <p class="text-indigo-100 text-lg">
                Find comprehensive guides and documentation to help you start working with Booksmith as quickly as possible, as well as support from us.
            </p>
        </div>

        <!-- Documentation Grid -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="px-8 py-2">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($filteredSections as $slug => $section)
                        <a href="{{ route('docs.show', $slug) }}" class="group relative block p-6 bg-white border-2 border-gray-200 rounded-xl hover:border-indigo-500 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-indigo-100 text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $section['icon'] }}"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h3 class="text-lg font-semibold text-black group-hover:text-indigo-600 transition-colors mb-2">
                                        {{ $section['title'] }}
                                    </h3>
                                    <p class="text-sm text-gray-600">
                                        {{ $section['description'] }}
                                    </p>
                                </div>
                            </div>
                            <div class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </div>
                        </a>
                    @endforeach
                </div>

                @if($filteredSections->isEmpty())
                    <div class="text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-black">No documentation available</h3>
                        <p class="mt-1 text-sm text-gray-500">There are no documentation sections available for your role.</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- Quick Links Section -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <div class="flex items-center mb-3">
                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="text-lg font-semibold text-blue-900">Need Help?</h3>
                </div>
                <p class="text-sm text-blue-800">If you can't find what you're looking for, check our FAQ section or contact support.</p>
            </div>

            <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                <div class="flex items-center mb-3">
                    <svg class="w-6 h-6 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <h3 class="text-lg font-semibold text-green-900">Best Practices</h3>
                </div>
                <p class="text-sm text-green-800">Learn tips and tricks to make the most out of Booksmith and optimize your workflow.</p>
            </div>

            <div class="bg-purple-50 border border-purple-200 rounded-lg p-6">
                <div class="flex items-center mb-3">
                    <svg class="w-6 h-6 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                    </svg>
                    <h3 class="text-lg font-semibold text-purple-900">Video Tutorials</h3>
                </div>
                <p class="text-sm text-purple-800">Watch step-by-step video guides to learn platform features visually.</p>
            </div>
        </div>
    </div>
</x-app-layout>
