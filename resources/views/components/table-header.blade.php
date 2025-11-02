@props(['sortable' => false, 'direction' => null])

<th {{ $attributes->merge(['class' => 'px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-indigo-600']) }}>
    @if($sortable)
        <button class="flex items-center space-x-1 group">
            <span>{{ $slot }}</span>
            @if($direction === 'asc')
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5 15l5-5 5 5H5z"/>
                </svg>
            @elseif($direction === 'desc')
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M15 5l-5 5-5-5h10z"/>
                </svg>
            @else
                <svg class="w-4 h-4 opacity-0 group-hover:opacity-100 transition" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5 15l5-5 5 5H5z"/>
                </svg>
            @endif
        </button>
    @else
        {{ $slot }}
    @endif
</th>

