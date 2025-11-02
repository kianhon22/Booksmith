<div class="fixed inset-y-0 left-0 z-50 w-64 bg-indigo-600 shadow-lg transform lg:translate-x-0">
    <div class="flex items-center justify-between h-16 px-6 border-b border-indigo-500">
        <a href="{{ route('dashboard') }}" class="flex items-center space-x-3">
            <x-application-logo class="h-8 w-8 fill-current text-white" />
            <span class="text-xl font-bold text-white">Booksmith</span>
        </a>
    </div>

    <nav class="flex-1 px-4 py-4 space-y-1 overflow-y-auto">
        <x-sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            Dashboard
        </x-sidebar-link>

        @if(Auth::user()->hasRole('admin'))
            <div class="pt-4 pb-2">
                <p class="px-4 text-xs font-semibold text-indigo-200 uppercase tracking-wider">Management</p>
            </div>

            <x-sidebar-link :href="route('sellers.index')" :active="request()->routeIs('sellers.*')">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                Sellers
            </x-sidebar-link>

            <x-sidebar-link :href="route('categories.index')" :active="request()->routeIs('categories.*')">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                </svg>
                Categories
            </x-sidebar-link>

            <x-sidebar-link :href="route('book-management.index')" :active="request()->routeIs('book-management.*')">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                Book Management
            </x-sidebar-link>

            <x-sidebar-link :href="route('orders.index')" :active="request()->routeIs('orders.*')">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                Orders
            </x-sidebar-link>

            <x-sidebar-link :href="route('permissions.index')" :active="request()->routeIs('permissions.*')">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
                Permissions
            </x-sidebar-link>
        @endif

        @if(Auth::user()->hasRole('seller'))
            <div class="pt-4 pb-2">
                <p class="px-4 text-xs font-semibold text-indigo-200 uppercase tracking-wider">My Business</p>
            </div>

            <x-sidebar-link :href="route('book-management.index')" :active="request()->routeIs('book-management.*')">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                My Books
            </x-sidebar-link>

            <x-sidebar-link :href="route('orders.index')" :active="request()->routeIs('orders.*')">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                My Orders
            </x-sidebar-link>

            <x-sidebar-link :href="route('analytics')" :active="request()->routeIs('analytics')">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
                Sales Analytics
            </x-sidebar-link>
        @endif

        <div class="pt-4 pb-2">
            <p class="px-4 text-xs font-semibold text-indigo-200 uppercase tracking-wider">Browse</p>
        </div>

        <x-sidebar-link :href="route('books.index')" :active="request()->routeIs('books.index', 'books.show')">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/>
            </svg>
            Book Catalogue
        </x-sidebar-link>

        <x-sidebar-link :href="route('docs.index')" :active="request()->routeIs('docs.*')">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            Documentation
        </x-sidebar-link>
    </nav>

    <div class="border-t border-indigo-500 p-4">
        <div class="flex items-center space-x-3 mb-3">
            <div class="flex-shrink-0">
                <div class="h-10 w-10 rounded-full bg-indigo-800 flex items-center justify-center border-2 border-indigo-400">
                    <span class="text-white font-semibold text-sm">{{ substr(Auth::user()->name, 0, 2) }}</span>
                </div>
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-white truncate">{{ Auth::user()->name }}</p>
                <p class="text-xs text-indigo-200 truncate">{{ Auth::user()->email }}</p>
            </div>
        </div>

        <div class="space-y-1">
            <x-sidebar-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                Profile
            </x-sidebar-link>

            <form method="POST" action="{{ route('logout') }}"> @csrf
                <button type="submit" class="flex items-center w-full px-3 py-2 text-sm text-white hover:bg-red-500 rounded-md transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>