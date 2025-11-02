<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Booksmith') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-white">
        <x-sidebar />

        <div class="lg:pl-64">
            <div class="sticky top-0 z-40 bg-white shadow-sm border-b border-gray-200">
                <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
                    <div class="flex-1 min-w-0 px-4">
                        @isset($header)
                            {{ $header }}
                        @endisset
                    </div>
                </div>
            </div>

            <!-- Flash Messages -->
            @if(session('success'))
                <div class="mx-4 mt-4 sm:mx-6 lg:mx-8">
                    <div class="bg-green-50 border-l-4 border-green-400 p-4 rounded-md" x-data="{ show: true }" x-show="show">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-3 flex-1">
                                <p class="text-sm text-green-700">{{ session('success') }}</p>
                            </div>
                            <div class="ml-auto pl-3">
                                <button @click="show = false" class="inline-flex text-green-400 hover:text-green-600">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if(session('error'))
                <div class="mx-4 mt-4 sm:mx-6 lg:mx-8">
                    <div class="bg-red-50 border-l-4 border-red-400 p-4 rounded-md" x-data="{ show: true }" x-show="show">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-3 flex-1">
                                <p class="text-sm text-red-700">{{ session('error') }}</p>
                            </div>
                            <div class="ml-auto pl-3">
                                <button @click="show = false" class="inline-flex text-red-400 hover:text-red-600">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if(session('info'))
                <div class="mx-4 mt-4 sm:mx-6 lg:mx-8">
                    <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded-md" x-data="{ show: true }" x-show="show">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-3 flex-1">
                                <p class="text-sm text-blue-700">{{ session('info') }}</p>
                            </div>
                            <div class="ml-auto pl-3">
                                <button @click="show = false" class="inline-flex text-blue-400 hover:text-blue-600">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <main class="flex-1">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-gray-200 mt-8">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <p class="text-center text-sm text-gray-500">
                        &copy; {{ date('Y') }} {{ config('app.name', 'Booksmith') }}. All rights reserved.
                    </p>
                </div>
            </footer>
        </div>
    </body>
</html>
